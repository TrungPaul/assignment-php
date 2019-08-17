<div class="container">
	<div class="row">
		<center>
			@foreach($product as $key => $value)
				<p>Tên sản phẩm : {{$value->name}}</p>
				<p>Gía : {{$value->price}}</p>
				<p>Khuyến mãi : {{$value->sale_percent}}</p>
				<p>Mô tả : {{$value->description}}</p>
			
		</center>
		<center>
			<div>
				@if (count($value->comments))
        @foreach ($value->comments as $comment)
         <textarea name="">{{$comment->content}}</textarea>   
        @endforeach
				 @endif
			</div>
		</center>
		@endforeach
	</div>

</div>
<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">