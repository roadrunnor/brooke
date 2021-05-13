<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Brooke & Co. - Laravel Version</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <link rel="stylesheet" href="/main.css" />
</head>
<!-- Onload fonctions showCarousel(); chargerZoneItem(); -->

<body onload="javascript:showCarousel();">
    <!-- Header -->
    <div class=" header">
        <div class="top-bar theme-bg-primary-darken">
            <div class="container-fluid">
                <!-- navbar red -->
                <nav class="navbar navbar-expand-lg navbar-primary position-relative">
                    <div class="wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237 236.36" style="fill:#000" width="100" height="100">
                            <path d="M119,67.11A33.15,33.15,0,1,1,152.14,34,33.14,33.14,0,0,1,119,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                            <path d="M119,152.14A33.14,33.14,0,1,1,152.14,119,33.13,33.13,0,0,1,119,152.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                            <path d="M204.36,152.14A33.14,33.14,0,1,1,237.5,119a33.14,33.14,0,0,1-33.14,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                            <path d="M119,237.18A33.15,33.15,0,1,1,152.14,204,33.14,33.14,0,0,1,119,237.18" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                            <path d="M33.64,237.18A33.15,33.15,0,1,1,66.79,204a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                            <path d="M33.64,67.11A33.15,33.15,0,1,1,66.79,34,33.15,33.15,0,0,1,33.64,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                            <path d="M33.64,152.14A33.14,33.14,0,1,1,66.79,119a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                <animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
                </nav>
                <!-- navbar sticky (navbar black & navbar Brooke & Co.) -->
                <div id="navbar">
                    <!-- navbar black -->
                    <nav class="navbar navbar-expand-lg bg-dark">
                        <div class="wrapper">
                            <!-- navbar black left 2 items -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 14 14">
                                                <g id="phone-call" clip-path="url(#clip-path)">
                                                    <g id="phone-call-2" data-name="phone-call" opacity="0.8">
                                                        <path id="Tracé_1" data-name="Tracé 1" d="M14,11.282a2.071,2.071,0,0,0-.635-1.423A5.086,5.086,0,0,0,11.35,8.521a2.254,2.254,0,0,0-2.314.657l0,0-.739.734a11.08,11.08,0,0,1-2.331-1.8L5.89,8.04a11.081,11.081,0,0,1-1.8-2.331l.734-.739,0,0A2.254,2.254,0,0,0,5.48,2.652,5.087,5.087,0,0,0,4.142.638a2.081,2.081,0,0,0-2.888-.1L1.239.548l-.021.02A4.437,4.437,0,0,0,0,3.818,10.385,10.385,0,0,0,3.306,10.7a13.329,13.329,0,0,0,1.311,1.142.547.547,0,0,0,.665-.868,12.246,12.246,0,0,1-1.2-1.047,9.288,9.288,0,0,1-2.985-6.11,3.379,3.379,0,0,1,.887-2.461l0,0a.984.984,0,0,1,1.37.049c1.416,1.468,1.313,2.162.688,2.8L3.029,5.222a.547.547,0,0,0-.111.608,11.051,11.051,0,0,0,2.2,2.984l.072.072a11.049,11.049,0,0,0,2.984,2.2.547.547,0,0,0,.608-.111L9.8,9.959c.642-.626,1.335-.728,2.8.688a.984.984,0,0,1,.05,1.37l0,0a3.368,3.368,0,0,1-2.436.887h-.025a7.091,7.091,0,0,1-2.7-.639.547.547,0,0,0-.433,1A8.068,8.068,0,0,0,10.183,14h.031a4.427,4.427,0,0,0,3.219-1.217l.02-.021.014-.016A2.071,2.071,0,0,0,14,11.282Z" transform="translate(0 -0.002)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        (+800) 123 456 7890
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="10.691" viewBox="0 0 14 10.691">
                                                <g id="email" clip-path="url(#clip-path)">
                                                    <g id="email-2" data-name="email" transform="translate(0 -60.5)" opacity="0.8">
                                                        <g id="Groupe_2" data-name="Groupe 2" transform="translate(0 60.5)">
                                                            <path id="Tracé_2" data-name="Tracé 2" d="M13.453,66.816A.547.547,0,0,0,14,66.27V62.687A2.19,2.19,0,0,0,11.813,60.5H2.188A2.19,2.19,0,0,0,0,62.687V69a2.19,2.19,0,0,0,2.188,2.188h9.625A2.19,2.19,0,0,0,14,69a.547.547,0,1,0-1.094,0A1.1,1.1,0,0,1,11.813,70.1H2.188A1.1,1.1,0,0,1,1.094,69V62.8l4.751,2.954a2.174,2.174,0,0,0,2.31,0L12.906,62.8V66.27A.547.547,0,0,0,13.453,66.816ZM7.578,64.829a1.087,1.087,0,0,1-1.155,0L1.55,61.8a1.088,1.088,0,0,1,.637-.205h9.625a1.088,1.088,0,0,1,.637.205Z" transform="translate(0 -60.5)" fill="#fff" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>

                                        </span>
                                        member@brooke-co.com
                                    </a>
                                </li>
                                <?php
                                if (isset($_SESSION["email"])) {
                                    echo '<li class="nav-item"><a class="nav-link text-white" 
                                            href="controllers/Logout.php">Disconnect</a></li>';  // Logout
                                } else {
                                    echo '<li class="nav-item"><a class="nav-link text-white" 
                                            href="Connexion.php"></a></li>';   // login connexion was here remore
                                }
                                ?>
                                <!-- navbar black right - 6 items -->
                                <li class="nav-item ml-lg-auto">
                                    <a class="nav-link text-white" href="Inscription.php">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11.211" height="14" viewBox="0 0 11.211 14">
                                                <g id="pin" clip-path="url(#clip-path)">
                                                    <g id="pin-2" data-name="pin" transform="translate(-51.003)" opacity="0.8">
                                                        <g id="Groupe_4" data-name="Groupe 4" transform="translate(53.19 2.188)">
                                                            <g id="Groupe_3" data-name="Groupe 3" transform="translate(0)">
                                                                <path id="Tracé_3" data-name="Tracé 3" d="M134.418,80a3.418,3.418,0,1,0,.937,6.706.547.547,0,1,0-.3-1.052,2.321,2.321,0,1,1,1.589-1.567.547.547,0,1,0,1.048.314,3.42,3.42,0,0,0-3.274-4.4Z" transform="translate(-131 -80)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                        <g id="Groupe_6" data-name="Groupe 6" transform="translate(51.003)">
                                                            <g id="Groupe_5" data-name="Groupe 5" transform="translate(0)">
                                                                <path id="Tracé_4" data-name="Tracé 4" d="M60.57,1.64A5.605,5.605,0,0,0,51,5.6a5.857,5.857,0,0,0,.925,3.126,16.648,16.648,0,0,0,1.978,2.454,18.667,18.667,0,0,1,2.076,2.565.547.547,0,0,0,.462.255h.328a.547.547,0,0,0,.462-.255,18.667,18.667,0,0,1,2.076-2.565,16.645,16.645,0,0,0,1.978-2.454A5.858,5.858,0,0,0,62.214,5.6,5.569,5.569,0,0,0,60.57,1.64Zm-2.067,8.8a22.54,22.54,0,0,0-1.895,2.271,22.536,22.536,0,0,0-1.895-2.271C53.311,8.906,52.1,7.579,52.1,5.6a4.512,4.512,0,0,1,9.023,0C61.118,7.579,59.906,8.906,58.5,10.443Z" transform="translate(-51.003)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>

                                        </span>
                                        Location store</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Presentation.php">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="10.763" viewBox="0 0 20 10.763">
                                                <g id="blogging" clip-path="url(#clip-path)">
                                                    <g id="blogging-2" data-name="blogging" opacity="0.8">
                                                        <g id="Groupe_80" data-name="Groupe 80">
                                                            <g id="Groupe_79" data-name="Groupe 79">
                                                                <path id="Tracé_61" data-name="Tracé 61" d="M2.093,10.523a.782.782,0,0,0,1.127,0l1.875-1.95a.779.779,0,0,0,.218-.54V.78A.781.781,0,0,0,4.531,0H.781A.781.781,0,0,0,0,.78V8.033a.779.779,0,0,0,.218.54ZM1.562,1.56H3.75V7.719L2.656,8.857,1.562,7.719Z" fill="#fff" />
                                                                <path id="Tracé_62" data-name="Tracé 62" d="M186.78,1.56h11.172a.78.78,0,1,0,0-1.56H186.78a.78.78,0,1,0,0,1.56Z" transform="translate(-178.733)" fill="#fff" />
                                                                <path id="Tracé_65" data-name="Tracé 65" d="M197.952,118H186.78a.78.78,0,1,0,0,1.56h11.172a.78.78,0,1,0,0-1.56Z" transform="translate(-178.733 -113.399)" fill="#fff" />
                                                                <path id="Tracé_66" data-name="Tracé 66" d="M197.952,236H186.78a.78.78,0,1,0,0,1.56h11.172a.78.78,0,1,0,0-1.56Z" transform="translate(-178.733 -226.797)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        Hope List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Contact.php">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12.226" height="14" viewBox="0 0 12.226 14">
                                                <g id="shield" clip-path="url(#clip-path)">
                                                    <g id="shield-2" data-name="shield" transform="translate(-32.437 0)" opacity="0.8">
                                                        <g id="Groupe_18" data-name="Groupe 18" transform="translate(32.437 0)">
                                                            <path id="Tracé_11" data-name="Tracé 11" d="M44.339,2.53,38.744.047a.546.546,0,0,0-.445,0L32.76,2.531a.546.546,0,0,0-.323.5V7.341a7.029,7.029,0,0,0,1.767,4.57,6.383,6.383,0,0,0,1.935,1.508A5.353,5.353,0,0,0,38.55,14a5.533,5.533,0,0,0,3.269-1.087.546.546,0,1,0-.642-.883,4.449,4.449,0,0,1-2.626.878c-2.628,0-5.021-2.654-5.021-5.567V3.383l5-2.239,5.048,2.241V7.341a5.779,5.779,0,0,1-.835,2.941.546.546,0,1,0,.938.558,6.87,6.87,0,0,0,.988-3.5V3.029A.546.546,0,0,0,44.339,2.53Z" transform="translate(-32.437 0)" fill="#fff" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        Guarantee</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Contact.php">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="12" viewBox="0 0 18 12">
                                                <g id="credit-card" clip-path="url(#clip-path)">
                                                    <g id="credit-card-2" data-name="credit-card" transform="translate(0 -85.333)" opacity="0.8">
                                                        <g id="Groupe_9" data-name="Groupe 9" transform="translate(0 85.333)">
                                                            <g id="Groupe_8" data-name="Groupe 8" transform="translate(0 0)">
                                                                <path id="Tracé_6" data-name="Tracé 6" d="M16.125,85.333H1.875A1.878,1.878,0,0,0,0,87.208v8.25a1.878,1.878,0,0,0,1.875,1.875h14.25A1.878,1.878,0,0,0,18,95.458v-8.25A1.878,1.878,0,0,0,16.125,85.333ZM17.25,95.458a1.126,1.126,0,0,1-1.125,1.125H1.875A1.126,1.126,0,0,1,.75,95.458v-8.25a1.126,1.126,0,0,1,1.125-1.125h14.25a1.126,1.126,0,0,1,1.125,1.125v8.25Z" transform="translate(0 -85.333)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                        <g id="Groupe_11" data-name="Groupe 11" transform="translate(0 87.583)">
                                                            <g id="Groupe_10" data-name="Groupe 10" transform="translate(0 0)">
                                                                <path id="Tracé_7" data-name="Tracé 7" d="M17.625,149.333H.375a.375.375,0,0,0-.375.375v2.25a.375.375,0,0,0,.375.375h17.25a.375.375,0,0,0,.375-.375v-2.25A.375.375,0,0,0,17.625,149.333Zm-.375,2.25H.75v-1.5h16.5v1.5Z" transform="translate(0 -149.333)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                        <g id="Groupe_13" data-name="Groupe 13" transform="translate(2.25 92.833)">
                                                            <g id="Groupe_12" data-name="Groupe 12" transform="translate(0 0)">
                                                                <path id="Tracé_8" data-name="Tracé 8" d="M68.875,298.667h-4.5a.375.375,0,1,0,0,.75h4.5a.375.375,0,1,0,0-.75Z" transform="translate(-64 -298.667)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                        <g id="Groupe_15" data-name="Groupe 15" transform="translate(2.25 94.333)">
                                                            <g id="Groupe_14" data-name="Groupe 14" transform="translate(0 0)">
                                                                <path id="Tracé_9" data-name="Tracé 9" d="M68.875,341.333h-4.5a.375.375,0,1,0,0,.75h4.5a.375.375,0,1,0,0-.75Z" transform="translate(-64 -341.333)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                        <g id="Groupe_17" data-name="Groupe 17" transform="translate(12.75 92.083)">
                                                            <g id="Groupe_16" data-name="Groupe 16" transform="translate(0 0)">
                                                                <path id="Tracé_10" data-name="Tracé 10" d="M364.542,277.333h-.75a1.126,1.126,0,0,0-1.125,1.125v.75a1.126,1.126,0,0,0,1.125,1.125h.75a1.126,1.126,0,0,0,1.125-1.125v-.75A1.126,1.126,0,0,0,364.542,277.333Zm.375,1.875a.375.375,0,0,1-.375.375h-.75a.375.375,0,0,1-.375-.375v-.75a.375.375,0,0,1,.375-.375h.75a.375.375,0,0,1,.375.375Z" transform="translate(-362.667 -277.333)" fill="#fff" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Payment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="Contact.php">
                                    <span class="pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="11.75" viewBox="0 0 18 11.75">
                                            <g id="delivery-truck" clip-path="url(#clip-path)">
                                                <path id="delivery-truck-2" data-name="delivery-truck" d="M17.992,94.979c-.07-.358-.691-3.511-.844-3.971a8.54,8.54,0,0,0-2.368-3.37A5.475,5.475,0,0,0,11.487,86H2.4a.855.855,0,0,0-.854.854v1.342H.915a.418.418,0,1,0,0,.836h.629v1H.418a.418.418,0,1,0,0,.836H1.544v4.2a.855.855,0,0,0,.854.854H3.44a2.153,2.153,0,0,0,4.258,0h3.833a2.153,2.153,0,0,0,4.258,0h1.356A.855.855,0,0,0,18,95.06.421.421,0,0,0,17.992,94.979Zm-1.685-3.842H12V86.907A7.935,7.935,0,0,1,16.307,91.137ZM5.569,96.91a1.317,1.317,0,1,1,1.317-1.317A1.319,1.319,0,0,1,5.569,96.91Zm8.092,0a1.317,1.317,0,1,1,1.317-1.317A1.319,1.319,0,0,1,13.661,96.91Zm3.464-1.832H15.752a2.153,2.153,0,0,0-4.182,0H7.66a2.153,2.153,0,0,0-4.182,0H2.4a.018.018,0,0,1-.018-.018v-4.2H7.5a.418.418,0,1,0,0-.836H2.38v-1H4.737a.418.418,0,0,0,0-.836H2.38V86.85a.018.018,0,0,1,.018-.018h8.767v4.723a.418.418,0,0,0,.418.418h4.941c.178.813.423,2.115.631,3.079C17.159,95.072,17.147,95.078,17.125,95.078Z" transform="translate(0 -85.996)" fill="#fff" opacity="0.8" />
                                            </g>
                                        </svg>
                                    </span>
                                    Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('logout') }}">
                                    <span class="pr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 14 14">
                                            <g id="user" clip-path="url(#clip-path)">
                                                <g id="user-2" data-name="user" transform="translate(0)" opacity="0.8">
                                                    <g id="Groupe_7" data-name="Groupe 7" transform="translate(0)">
                                                        <path id="Tracé_5" data-name="Tracé 5" d="M13.965,12a.547.547,0,0,0-1.071.223.571.571,0,0,1-.116.479.556.556,0,0,1-.437.208H1.66a.556.556,0,0,1-.437-.208.571.571,0,0,1-.116-.479A6.042,6.042,0,0,1,6.855,7.435l.145,0,.146,0A6.016,6.016,0,0,1,12,10.105a.547.547,0,1,0,.908-.609A7.113,7.113,0,0,0,9.227,6.7a3.719,3.719,0,1,0-4.451,0A7.113,7.113,0,0,0,.036,12,1.661,1.661,0,0,0,1.66,14H12.341a1.661,1.661,0,0,0,1.624-2ZM4.375,3.719A2.625,2.625,0,1,1,7.133,6.34H6.868A2.628,2.628,0,0,1,4.375,3.719Z" transform="translate(0)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                    <!-- navbar brooke & co -->
                    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-pink">
                    <div class="wrapper navbar p-0">
                        <!-- navbar brooke et co -->
                        <h1 class="brookebrand m-0"><span class="align-middle">brooke & co.</span></h1>
                        <!-- hamburger menu -->
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- navbar menu-items and searchbar -->
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <!-- searchbar -->
                            <form class="form-inline ml-5 mr-3 my-2 mt-lg-3">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            <!-- icons heart and cart -->
                            <ul class="navbar-nav ml-lg-auto">
                                <li class="nav-item ml-5">
                                    <a class="nav-link text-white" href="#">
                                        <span class="list-item pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 23">
                                                <g id="heart" clip-path="url(#clip-path)">
                                                    <g id="Groupe_20" data-name="Groupe 20">
                                                        <path id="Tracé_13" data-name="Tracé 13" d="M27.637,41.987a7.952,7.952,0,0,0-5.723-2.315,7.512,7.512,0,0,0-6.877,3.667L15,43.4l-.037-.062a7.512,7.512,0,0,0-6.877-3.667,7.952,7.952,0,0,0-5.723,2.315A8.592,8.592,0,0,0,0,48.184c0,5.285,4.7,8.789,8.843,11.881a29.793,29.793,0,0,1,5.244,4.521,1.172,1.172,0,0,0,1.826,0,17.9,17.9,0,0,1,2.763-2.626,1.172,1.172,0,0,0-1.468-1.827A25.33,25.33,0,0,0,15,62.1a41.389,41.389,0,0,0-4.756-3.91c-3.884-2.9-7.9-5.893-7.9-10,0-3.632,2.361-6.168,5.742-6.168a5.262,5.262,0,0,1,4.825,2.458,6.816,6.816,0,0,1,.921,2.651,1.172,1.172,0,0,0,2.336.005,6.813,6.813,0,0,1,.921-2.656,5.262,5.262,0,0,1,4.825-2.458c3.381,0,5.742,2.537,5.742,6.168,0,3.4-2.769,6.037-5.761,8.38a1.172,1.172,0,1,0,1.445,1.845,24.843,24.843,0,0,0,4.554-4.389A9.517,9.517,0,0,0,30,48.184,8.592,8.592,0,0,0,27.637,41.987Z" transform="translate(0 -39.672)" fill="#363636" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        Delivery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Contact.php">
                                        <span class="pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 14 14">
                                                <g id="user" clip-path="url(#clip-path)">
                                                    <g id="user-2" data-name="user" transform="translate(0)" opacity="0.8">
                                                        <g id="Groupe_7" data-name="Groupe 7" transform="translate(0)">
                                                            <path id="Tracé_5" data-name="Tracé 5" d="M13.965,12a.547.547,0,0,0-1.071.223.571.571,0,0,1-.116.479.556.556,0,0,1-.437.208H1.66a.556.556,0,0,1-.437-.208.571.571,0,0,1-.116-.479A6.042,6.042,0,0,1,6.855,7.435l.145,0,.146,0A6.016,6.016,0,0,1,12,10.105a.547.547,0,1,0,.908-.609A7.113,7.113,0,0,0,9.227,6.7a3.719,3.719,0,1,0-4.451,0A7.113,7.113,0,0,0,.036,12,1.661,1.661,0,0,0,1.66,14H12.341a1.661,1.661,0,0,0,1.624-2ZM4.375,3.719A2.625,2.625,0,1,1,7.133,6.34H6.868A2.628,2.628,0,0,1,4.375,3.719Z" transform="translate(0)" fill="#fff" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        Register or Sign in</a>
                                </li>
                            </ul>
                        </div>
                    </nav> --}}
                    <!-- navbar brooke & co -->
                    <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3 bg-pink">
                        <div class="wrapper navbar p-0">
                            <!-- navbar brooke et co -->
                            <div class="navbar navbar-expand-lg navbar-dark p-0">
                                <a class="brookebrand m-0" href="/product">brooke & co</a>
                                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237 236.36" style="fill:#434E5E" width="1.6em" height="1.6em">
                                    <path d="M119,67.11A33.15,33.15,0,1,1,152.14,34,33.14,33.14,0,0,1,119,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                    <path d="M119,152.14A33.14,33.14,0,1,1,152.14,119,33.13,33.13,0,0,1,119,152.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                    <path d="M204.36,152.14A33.14,33.14,0,1,1,237.5,119a33.14,33.14,0,0,1-33.14,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                    <path d="M119,237.18A33.15,33.15,0,1,1,152.14,204,33.14,33.14,0,0,1,119,237.18" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                    <path d="M33.64,237.18A33.15,33.15,0,1,1,66.79,204a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                    <path d="M33.64,67.11A33.15,33.15,0,1,1,66.79,34,33.15,33.15,0,0,1,33.64,67.11" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                    <path d="M33.64,152.14A33.14,33.14,0,1,1,66.79,119a33.14,33.14,0,0,1-33.15,33.14" transform="translate(-0.5 -0.82)" fill-opacity="0.5">
                                        <animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite" />
                                    </path>
                                </svg>
                            </div><!-- navbar menu-items and searchbar -->
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <!-- searchbar -->
                                <form class="search-container ml-lg-auto" action="#">
                                    <input type="text" placeholder=" Search" name="search">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17.378" height="18" viewBox="0 0 17.378 18">
                                            <g id="search" clip-path="url(#clip-path)">
                                                <path id="search-2" data-name="search" d="M18.1,16.4,13.814,11.94a7.265,7.265,0,1,0-5.562,2.6,7.19,7.19,0,0,0,4.164-1.315l4.317,4.489A.948.948,0,1,0,18.1,16.4ZM8.251,1.9A5.372,5.372,0,1,1,2.88,7.267,5.378,5.378,0,0,1,8.251,1.9Z" transform="translate(-0.984)" fill="#fff" />
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                                <!-- message about brooke et co -->
                                <div class="mess-about ml-lg-auto"><span class="font-weight-bold"><a href="#">What is Brooke et Co? A streaming service? A curator? A publisher? A distributor? A cinema lover? Yes.</span></a></span></div>
                                <!-- icons heart and cart -->
                                <ul class="navbar-nav ml-lg-3">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">
                                            <span class="list-item pr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 23">
                                                    <g id="heart" clip-path="url(#clip-path)">
                                                        <g id="Groupe_20" data-name="Groupe 20">
                                                            <path id="Tracé_13" data-name="Tracé 13" d="M27.637,41.987a7.952,7.952,0,0,0-5.723-2.315,7.512,7.512,0,0,0-6.877,3.667L15,43.4l-.037-.062a7.512,7.512,0,0,0-6.877-3.667,7.952,7.952,0,0,0-5.723,2.315A8.592,8.592,0,0,0,0,48.184c0,5.285,4.7,8.789,8.843,11.881a29.793,29.793,0,0,1,5.244,4.521,1.172,1.172,0,0,0,1.826,0,17.9,17.9,0,0,1,2.763-2.626,1.172,1.172,0,0,0-1.468-1.827A25.33,25.33,0,0,0,15,62.1a41.389,41.389,0,0,0-4.756-3.91c-3.884-2.9-7.9-5.893-7.9-10,0-3.632,2.361-6.168,5.742-6.168a5.262,5.262,0,0,1,4.825,2.458,6.816,6.816,0,0,1,.921,2.651,1.172,1.172,0,0,0,2.336.005,6.813,6.813,0,0,1,.921-2.656,5.262,5.262,0,0,1,4.825-2.458c3.381,0,5.742,2.537,5.742,6.168,0,3.4-2.769,6.037-5.761,8.38a1.172,1.172,0,1,0,1.445,1.845,24.843,24.843,0,0,0,4.554-4.389A9.517,9.517,0,0,0,30,48.184,8.592,8.592,0,0,0,27.637,41.987Z" transform="translate(0 -39.672)" fill="#363636" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ml-lg-auto">
                                        <a class="nav-link text-white" href="{{route('cart.show')}}">
                                            <span class="list-item pr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
                                                    <g id="shopping-cart" clip-path="url(#clip-path)">
                                                        <g id="Groupe_19" data-name="Groupe 19">
                                                            <path id="Tracé_12" data-name="Tracé 12" d="M29.737,6.819a1.172,1.172,0,0,0-.909-.433H7.6l-.087-.8,0-.026A6.412,6.412,0,0,0,1.172,0a1.172,1.172,0,0,0,0,2.344A4.062,4.062,0,0,1,5.186,5.855l1.393,12.8a3.521,3.521,0,0,0-2.067,3.2c0,.01,0,.02,0,.029s0,.02,0,.029A3.52,3.52,0,0,0,8.027,25.43H8.5a3.457,3.457,0,1,0,6.546,0h5.055a3.457,3.457,0,1,0,3.273-2.344H8.027a1.173,1.173,0,0,1-1.172-1.172c0-.01,0-.02,0-.029s0-.02,0-.029a1.173,1.173,0,0,1,1.172-1.172H22.988A5.366,5.366,0,0,0,27.852,17.4a1.172,1.172,0,0,0-2.146-.942,3.064,3.064,0,0,1-2.718,1.877H8.9L7.857,8.73h19.53l-.573,2.749a1.172,1.172,0,1,0,2.294.479l.868-4.16A1.172,1.172,0,0,0,29.737,6.819ZM23.379,25.43a1.113,1.113,0,1,1-1.113,1.113A1.115,1.115,0,0,1,23.379,25.43Zm-11.6,0a1.113,1.113,0,1,1-1.113,1.113A1.115,1.115,0,0,1,11.777,25.43Z" fill="#474747" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- hamburger menu -->
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>
                <!-- navbar All Categories Books Films VGames -->
                <nav class="navbar navbar-expand-lg navbar-light bg-pink p-0 content">
                    <div class="wrapper navbar p-0">
                        <ul class="navbar-nav navbar-all form-inline mr-lg-auto navbar-expand-lg">
                            <!-- Menu Accordion -->
                            <li class="nav-item dropdown categorylogo">
                                <span class="pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="16.646" viewBox="0 0 24 16.646">
                                        <g id="Composant_4_4" data-name="Composant 4 – 4" clip-path="url(#clip-path)">
                                            <g id="Groupe_22" data-name="Groupe 22" transform="translate(0 7.354)">
                                                <g id="Groupe_21" data-name="Groupe 21" transform="translate(0 0)">
                                                    <path id="Tracé_14" data-name="Tracé 14" d="M23.031,235.318H.969a.969.969,0,1,0,0,1.939H23.031a.969.969,0,1,0,0-1.939Z" transform="translate(0 -235.318)" fill="" />
                                                </g>
                                            </g>
                                            <g id="Groupe_24" data-name="Groupe 24">
                                                <g id="Groupe_23" data-name="Groupe 23" transform="translate(0 0)">
                                                    <path id="Tracé_15" data-name="Tracé 15" d="M16.754,78.439H1.246a1,1,0,1,0,0,1.939H16.754a1,1,0,1,0,0-1.939Z" transform="translate(0 -78.439)" fill="" />
                                                </g>
                                            </g>
                                            <g id="Groupe_26" data-name="Groupe 26" transform="translate(0 14.707)">
                                                <g id="Groupe_25" data-name="Groupe 25" transform="translate(0 0)">
                                                    <path id="Tracé_16" data-name="Tracé 16" d="M11.388,392.2H.612c-.338,0-.612.434-.612.969s.274.969.612.969H11.388c.338,0,.612-.434.612-.969S11.726,392.2,11.388,392.2Z" transform="translate(0 -392.197)" fill="" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <a class="nav-link navbar-brand pl-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">all categories

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    {{-- @foreach ($categoryName as $Cat)
                                        
                                    @endforeach --}}
                                  
                                    <a class="dropdown-item" href="/cattegoryBooks">Books</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/cattegoryFilms">Films</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/cattegoryVgames">Video Games</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <!-- Navbar Items -->
                            <li class="nav-item pl-5 pr-5">
                                <a class="nav-link" href="/cattegoryBooks">books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-5 pr-5" href="/cattegoryFilms">films</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-5 pr-5" href="/cattegoryVgames">video games</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <script>
        window.onscroll = function() {
            stickynavbar()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function stickynavbar() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    