@extends('master')

@section('title' , 'Comment page')

@section('content')
		<table class="table">
  <thead>
    <tr>
      <th>id</th> 
    <th>product_id</th> 
    <th>user_id</th> 
    <th>parent_id</th>
    
    <th><a href="{{route('comment.add')}}" title=""><button type="button" class="btn btn-success ">Thêm</button></a></td></th>
        </tr>
  </thead>
 @foreach($comment as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->product_id}}</td>
        <td>{{$value->user_id}}</td>
        <td>{{$value->content}}</td>
        
        
      </td>
        <td></td>
        <td><a href="{{route('comment.remove', $value->id)}}" title=""><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalScrollable"  onclick="myFunction()">Xoá</button></a>
            <a href="{{route('comment.edit', $value->id)}}" title=""><button type="button" class="btn btn-primary ">Sửa</button></a></td>
      </tr>
    @endforeach
</table>

@endsection
<script>
function myFunction() {
  confirm("Bạn có muốn xoá!");
}
</script>