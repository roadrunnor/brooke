@include('header')

	<div class="container-fluid">
		<div class="row">
	
			<div class="col-6">
				@csrf
				<div class="jumbotron">
					<img src="{{ asset('images/'.$response->product_image) }}" width="400px">
					<br><br>
					<p> Title : {{$response->product_name}}</p>
					<p> Description : {{$response->product_description}}</p>
					<p> Price : {{$response['product_price']}}</p>
					<a class="btn btn-success" href="{{route('cart.addProduct', ['product_id' => $response->product_id, 'user_id' => 5])}}">Add to cart</a>
				</div> 
			</div>
			<div>
				<img src="{{ asset('images/'.$response->product_image) }}" width="200px">
					<br><br>
					<p> Title : {{$response->product_name}}</p>
					<p> Description : {{$response->product_description}}</p>
					<p> Price : {{$response['product_price']}}</p>
					<a class="btn btn-success" href="{{route('cart.addProduct', ['product_id' => $response->product_id, 'user_id' => 5])}}">Add to cart</a>
			</div>
			<div>
				<img src="{{ asset('images/'.$response->product_image) }}" width="200px">
					<br><br>
					<p> Title : {{$response->product_name}}</p>
					<p> Description : {{$response->product_description}}</p>
					<p> Price : {{$response['product_price']}}</p>
					<a class="btn btn-success" href="{{route('cart.addProduct', ['product_id' => $response->product_id, 'user_id' => 5])}}">Add to cart</a>
			</div>
			
		</div>
	</div>
<hr>
<hr>

<div class="container-fluid">
	<div class="row">
		@foreach ($productsOfCat as $product)
		<div class="col-3">
			@csrf
			<div class="jumbotron">

				<img src="{{ asset('images/'.$product->product_image) }}" width="100px">			
				<p> Title : {{$product->product_name}}</p>
				<p> Description : {{$product->product_description}}</p>
				<p> Price : {{$product->product_price}}</p>

			</div> 
		 </div>
	@endforeach 
	</div>
</div>
	
</body>
