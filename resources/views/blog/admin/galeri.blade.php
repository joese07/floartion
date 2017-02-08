@extends('app')
 
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data Gallery</div>
					<div class="panel-body">
				 <p>
    		  <a href="{{ url('/dashboard/adgalleryb') }}">Tambah Galllery</a> 
  			  </p>
				<table class="table table-hover table-striped">
				<th>Id</th><th>foto</th><th>option</th>
				 @foreach( $gallery as $galeri )
				 <tr>
				 <td>{{ $galeri->id }}</td>
				 <td><a href="{{ url('image/'.$galeri->visual) }}" target=" ">{{ $galeri->visual}}</a></td>
				 <td><a href="{{ url('/deletee/'.$galeri->id) }}">Delete</a></td>
				 </tr>

                   {!! Form::close() !!}
				 </tr>
				 @endforeach
				 </table>
				  {!! $gallery->render() !!}
				 
				@endsection