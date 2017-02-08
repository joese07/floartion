<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Gallery;
use Input;
use Redirect;
use Session;

class AdminGalerryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$galeri = Gallery::orderBy('id','desc')->paginate(5);
		return view('blog.admin.galeri')->with('gallery',$galeri);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blog.admin.creategaleri');
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tambah = new Gallery();
		$tambah->visual=$request['nama'];
		$tambah->id=$request['id'];

		$file = $request->file('gambar');
		$fileName = $file->getClientOriginalName();
		$request->file('gambar')->move("image/",$fileName);

		$tambah->visual = $fileName;
		$tambah->save();

		return redirect()->to('dashboard/adgallery');
	}

	public function save(Request $r)
	{
		$galeri = new Gallery;
		$galeri->visual=$r->input('nama');
		$galeri->save();
		return redirect(url('galeri'));
		


		//
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
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\App\Gallery::find($id)->delete(); 
		return redirect('dashboard/adgallery');
	}

}
