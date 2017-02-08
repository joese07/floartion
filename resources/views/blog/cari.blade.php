				@extends('blog.master')
				
				@section('content')
				@foreach( $posts as $post )
				<article>
					<h2><a href="singlepost.html">{!!link_to_route('post.show',$post->title,$post->id)!!}</a></h2> 

			        <div class="row">
			          	<div class="col-sm-6 col-md-6">
			          	</div>
			          	<div class="col-sm-6 col-md-6">
			          		<span class="glyphicon glyphicon-pencil"></span> {{$post->comment_count}}  Comments			          		
			          		&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> {{ $post->created_at }} 			          		
			          	</div>
			          </div>

			          <hr>
					<img src="{{ asset($post->image) }}" class="img-responsive">
			          <br />

			          <p class="lead">{{$post->read_more.' ...'}}</</</p>
					  <p class="text-right">
					  {!!link_to_route('post.show','Read full article',$post->id)!!}
					  </p>

			          <hr>
				</article>
@endforeach								
				<ul class="pager">
					    {!! $posts->render() !!}
				</ul>

@endsection
