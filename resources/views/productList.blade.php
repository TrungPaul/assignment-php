<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">

	<!-- <div class="row">
		@foreach($product as $key => $value)
		<div class="col-3">
			<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$value->name}}</h5>
    <p class="card-text">{{$value->description}}</p>
    <a href="#" class="btn btn-primary">Chi tiết</a>
  </div>
</div>
		</div>
		@endforeach

	</div> -->

	<div class="container">
		<div class="row">
			@foreach($product as $key => $value)
		
			<div class="col-sm-3 bh">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="https://znews-photo.zadn.vn/w1024/Uploaded/mdf_qsklky/2017_11_21/samsunggalaxynote85.jpg" alt="Card image cap" width="120">
					<div class="card-body">
						<h5 class="card-title"> {{$value->name}} </h5>
						<h5 class="card-title"> GIÁ :{{$value->price}} </h5>
						
						<a href="{{route('productDetail', $value->id)}}" class="btn btn-primary">Chi tiết</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

