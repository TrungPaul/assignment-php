@extends('master')
@section('title' , 'new Product')
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
<form action="{{route(isset($product) ? 'product.update' : 'product.create')}}" method="post" class="">
	@csrf
	@if(isset($product))
	<input type="hidden" name="id" value="{{$product->id}}">
	@endif
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" 
				class="form-control" 
				name="name"
				value="{{$product->name}}">
		

	</div>
	<div class="form-group">
		<label for="name">Description</label>
		<!-- <input type="text" 
				class="form-control" 
				name="lastname"
				value="{{isset($product) ? $product->lastname : ''}}"> -->
		<textarea class="form-control" name="description" >{{isset($product) ? $product->description : ''}}</textarea>

	</div>
	<div class="form-group">
		<label for="email"> price</label>
		<input type="text" 
				class="form-control" 
				name="price"
				value="{{$product->price}}">
		

	</div>
	<div class="form-group">
		<label for="address">Sale Percent</label>
		<input type="number" 
				class="form-control" 
				name="sale_percent"
				value="{{$product->sale_percent}}">
		

	</div>
	<div class="form-group">
		<label for="address"> Stock</label>
		<input type="text" 
				class="form-control" 
				name="stocks"
				value="{{$product->stocks}}">
		

	</div>
	<div class="form-group">
		<label for="address">Is Active</label>
		<input type="text" 
				class="form-control" 
				name="is_active"
				value="{{$product->is_active}}">
	

	</div>
	<div class="form-group">
		<label for="birthday"> cate_id</label>
		<!-- <input type="number" 
				class="form-control" 
				name="cate_id"
				value="{{isset($product) ? $product->cate_id : ''}}"> -->
		<select name="cate_id" id="" class="form-control" >
			@foreach($category as $cate)
			<option 
			@if($product->cate_id == $cate->id)
			selected
			@endif
			value="{{$product->id}}">{{$cate->name}}</option>	
			@endforeach
		</select>

	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn submit btn-success"> create class</button>
	</div>

</form>
@stop