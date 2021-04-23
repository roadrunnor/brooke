<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>User</title>
</head>
<style>
     .image{width: 102%; margin-top: 2em;}     
    </style>
<body>
<div class="container-fluid">
        <!-- Picture-->
        <!----------------------------------------------------->
        <!----------------------------------------------------->
        <div class="row">
            <div class="col-md-8">
                <img src="moviee.jpg" class="image" alt="" >                                
            </div>

            <!-- Tittle-->
            <!----------------------------------------------------->
            <!----------------------------------------------------->

            <div class="col-md-4" style=" position: absolute; margin-top: 300px; left: 40px; color: white;">
                <h2>
                    WELCOME TO BROOKE & CO.                    
                </h2>
                <p style="font-size: 20px;">Movies, video games and books store
                    from classic to contemporary</p>
            </div>

            <!-- Form-->
            <!----------------------------------------------------->
            <!----------------------------------------------------->


            <div class="col-md-4" style="margin-top: 30px;">

                
                <div class="card bg-light mb-4" style="max-width: 50rem;">                  
                    <div class="card-body">
                        
                        <img src="logo2.png" class="rounded float-right" alt="..." style="width: 50%; margin-top: 20px;">
                        <form class="form-horizontal">

                            <div class="form-group">                      
        
                              <div class="col align-self-center" style="margin-top: 140px;" >
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              
                              <div class="col align-self-center" style="margin-top: 15px;" >
                                <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>
                            </div>

                            <div class="form-group">
                              
                                <div class="col align-self-center" style="margin-top: 15px;" >
                                  <input type="password" class="form-control" id="password" placeholder="Verify Password">
                                </div>
                              </div>

                            <div class="form-group">
                              <div class="col align-self-center" style="margin-top: 5px; ">
                                <button type="submit" class="btn btn" style="width: 410px;">Login</button>                                
                            </div>
                            </div>

                            <h5 style="text-align:center">Login with Social Media</h5>

                            <div class="form-group">
                                
                                <div class="col align-self-center " style="margin-top: 5px;">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Login with Facebook</button>                                                          
                              </div>
                            </div>

                            <div class="form-group">
                                
                                <div class="col align-self-center " style="margin-top: 10px;">
                                    <button type="button" class="btn btn-danger btn-lg btn-block">Login with Google</button>                                                          
                              </div>
                            </div>

                            
                           
                                  <small id="emailHelp" class="form-text text-muted" style="margin-top: 10px;">Don't have account?<a href="Regiter.html" class="">Sign UP</a></small>
                                
                              </div>

                            
                        </form>
                    </div>
                </div>              
                </div>
            </div>
        </div>
    </div>    
</body>
</html>