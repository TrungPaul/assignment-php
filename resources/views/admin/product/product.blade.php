@extends('master')

@section('title' , 'Product page')

@section('content')
		<table class="table">
  <thead>
    <tr>
      <th>id</th> 
    <th>name</th> 
    <th>discription</th>
    <th>price</th>
    <th>Sale Prersent</th>
    <th>Stock</th>
    <th>is_active</th>
    <th>cate_id</th>
    
    
    <th><a href="{{route('product.add')}}" title=""><button type="button" class="btn btn-success ">Thêm</button></a></td></th>
        </tr>
  </thead>
 @foreach($product as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->discription}}</td>
        <td>{{$value->price}}</td>
        <td>{{$value->sale_percent}}</td>
        <td>{{$value->stocks}}</td>
        @if ($value->is_active==1)
         <td>có</td>
         @else
         <td>hết</td>
         @endif
         <td>{{$value->cate_id}}</td>
       
      </td>
        <td></td>
        <td><a href="{{route('product.remove', $value->id)}}" title=""><button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalScrollable" onclick="myFunction()">Xoá</button></a>
            <a href="{{route('product.edit', $value->id)}}" title=""><button type="button" class="btn btn-primary ">Sửa</button></a></td>
      </tr>
    @endforeach
</table>

@endsection
<script>
function myFunction() {
  confirm("Bạn có muốn xoá!");
}
</script>