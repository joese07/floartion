	<!-- Comment form -->
					<div class="well">
						<h4>Leave a comment</h4>
						{!! Form::open(['route'=>['post.newcom',$post->id],'role'=> 'form', 'class' => 'clearfix']) !!}
						
						  <div class="col-md-6 form-group">
						{!! Form::label('name', 'Name', array('class' => 'sr-only', 'for' => 'name'))  !!}
					 	{!! Form::text('commenter', null,array('class' => 'form-control', 'placeholder'=>'Name'),'') !!}
						  </div>
						  <div class="col-md-6 form-group">
						{!! Form::label('email', 'Email', array('class' => 'sr-only', 'for' => 'name'))  !!}
					 	{!! Form::text('email', null,array('class' => 'form-control','placeholder'=>'Email'),'') !!}
						  </div>
						  <div class="col-md-12 form-group">
						{!! Form::label('comment', 'comment', array('class' => 'sr-only', 'for' => 'name'))  !!}
						{!! Form::textarea('comment',null, array('class' => 'form-control','placeholder'=>'Comment')) !!}

						  </div>
						  <div class="col-md-12 form-group text-right">
							{!! Form::submit('Submit', ['class'=>'btn primary']) !!}
						  </div>
						{!! Form::close() !!}				
					</div>
					
					
					<hr />

					<ul id="comments" class="comments">
					@foreach($comments as $comment)
						<li class="comment">
							<div class="clearfix">
								<h4 class="pull-left">{{ $comment->commenter}}</h4>
								<p class="pull-right">{{ $comment->created_at}}</p>
							</div>
							<p>
								<em>{{ $comment->comment}}</em>
							</p>
						</li>
					@endforeach
					</ul>