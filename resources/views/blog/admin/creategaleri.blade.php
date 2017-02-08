@extends('app')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Data</div>
				<div class="panel-body">
				<div class="row">
			<div class="col-md-12">
			<form method="post" action="{{ url('dashboard/adgallery') }}" enctype="multipart/form-data">
			   <input type="hidden" name="_token" value="{{ csrf_token() }}">
			   <div class="form-group">
			      <br>
			   </div>
			   	<div class="col-md-6">
			     <input type="file" id="inputgambar" name="gambar" class="validate"/>
			   <div class="form-group">
			   <div class="col-md-6 col-md-offset-4">
			   <button type="submit" class="btn btn-primary">Kirim</button>


	     @endsection