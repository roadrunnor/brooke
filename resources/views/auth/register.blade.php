@extends('layouts.formRegister')

@section('content')


<div class="container-fluid ">
        <div class="row align-items-md-stretch">

           

            <!-- Section gauche - mubi-logo -->
                <div class="col mubi-logo d-xm-none d-sm-none d-md-block d-lg-block mr-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-45 -05 365 260" style="fill:#000">
                        <path d="M119,67.11A33.15,33.15,0,1,1,152.14,34,33.14,33.14,0,0,1,119,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="100ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>
                        <path d="M119,152.14A33.14,33.14,0,1,1,152.14,119,33.13,33.13,0,0,1,119,152.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="300ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>	
                        <path d="M204.36,152.14A33.14,33.14,0,1,1,237.5,119a33.14,33.14,0,0,1-33.14,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="600ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>	
                        <path d="M119,237.18A33.15,33.15,0,1,1,152.14,204,33.14,33.14,0,0,1,119,237.18" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="800ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>
                        <path d="M33.64,237.18A33.15,33.15,0,1,1,66.79,204a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="400ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>
                        <path d="M33.64,67.11A33.15,33.15,0,1,1,66.79,34,33.15,33.15,0,0,1,33.64,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="500ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>
                        <path d="M33.64,152.14A33.14,33.14,0,1,1,66.79,119a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                            <animate attributeName="fill-opacity"
                                begin="200ms" dur="1s"
                                values="1;.2;1" calcMode="linear"
                                repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>

            <!-- Form Section -->
                <div class="col p-5 col-xl-4">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- moubi -->
                                <div class="text-center py-1">
                                    <h1>BROOKE & CO.</h1>                    
                                </div>                                    
                                    <div class="col d-lg-none text-start p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox=" -4600 -20 7000 265 " style="fill:#000">
                                        <path d="M119,67.11A33.15,33.15,0,1,1,152.14,34,33.14,33.14,0,0,1,119,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="100ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>
                                        <path d="M119,152.14A33.14,33.14,0,1,1,152.14,119,33.13,33.13,0,0,1,119,152.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="300ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>	
                                        <path d="M204.36,152.14A33.14,33.14,0,1,1,237.5,119a33.14,33.14,0,0,1-33.14,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="600ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>	
                                        <path d="M119,237.18A33.15,33.15,0,1,1,152.14,204,33.14,33.14,0,0,1,119,237.18" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="800ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>
                                        <path d="M33.64,237.18A33.15,33.15,0,1,1,66.79,204a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="400ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>
                                        <path d="M33.64,67.11A33.15,33.15,0,1,1,66.79,34,33.15,33.15,0,0,1,33.64,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="500ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>
                                        <path d="M33.64,152.14A33.14,33.14,0,1,1,66.79,119a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                            <animate attributeName="fill-opacity"
                                                begin="200ms" dur="1s"
                                                values="1;.2;1" calcMode="linear"
                                                repeatCount="indefinite" />
                                        </path>
                                        </svg>
                                    </div> 

                                        <h2 class="fw-bold text-center  p-5">WELCOME</h2>
                                            <p class="fw-m text-center py-1">Movies, video games and books store <br/>
                                                from classic to contemporary</p>
                                                <!-- name -->
                                                <div class="form-group row p-2">                            

                                                            <div class="col-md-6">
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                </div>
                                                <!-- Email -->
                                                <div class="form-group row p-2">                    

                                                    <div class="col-md-8 mb-2 w-100">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus >

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- password -->
                                                <div class="form-group row p-2">                    

                                                    <div class="col-md-8 mb-2 w-100">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- password-confirm -->
                                                <div class="form-group row p-2">                    

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>                                
                                                <!-- button Register -->
                                            <div class="form-group row mb-0 text-end">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn " style="border: none;">
                                                        <div class="text-end py-1">  
                                                            <a href="#">
                                                                <svg id="Groupe_346" data-name="Groupe 346" xmlns="http://www.w3.org/2000/svg" width="154.485" height="30.116" viewBox="0 0 154.385 30.016">
                                                                            <text id="REGISTER" transform="translate(0 22)" fill="#707070" font-size="20" font-family="SegoeUIBlack, Segoe UI" letter-spacing="0.05em"><tspan x="0" y="0">REGISTER</tspan></text>
                                                                            <g id="login" transform="translate(125.369 1)">
                                                                            <g id="Groupe_5" data-name="Groupe 5">
                                                                                <g id="Groupe_4" data-name="Groupe 4">
                                                                                <path id="Tracé_10" data-name="Tracé 10" d="M187.592,0H173.084a2.42,2.42,0,0,0-2.418,2.418V6.649a.6.6,0,1,0,1.209,0V2.418a1.211,1.211,0,0,1,1.209-1.209h14.508A1.211,1.211,0,0,1,188.8,2.418V26.6a1.211,1.211,0,0,1-1.209,1.209H173.084a1.211,1.211,0,0,1-1.209-1.209V22.366a.6.6,0,1,0-1.209,0V26.6a2.42,2.42,0,0,0,2.418,2.418h14.508A2.42,2.42,0,0,0,190.01,26.6V2.418A2.42,2.42,0,0,0,187.592,0Z" transform="translate(-160.994)" fill="#ff5a87"/>
                                                                                <path id="Tracé_11" data-name="Tracé 11" d="M13.495,141.46a.6.6,0,0,0,.817.891l7.254-6.649a.6.6,0,0,0,0-.891l-7.254-6.649a.6.6,0,1,0-.817.891l6.109,5.6H.6a.6.6,0,1,0,0,1.209h19Z" transform="translate(0 -120.749)" fill="#ff5a87"/>
                                                                                </g>
                                                                            </g>
                                                                            </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        
                                                        </button>
                                                    

                                                
                                                </div>
                                            </div>
                                                <!-- Sign In -->
                                                <div class="mt-3 ">
                                                    <span>Already have an account?<a class="fw-bold" href="#" style="text-decoration: none;"> Sign In </a></span>
                                                </div>
                            </form>
                    </div> 
                </div>
</div>
@endsection









{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
