@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Table	
				</div>
				<div class="panel-body">
					<h4>Blog Post</h4>
					@if(count($posts)>0)
					<table class="table table-stripe">
						<tr>
							<th>title</th>
							<th>
						</tr>
						@foreach($posts as $post)
							<tr>
							<th>{{$post->title}}</th>
							<th><a href="/posts/{{$post->id}} class="btn btn-default"</th>
							<th></th>
						</tr>
						@endforeach
					</table>
					@endif
				</div>
				
			</div>
		</div>
	</div>
</div>