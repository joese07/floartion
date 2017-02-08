@extends('blog.master')
				
@section('content')			

	<!-- Body -->
		<div class="row">
			<div class="col-md-12">
			<form method="post" action="{{ url('contactus') }}">
			   <input type="hidden" name="_token" value="{{ csrf_token() }}">
			   <div class="form-group">
			      <br>
			      <label class="col-md-4 control-label">Nama Lengkap</label>
			      <div class="col-md-6">
			         <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"><br>
			      </div>
			   </div>
			   <div class="form-group">
			      <label class="col-md-4 control-label">E-Mail Address</label>
			      <div class="col-md-6">
			         <input type="email" class="form-control" name="email" value="{{ old('email') }}"><br>
			      </div>
			   </div>
			   <div class="form-group">
			      {!! Form::label('content', 'Pesan', array('class' => 'col-md-4 control-label')) !!} 
			      <div class="col-md-6">{!! Form::textarea('content',null, array('class' => 'form-control', 'name' => 'pesan')) !!}<br>	</div>
			   </div>
			   <div class="form-group">
			   <div class="col-md-6 col-md-offset-4">
			   <button type="submit" class="btn btn-primary">Kirim</button>
			   </div>
			   </div>
			   </form>
			   </div>
			   </div>



	<!-- Footer -->

@endsection
