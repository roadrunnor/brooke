{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <title>Register</title>
   
</head>
<body>
    <!--|----------------------------------------|-->
    <!--|-----------------Picture----------------|-->
    <!--|----------------------------------------|-->

    <!--|----------------------------------------|-->
    <!--|-----------------Form----------------|-->
    <!--|----------------------------------------|-->

    <!--|----------------------------------------|-->
    <!--|-----------------Login------------------|-->
    <!--|----------------------------------------|-->

    <!--|----------------------------------------|-->
    <!--|-----------------Register---------------|-->
    <!--|----------------------------------------|-->

    <!--|----------------------------------------|-->
    <!--|--------Login with Social Media---------|-->
    <!--|----------------------------------------|-->

    <div class="container-fluid ">
    <div class="row align-items-md-stretch"> <!--align-items-md-stretch-->
    
    <!--imaLog d-none d-lg-block col-md-5 col-lg-5 col-xl-8-->

            <!-- Section gauche - mubi-logo -->
            <div class="col mubi-logo d-xm-none d-sm-none d-md-block d-lg-block mr-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-15 -15 290 255" style="fill:#000">
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
   
    <!--|-----------------Form-------------------|-->
   
            <div class="col p-5 col-xl-4">
                <div class="text-center py-1">                    
                    <h2><img src="logo_film.svg" width="48" alt="">BROOKE & CO.</h2>                    
                </div>
                    <h2 class="fw-bold text-center py-2">WELCOME</h2>
                        <p class="fw-m text-center py-1">Movies, video games and books store <br/>
                            from classic to contemporary</p>

                    <!--|-----------------Login------------------|-->
                    

                <form action="" class="col-12" >
                
                    <div class="mb-4 shadow ">           
                        <input type="email" class="form-control" name="email" placeholder="Email" style="height:60px; border-left-color: #FF1744; border: 10 0 0 0;">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" name="password" placeholder="Password" style="height:60px;">
                    </div>
                   
                    
                    <!--|-----------------lOGIN---------------|-->
                    
                    <button type="submit" style="border: none;">
                    <div class="text-end py-1">  
                        <a href="">
                            <svg id="Groupe_346" data-name="Groupe 346" xmlns="http://www.w3.org/2000/svg" width="113.385" height="30.016" viewBox="0 0 113.385 30.016">
                                <text id="LOGIN" transform="translate(0 22)" fill="#707070" font-size="20" font-family="SegoeUIBlack, Segoe UI" letter-spacing="0.05em"><tspan x="0" y="0">LOGIN</tspan></text>
                                <g id="login-2" data-name="login" transform="translate(84.369 1)">
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
                    <div class="my-3 ">
                        <span>Don't have account?<a class="fw-bold" href="#" style="text-decoration: none;"> Sign UP</a></span>
                    </div>
                </form>               

            </div>
        </div>
    </div>
    
</body>
</html> --}}