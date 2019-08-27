
@extends('master')

@section('title' , 'Product page')

@section('content')
<div class="row">
		<center>
			@foreach($product as $key => $value)
				<p>Tên sản phẩm : {{$value['name']}}</p>
				<p>Gía : {{$value['price']}}</p>
				<p>Khuyến mãi : {{$value['sale_percent']}}</p>
				<p>Mô tả : {{$value['description']}}</p>
		</center>
		<center>	
				@foreach ($value['comments'] as $key => $comment)
      				<p>$comment['content']</p>	
				 @endforeach		
		</center>
		@endforeach
	</div>


@endsection
<script>
function myFunction() {
  confirm("Bạn có muốn xoá!");
}
</script>