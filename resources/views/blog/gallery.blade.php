@extends('blog.master')
		
				@section('content')

				
@foreach($Gallery as $galeri)

				<img height="208" width="300" src="{{ asset('image/'.$galeri->visual) }}" />

@endforeach

<center>{!! $Gallery->render() !!}
				@endsection
