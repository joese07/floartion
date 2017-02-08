				@extends('blog.master')
				
				@section('content')
				<article>
					<h2><a href="singlepost.html">{{$post->title}}</a></h2>

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

			          <p>{{$post->content}}</p>
					  <p class="text-right">
					  </p>

			          <hr>
				</article>
				

					<ul class="pager">
						<li class="previous"><a href="{{ url('/') }}">&larr; Back to posts</a></li>
					</ul>	
				
				@include('blog.comment')
@endsection
