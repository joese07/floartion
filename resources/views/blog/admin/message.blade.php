@extends('app')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data Message</div>
				<div class="panel-body">
				<table class="table table-hover table-striped">
				<th>Name</th><th>Email</th><th>Message</th><th><th>option</th>
				 @foreach( $contact as $kontak )
				 <tr>
				 <td>{{ $kontak->nama }}</td>
				 <td>{{ $kontak->email }}</td>
				 <td>{{ $kontak->pesan }}</td>
				 <td><a href="{{ url('/balas/'.$kontak->id) }}" class="btn btn-info">Balas</a></td>
				<td> <a href="{{ url('/delete/'.$kontak->id) }}">Delete</a></td>
                   {!! Form::close() !!}
				 </tr>
				 @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
				