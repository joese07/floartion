@extends('app')
 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Artikel </div>
				<div class="panel-body">
				@if ($errors->any())
					<div class='flash alert-danger'>
					@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
					@endforeach
					</div>
				@endif
 
    			{!! Form::model(new App\Post, ['class' => 'form-horizontal','files'=>true, 'route' => ['dashboard.post.store']]) !!}
				<div class="form-group">
 				{!! Form::label('title', 'Judul Artikel', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('title', null,array('class' => 'form-control'),'') !!}</div>
				</div>
				<div class="form-group">
				{!! Form::label('content', 'Isi Artikel', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::textarea('content',null, array('class' => 'form-control')) !!}	</div>
				</div>
				<div class="form-group">
 				{!! Form::label('image', 'Gambar Artikel', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
         		 {!! Form::file('image',['class' => 'btn']) !!}
	  			<p class="errors">{!!$errors->first('image')!!}</p>
				@if(Session::has('error'))
				<p class="errors">{!! Session::get('error') !!}</p>
				@endif
				</div>
     		   </div>
				<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
    			{!! Form::submit('Tambah Artikel', ['class'=>'btn primary']) !!}
				</div>
    			{!! Form::close() !!}
	
					</div>
			</div>
		</div>
	</div>
</div>	
@endsection