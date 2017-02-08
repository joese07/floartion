<?php namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use Session;
use Validator;

use Illuminate\Http\Request;

class AdminPostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	
	protected $rules = [
		'title' => ['required', 'min:5'],
		'content' => ['required'],
	];
	 
	
	public function index()
	{
		$post = Post::orderBy('id','desc')->paginate(5);
		return view('blog.admin.index', compact('post'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blog.admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	$this->validate($request, $this->rules);
	$input = Input::all();
	$input['read_more'] = (strlen($input['content']) > 220) ? substr($input['content'], 0, 220) : $input['content'];
	$file = array('image' => Input::file('image'));
	if (Input::file('image')->isValid()) {
    $destinationPath = 'uploads'; // upload path
    $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
    $fileName = rand(11111,99999).'.'.$extension; // renaming image
    Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
	$input['image'] =$destinationPath. '/'.$fileName;
	Post::create( $input );
	return Redirect::route('dashboard.post.index')->with('message', 'Post created');
	}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Post $post)
	{
		return view('blog.admin.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Post $post, Request $request)
	{
	$this->validate($request, $this->rules);
	$input = array_except(Input::all(), '_method');
	$input['read_more'] = (strlen($input['content']) > 220) ? substr($input['content'], 0, 220) : $input['content'];
	
	if (Input::hasFile('image'))
	{
		$file = array('image' => Input::file('image'));
		if (Input::file('image')->isValid()) {
   		$destinationPath = 'uploads/'; // upload path
    	$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
    	$fileName = rand(11111,99999).'.'.$extension; // renaming image
    	Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
		$input['image'] = $destinationPath.$fileName;
		$post->update($input); 
		return Redirect::route('dashboard.post.index')->with('message', 'Post edited');
		}
	}else {
	$post->update($input); 
	return Redirect::route('dashboard.post.index')->with('message', 'Post edited');
	}
	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Post $post)
	{
	$post->delete();
	return Redirect::route('dashboard.post.index');
	}

}
