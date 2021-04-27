        @include('header') 
        <div class="container-fluid">
            <div class="row">
                @foreach ($response as $product)
                    <div class="col-3">
                        @csrf
                        <div class="jumbotron">
                            <a class="navbar-brand" href="{{ url('/details')}}">
                                <img src="{{ asset('images/'.$product->product_image) }}" width="200px">
                            </a>
                            <p> Title : {{$product->product_name}}</p>
                            <p> Description : {{$product->product_description}}</p>
                            <p> Price : {{$product->product_price}}</p>
                            <p> {{$product->ISBN}}</p>
                            <p> Athor : {{$product->Author}}</p>
                            <!-- <input type="button" value="Add to cart"> -->
                            <a class="btn btn-success" href="{{route('cart.addProduct', ['product' => $product->product_id])}}">Add to cart</a>
                        </div> 
                     </div>
                @endforeach 
            </div>
        </div>
</body>
</html>