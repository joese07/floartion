@extends('app')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Reply Message</div>
				<div class="panel-body">
				<div class="row">
			<div class="col-md-12">
			<form method="post" action="{{ url('contact') }}">
			   <input type="hidden" name="_token" value="{{ csrf_token() }}" >
			   <input type="hidden" name="id" value="{{ $balas->id }}">
			   <div class="form-group">
			      <br>
			   </div>
			   <div class="form-group">
			      <label class="col-md-4 control-label">E-Mail Address</label>
			      <div class="col-md-6">
			         <input type="email" class="form-control" name="email" value="{{ $balas->email }}" readonly=""><br>
			      </div>
			       <div class="form-group">
			      {!! Form::label('content', 'Text', array('class' => 'col-md-4 control-label')) !!} 
			      <div class="col-md-6">{!! Form::textarea('content',null, array('class' => 'form-control', 'name' => 'pesan')) !!}<br>	</div>
			       </div>
			   <div class="form-group">
			   <div class="col-md-6 col-md-offset-4">
			   <button type="submit" class="btn btn-primary">Kirim</button>
			   </div>
			   </div>
			   </div>
			   </form>
			   </div>
			   </div>
			   </div>
			   </div>
			   </div>
			   </div>
			   </div>
	     @endsection