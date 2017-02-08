<?php namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use Validator;

use Illuminate\Http\Request;

class BlogController extends Controller {

	public function index()
    {
	$posts = Post::orderBy('id','desc')->paginate(5);
	return view('blog.list', compact('posts'));
	}
	
	public function showPost(Post $post)
	{
	$comments = $post->comments()->get();
	return view('blog.detail', compact('post','comments'));
	}
	
	public function newComment(Post $post, Request $request) 
	{
    $valid = Validator::make($request->all(), [
			'commenter' => 'required',
            'email' => 'required | email',
            'comment' => 'required',
    ]);

    if ($valid->passes()) {
	$input = Input::all();
	$input['post_id'] = $post->id;
	Comment::create( $input );
	$post->comment_count = Comment::where('post_id', '=', $post->id)->count();
	$post->save();

		return Redirect::route('post.show', $post->id)->with('message', 'Comment Received.');
        } else {
        return Redirect::route('post.show', $post->id)->with('message', 'Comment Failed.');
        }
	}

}
