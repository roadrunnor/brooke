
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
    <!-- <h1>C'est la page Cart</h1>


    <h1>Affiche tous les paniers</h1>  -->
    <?php

use App\Models\Product;

use function GuzzleHttp\Promise\all;

    // if($carts){
    //     foreach ($carts as $cart) {
    //         foreach( $cart->commandLines()->get() as  $commandLine){
    //            echo '<h2>' .  $commandLine. '</h2>';
    //         }
    //     }       
    // }

   
    

    ?>
    <div class="table-responsive">          
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <!-- <th>City</th>
                <th>Country</th> -->
            </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            @if($carts)            
            @foreach($carts[0]->commandLines()->get() as  $commandLine)
            <!-- $product = new Product(); -->
            <!-- $products = Product::where('product_id', $commandLine->product_id)->get();
            $product = $products[0] -->
                <tr>
                    <td> {{$i++}} </td>
                    <td>{{ $commandLine->product_id }}</td>
                    <td>{{ $commandLine->quantity }}</td>
                    <td>{{ $commandLine->price }}</td>
                    <!-- <td>New York</td>
                    <td>{{ $commandLine }}</td> -->
                    
                </tr>
            @endforeach               
            @endif
            

            
            </tbody>
        </table>
    </div>

    <!-- <h1>Affiche le panier en cours</h1>  -->
    <?php
    // if($carts){
    //     foreach( $carts[0]->commandLines()->get() as  $commandLine){
    //        echo '<h2>' .  $commandLine. '</h2>';
    //     }
    // }
    ?>

    <!-- @if($carts)
        @foreach($carts[0]->commandLines()->get() as  $commandLine)
            {{ $commandLine }}
        @endforeach
    @endif -->

    
    
</body>
</html>