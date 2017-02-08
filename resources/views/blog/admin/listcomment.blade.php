@extends('app')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data Komentar</div>
				<div class="panel-body">

		 		<table class="table table-hover table-striped">
				<tr><th>Pengirim Komentar</th><th>Komentar</th><th>Delete</th></tr>
         	   @foreach( $comment as $comments )
                    <tr>
			{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('dashboard.comment.destroy', $comments->id))) !!}
                      <td>{{ $comments->commenter }}</td>
						<td>{{ $comments->comment }}</td>
                         <td> {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                    {!! Form::close() !!}
						</tr>
            @endforeach
			</table>
			 <p>{!! $comment->render() !!} </p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


