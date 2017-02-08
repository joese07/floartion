<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Gallery;
use Input;
use Redirect;
use Session;


class AdminGalleryTController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('blog.admin.creategaleri');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response

	 */
	public function save(Request $r)
	{
		


		//
	}
	public function create()
	{
		//
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

		return redirect()->to('/');
		
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
		//
	}

}
