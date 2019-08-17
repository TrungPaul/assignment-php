@extends('master')
@section('title' , 'new User')
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
<form action="{{route(isset($user) ? 'user.update' : 'user.create')}}" method="post" class="">
	@csrf
	@if(isset($user))
	<input type="hidden" name="id" value="{{$user->id}}">
	@endif
	<div class="form-group">
		<label for="name">First Name</label>
		<input type="text" 
				class="form-control" 
				name="fistname"
				value="{{isset($user) ? $user->fistname : ''}}">
		

	</div>
	<div class="form-group">
		<label for="name">Last Name</label>
		<input type="text" 
				class="form-control" 
				name="lastname"
				value="{{isset($user) ? $user->lastname : ''}}">
		

	</div>
	<div class="form-group">
		<label for="email"> Email</label>
		<input type="text" 
				class="form-control" 
				name="email"
				value="{{isset($user) ? $user->email : ''}}">
		

	</div>
	<div class="form-group">
		<label for="password"> Password</label>
		<input type="password" 
				class="form-control" 
				name="password"
				value="{{isset($user) ? $user->password : ''}}">
		

	</div>
	<div class="form-group">
		<label for="address"> Address</label>
		<input type="text" 
				class="form-control" 
				name="address"
				value="{{isset($user) ? $user->address : ''}}">
		

	</div>
	<div class="form-group">
		<label for="birthday"> Birthday</label>
		<input type="date" 
				class="form-control" 
				name="birthday"
				value="{{isset($user) ? $user->birthday : ''}}">
		

	</div>
	<div class="form-group">
		<label for="birthday"> is active</label>
		<input type="number" 
				class="form-control" 
				name="is_active"
				value="{{isset($user) ? $user->is_active : ''}}">
		

	</div>
	<div class="form-group">
		<label for="birthday"> Role</label>
		<input type="number" 
				class="form-control" 
				name="roles"
				value="{{isset($user) ? $user->roles : ''}}">
		

	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn submit btn-success"> create class</button>
	</div>

</form>
@stop