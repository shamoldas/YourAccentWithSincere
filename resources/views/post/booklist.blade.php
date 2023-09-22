@extends('layouts.layoutUser')
@section('content')



  @foreach ($comments as $comments)
 					<strong>{{ $comments->user->name }}</strong>
                    <p style="text-align: justify;"><strong>Description:</strong>{{ $comments->body }}</p>
                    <div class="pull-right">
                        <a class="btn btn-info" href="" class="btn btn-primary">Comment</a>
                    </div>
                    <hr>  
            <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" required />

                <select name="stance">
                
                  <option  value="defence">Defence</option>
                  <option  value="against">Against</option>
            
                </select>

                
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            
            </div>
            <div class="form-group">
                <select name="categories_id">
            
                  <option name="categories_id" value="defence">Defence</option>
                  <option name="categories_id" value="against">Against</option>
            
                </select>



            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>      

                @endforeach
<!--
@endsection