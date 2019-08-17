@extends('master')
@section('title' , 'comment')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route(isset($comment) ? 'comment.update' : 'comment.create')}}" method="post" class="">
	@csrf
	@if(isset($comment))
	<input type="hidden" name="id" value="{{$comment->id}}">
	@endif
	<div class="form-group">
		<label for="name"> Product_id</label>
		<input type="text" 
				class="form-control" 
				name="product_id"
				value="{{isset($comment) ? $comment->product_id : ''}}">
		

	</div>
	<div class="form-group">
		<label for="maxstudent"> user_id</label>
		<input type="number" name="user_id" id="maxstudent" class="form-control"
		value="{{isset($comment) ? $comment->user_id : ''}}"> 
	</div>
	<div class="form-group">
		<label for="name"> content</label>
		<!-- <input type="text" 
				class="form-control" 
				name="product_id"
				value="{{isset($comment) ? $comment->product_id : ''}}"> -->
		<textarea name="content" class="form-control">{{isset($comment) ? $comment->product_id : ''}}</textarea>

	</div>
	<div class="form-group">
		<button type="submit" class="btn btn submit"> create comment</button>
	</div>

</form>
@stop