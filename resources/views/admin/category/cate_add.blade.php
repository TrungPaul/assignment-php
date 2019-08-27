@extends('master')
@section('title' , 'Category')
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
<form action="{{route(isset($cate) ? 'category.update' : 'category.create')}}" method="post" class="">
	@csrf
	@if(isset($cate))
	<input type="hidden" name="id" value="{{$cate->id}}">
	@endif
	<div class="form-group">
		<label for="name"> Name</label>
		<input type="text" 
				class="form-control" 
				name="name"
				value="{{isset($cate) ? $cate->name : ''}}">
		

	</div>
	<div class="form-group">
		<label for="maxstudent"> Parent_id</label>
		<!-- <input type="number" name="parent_id" class="form-control"
		value="{{isset($cate) ? $cate->parent_id : ''}}">  -->
		<select name="parent_id" id="" class="form-control">
			@foreach($category as $cat)
			<option value="{{isset($product) ? $cate->cate_id : $cat->cate_id}}">{{isset($cate) ? $cate->name : $cat->name}}</option>
			@endforeach

		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn submit"> Save</button>
	</div>

</form>
@stop