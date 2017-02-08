<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Contactmodel;
use Mail;

class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('blog.contact');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function save(Request $r)
	{
		$kontak = Contactmodel::find($r->input('id'));
		// $kontak = new Contactmodel;
		// $kontak->nama=$r->input('nama');
		// $kontak->email=$r->input('email');
		// $kontak->pesan=$r->input('pesan');
		// $kontak->save();

		Mail::send('blog.admin.email', ['text' => $r->input('pesan')], function($message) use($r,$kontak)
		{
			$message->from(env('MAIL_USERNAME'),'Joese');
		    $message->to($r->input('email'),$kontak->nama)->subject('HEllO, Pesan Anda Telah di Terima, Terimakasih');
		});

		return redirect(url('/dashboard/message'));
		


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
		//
	}

}
