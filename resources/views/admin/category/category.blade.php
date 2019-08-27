@extends('master')

@section('title' , 'Category page')

@section('content')
		<table class="table">
  <thead>
    <tr>
      <th>id</th> 
    <th>name</th> 
    <th>parent_id</th>
    <th>parent name</th>
    
    <th><a href="{{route('category.add')}}" title=""><button type="button" class="btn btn-success ">Thêm</button></a></td></th>
        </tr>
  </thead>
 @foreach($category as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->parent_id}}</td>
        <td>{{$value->childs['name']}}</td>
      
        
        <td><a href="{{route('category.remove', $value->id)}}" title=""><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalScrollable"  onclick="myFunction()">Xoá</button></a>
            <a href="{{route('category.edit', $value->id)}}" title=""><button type="button" class="btn btn-primary ">Sửa</button></a></td>
      </tr>
    @endforeach
</table>

@endsection
<script>
function myFunction() {
  confirm("Bạn có muốn xoá!");
}
</script>