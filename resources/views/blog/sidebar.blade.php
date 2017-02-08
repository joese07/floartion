
				<!-- Latest Posts -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Latest Posts</h4>
					</div>
					<ul class="list-group">
					    @foreach($recentPosts as $post)
   						 <li class="list-group-item">{!!link_to_route('post.show',$post->title,$post->id)!!}</li>
						@endforeach
					</ul>
				</div>

				<!-- Recent Comments -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Recent Comments</h4>
					</div>
					<ul class="list-group">
					    @foreach($recentComments as $comments)
   						<em> <li class="list-group-item">{!!link_to_route('post.show',$comments->comment,$comments->post_id)!!}</li> </em>
						@endforeach
					</ul>
				</div>

			</div>
