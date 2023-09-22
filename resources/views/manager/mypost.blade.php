
@extends('layouts.layoutUser')
@section('content')

<section>
	<div class="container">
	  <div class="row">
	        <div class="col-lg-12 ">
	        	 <br />
	            <div class="pull-left">
	                <h2>Add Your Title With Description</h2>
	            </div>
	            <div class="pull-left">
	                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Blog</a>
	            </div>
	        </div>
	    </div>
	  </div>
</section>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">

			    @if ($message = Session::get('success'))
			        <div class="alert alert-success">
			            <p>{{ $message }}</p>
			        </div>
    			@endif
			<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>Body</th>
				<th>Action</th>
			</thead>
				<tbody>


	

				@foreach($posts as $post)

				
			<!--
				if(Auth::user()->id == $post->user_id)
				if($post->user_id==Auth::user()->id)
			-->
				<tr>
					<td>{{ $post->id }}</td>
					<td>{{ $post->title }}</td>
					<td>{{$post->body}}</td>

						
				<td>
				 <form action="{{ route('post.destroy',$post->id) }}" method="POST">
     
                   <!--
                   <a class="btn btn-info" href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show Post</a>
               -->
				 <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
				</td>	
				</tr>

				@endforeach



				</tbody>
			</table>
		</div>
	</div>

	<ul class="pagination">
	


	</ul>

</div>
@endsection