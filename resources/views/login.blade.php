<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Loging
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('login.submit')}}">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" name="email">
                             {{-- @error('email')
                             <span class="text-danger">{{$message}}</span>
                                 
                             @enderror --}}
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="idPassword" name="password">
                              {{-- @error()
                              <span class="text-dnager">{{$messaage}}</span> 
                              @enderror   --}}
                              
                            </div>
                            <div class="mb-3 form-check">
                            
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>