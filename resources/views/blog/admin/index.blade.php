@extends('app')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data Artikel</div>
				<div class="panel-body">

		 		<table class="table table-hover table-striped">
				<tr><th>Judul Artikel</th><th>Content</th><th>Edit</th><th>Delete</th></tr>
         	   @foreach( $post as $posts )
                    <tr>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('dashboard.post.destroy', $posts->id))) !!}
                      <td>{{ $posts->title }}</td>
						<td>{{ $posts->read_more }}</td>
                         <td>{!! link_to_route('dashboard.post.edit', 'Edit', array($posts->id), array('class' => 'btn btn-info')) !!}</td>
                         <td> {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                    {!! Form::close() !!}
						</tr>
            @endforeach
			</table>
			 <p>{!!$post->render()!!} </p>
 			  <p>
    		  {!! link_to_route('dashboard.post.create', 'Tambah Artikel') !!}
  			  </p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


