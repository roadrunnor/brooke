
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <?php
// {{ $commandLine->product->product_image }}
        use App\Models\Product;
use Symfony\Component\Console\Input\Input;

use function GuzzleHttp\Promise\all;
use App\Http\Controllers\CartController;

    ?>
    <div class="table-responsive">          
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Brooke et Co Price</th>
                <th>Quantity</th>
                <th>Price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $totalQuantity = 0; $i = 1; $saved = 0; $totalPrix = 0;?>
            @if($carts != null)            
            @foreach($carts[0]->commandLines()->get() as  $commandLine)
                <tr>
                    <td> {{$i++}} </td>
                    <td> <img class="rounded" width="75" height="auto" src="images/{{ $commandLine->product->product_image }}" alt="{{ $commandLine->product->product_name }}"></td>
                    <td>{{ $commandLine->product->product_name }}</td>  
                    <td>{{ $commandLine->product->product_price }}</td> 
                    <td>{{ $commandLine->product->product_promotion_price }}</td> 
                    <td>
                   
                    <form role="form" action="{{ route('updateCommandLine.cart') }}" method="POST" name="frmQuat">
                    {{csrf_field()}}
                   
                    <input type="number" name="qtn" value="{{ $commandLine->quantity }}" onchange="this.form.submit()"/>
                    <input type="hidden" name="id" value=" {{ $commandLine->id }}" />

                    </form>
                    <!-- <?php 
                            // echo $_GET['frmQuat'];
                            // $totalQuantity += $commandLine->quantity ; 
                    ?> -->
                    </td>
                    <td>{{ $commandLine->product->product_promotion_price *  $commandLine->quantity }}</td> 
                    <td>
                        <div>
                            <a class="btn btn-danger" href="destroyCommandLine/{{ $commandLine->id }}">Supprimer</a>
                        </div>
                    </td> 
                    <?php $saved += ( $commandLine->product->product_price - $commandLine->product->product_promotion_price) ; ?>  
                    <?php $totalPrix +=  ($commandLine->product->product_promotion_price *  $commandLine->quantity); ?>              
                </tr>

            @endforeach               
          
            

                <tr>
                    <th></th>
                    <th><a href="{{  url()->previous() }}">Go back</a></th>
                    <th></th>                  
                    <th>you have saved : {{$saved}}</th>
                    <th>{{ $totalQuantity }}</th>
                    <th>Total: {{$totalPrix}}</th>
                    <th><a href="destroyCart/{{ $carts[0]->id }}">Vider Panier</a></th>
                    <th> <a href="">PayPal</a> </th>
                </tr>
            </tbody>
            @endif
        </table>
    </div>
  
</body>
</html>