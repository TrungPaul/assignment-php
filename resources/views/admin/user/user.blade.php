@extends('master')

@section('title' , 'User page')

@section('content')
		<table class="table">
  <thead>
    <tr>
      <th>id</th> 
    <th>Firtname</th> 
    <th>Lastname</th>
    <th>Email</th>
    <th>Address</th>
    <th>Birthday</th>
    <th>Is active</th>
    <th>Roles</th>
    <th></th>
    
    <th><a href="{{route('user.add')}}" title=""><button type="button" class="btn btn-success ">Thêm</button></a></td></th>
        </tr>
  </thead>
 @foreach($user as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->fistname}}</td>
        <td>{{$value->lastname}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->address}}</td>
        <td>{{$value->birthday}}</td>
        @if($value->is_active==1)
       <td>On</td>
       @else 
       <td>Off</td>
       @endif
      @if($value->roles==1)
       <td>Admin</td>
       @else 
       <td>User</td>
       @endif
        <td></td>
        <td><a href="{{route('user.remove', $value->id)}}" title=""><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalScrollable" onclick="myFunction()">Xoá</button></a>
            <a href="{{route('user.edit', $value->id)}}" title=""><button type="button" class="btn btn-primary ">Sửa</button></a></td>

      </tr>
    @endforeach
</table>

@endsection
<script>
function myFunction() {
  confirm("Bạn có muốn xoá!");
}
</script>