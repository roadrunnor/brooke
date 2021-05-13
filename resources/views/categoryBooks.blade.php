@include('header-blank')

@include('header-sticky')


<!-- Book Section -->
<div class="wrapper">
    <section>
        <h3 class="font-weight-bold mt-5 mb-4">Books Section</h3>
        <nav class="selected-products">
            <ul class="selected-products-items px-0">
                <li class="s-p-items m-0">Cinema</li>
                <li class="s-p-items m-0 active">Geography</li>
                <li class="s-p-items m-0">Art History</li>
                <li class="s-p-items m-0">Gamers</li>
                <li class="s-p-items m-0">Philosophy</li>
                <li class="s-p-items m-0">Humanities</li>
                <li class="s-p-items m-0">Mathematic</li>
                <li class="s-p-items m-0">Sports</li>
                <li class="s-p-items m-0">Nature</li>
                <li class="s-p-items m-0">Living Styles</li>
                <li class="s-p-items m-0">Other</li>

                {{-- test --}}
                {{-- @foreach ($subCategory as $subCat)
                        <li class="s-p-items m-0"><a href="{{route('category.subCinemaBook')}}"> {{$subC->name}}</a> </li> --}}
                {{-- <li class="s-p-items m-0 active">Geography</li>
                        <li class="s-p-items m-0">Art History</li>
                        <li class="s-p-items m-0">Gamers</li>
                        <li class="s-p-items m-0">Philosophy</li>
                        <li class="s-p-items m-0">Humanities</li>
                        <li class="s-p-items m-0">Mathematic</li>
                        <li class="s-p-items m-0">Sports</li>
                        <li class="s-p-items m-0">Nature</li>
                        <li class="s-p-items m-0">Living Styles</li>
                        <li class="s-p-items m-0">Other</li> --}}
                {{-- @endforeach --}}

            </ul>
        </nav>
        <div class="container-fluid mt-3 mb-3">
        </div>
    </section>
</div>

<!-- Foreach Books Section -->
<div class="container-fluid wrapper">
    <div class="section products">
        <div class="row wrapper">
            @foreach ($catBooks as $product)
            <div class="mr-lg-auto">
                @csrf
                <div class="card mb-3">
                    <div class="card-content">
                        <a class="card-img" href="{{ url('/details')}}">
                            {{-- <img src="{{ asset('images/books/') }}"> --}}
                            <img class="card-img-top" alt="Card image cap" src="{{ asset('images/books/'.$product->product_image) }}">
                        </a>
                        <p class="card-stars m-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="10" viewBox="0 0 78 11.497">
                                <g id="Groupe_313" data-name="Groupe 313" transform="translate(-116 -1824)">
                                    <path id="star" d="M11.739,6.257a.861.861,0,0,0-.477-1.468L8.356,4.367a.38.38,0,0,1-.286-.208l-1.3-2.633a.861.861,0,0,0-1.543,0l-1.3,2.633a.38.38,0,0,1-.286.208L.737,4.789A.861.861,0,0,0,.26,6.257l2.1,2.049a.38.38,0,0,1,.11.336l-.5,2.894a.843.843,0,0,0,.188.7.87.87,0,0,0,1.061.209l2.6-1.366a.389.389,0,0,1,.354,0l2.6,1.366a.852.852,0,0,0,.4.1.863.863,0,0,0,.66-.309.842.842,0,0,0,.188-.7l-.5-2.894a.38.38,0,0,1,.11-.336Z" transform="translate(116.001 1822.953)" fill="#ff1744" />
                                    <path id="star-2" data-name="star" d="M11.739,6.257a.861.861,0,0,0-.477-1.468L8.356,4.367a.38.38,0,0,1-.286-.208l-1.3-2.633a.861.861,0,0,0-1.543,0l-1.3,2.633a.38.38,0,0,1-.286.208L.737,4.789A.861.861,0,0,0,.26,6.257l2.1,2.049a.38.38,0,0,1,.11.336l-.5,2.894a.843.843,0,0,0,.188.7.87.87,0,0,0,1.061.209l2.6-1.366a.389.389,0,0,1,.354,0l2.6,1.366a.852.852,0,0,0,.4.1.863.863,0,0,0,.66-.309.842.842,0,0,0,.188-.7l-.5-2.894a.38.38,0,0,1,.11-.336Z" transform="translate(150.001 1822.953)" fill="#ff1744" />
                                    <path id="star-3" data-name="star" d="M11.739,6.257a.861.861,0,0,0-.477-1.468L8.356,4.367a.38.38,0,0,1-.286-.208l-1.3-2.633a.861.861,0,0,0-1.543,0l-1.3,2.633a.38.38,0,0,1-.286.208L.737,4.789A.861.861,0,0,0,.26,6.257l2.1,2.049a.38.38,0,0,1,.11.336l-.5,2.894a.843.843,0,0,0,.188.7.87.87,0,0,0,1.061.209l2.6-1.366a.389.389,0,0,1,.354,0l2.6,1.366a.852.852,0,0,0,.4.1.863.863,0,0,0,.66-.309.842.842,0,0,0,.188-.7l-.5-2.894a.38.38,0,0,1,.11-.336Z" transform="translate(133.001 1822.953)" fill="#ff1744" />
                                    <path id="star-4" data-name="star" d="M11.739,6.257a.861.861,0,0,0-.477-1.468L8.356,4.367a.38.38,0,0,1-.286-.208l-1.3-2.633a.861.861,0,0,0-1.543,0l-1.3,2.633a.38.38,0,0,1-.286.208L.737,4.789A.861.861,0,0,0,.26,6.257l2.1,2.049a.38.38,0,0,1,.11.336l-.5,2.894a.843.843,0,0,0,.188.7.87.87,0,0,0,1.061.209l2.6-1.366a.389.389,0,0,1,.354,0l2.6,1.366a.852.852,0,0,0,.4.1.863.863,0,0,0,.66-.309.842.842,0,0,0,.188-.7l-.5-2.894a.38.38,0,0,1,.11-.336Z" transform="translate(167.001 1822.953)" fill="#ff1744" />
                                    <path id="star-5" data-name="star" d="M11.739,6.257a.861.861,0,0,0-.477-1.468L8.356,4.367a.38.38,0,0,1-.286-.208l-1.3-2.633a.861.861,0,0,0-1.543,0l-1.3,2.633a.38.38,0,0,1-.286.208L.737,4.789A.861.861,0,0,0,.26,6.257l2.1,2.049a.38.38,0,0,1,.11.336l-.5,2.894a.843.843,0,0,0,.188.7.87.87,0,0,0,1.061.209l2.6-1.366a.389.389,0,0,1,.354,0l2.6,1.366a.852.852,0,0,0,.4.1.863.863,0,0,0,.66-.309.842.842,0,0,0,.188-.7l-.5-2.894a.38.38,0,0,1,.11-.336Z" transform="translate(182.001 1822.953)" fill="#e2e2e2" />
                                </g>
                            </svg>
                        </p>
                        <p class="card-title m-0">{{$product->product_name}}</p>
                        <p class="m-0 font-weight-bold"><span class="align-text-bottom">{{$product->product_price}}</span>
                        </p>
                        <div class="card-btn-out">
                            <a class="card-btn" href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Showmore Section -->
<div class="wrapper">
    <section id="showMore" class="my-4">
        <div class="container-fluid mt-3">
            <div class="row justify-content-center mx-auto">
                <a href="#" class="text-secondary d-flex align-items-center mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.25" viewBox="0 0 24 20.25">
                        <g id="loading" transform="translate(0 -40)">
                            <g id="Groupe_66" data-name="Groupe 66" transform="translate(4.064 40)">
                                <g id="Groupe_65" data-name="Groupe 65" transform="translate(0 0)">
                                    <path id="Tracé_55" data-name="Tracé 55" d="M106.371,51.434a.937.937,0,0,0-1.326-.007l-2.153,2.132V50.125a10.128,10.128,0,0,0-14.881-8.941l-.006,0-.012.007h0l-.028.015-.013.007-.01.005-.163.09-.011.006c-.22.125-.437.26-.647.4a.937.937,0,1,0,1.047,1.556,8.251,8.251,0,0,1,12.85,6.85v3.456L98.86,51.475a.937.937,0,1,0-1.31,1.342l2.424,2.367a2.835,2.835,0,0,0,3.957-.014l2.434-2.409A.938.938,0,0,0,106.371,51.434Z" transform="translate(-86.707 -40)" fill="#303030" />
                                </g>
                            </g>
                            <g id="Groupe_68" data-name="Groupe 68" transform="translate(0 48.626)">
                                <g id="Groupe_67" data-name="Groupe 67" transform="translate(0 0)">
                                    <path id="Tracé_56" data-name="Tracé 56" d="M1.011,224.016a.936.936,0,0,0-.992.879c-.012.2-.019.412-.019.619,0,.137,0,.276.008.412a.938.938,0,0,0,.936.9H.983a.938.938,0,0,0,.9-.974c0-.111-.007-.225-.007-.338,0-.168.005-.338.015-.505A.938.938,0,0,0,1.011,224.016Z" transform="translate(0 -224.014)" fill="#303030" />
                                </g>
                            </g>
                            <g id="Groupe_70" data-name="Groupe 70" transform="translate(0.908 53.175)">
                                <g id="Groupe_69" data-name="Groupe 69" transform="translate(0 0)">
                                    <path id="Tracé_57" data-name="Tracé 57" d="M21.551,322.325a8.247,8.247,0,0,1-.4-.738.937.937,0,1,0-1.689.815,10.133,10.133,0,0,0,.5.906.938.938,0,1,0,1.6-.983Z" transform="translate(-19.365 -321.057)" fill="#303030" />
                                </g>
                            </g>
                            <g id="Groupe_72" data-name="Groupe 72" transform="translate(8.252 58.328)">
                                <g id="Groupe_71" data-name="Groupe 71" transform="translate(0 0)">
                                    <path id="Tracé_58" data-name="Tracé 58" d="M177.919,431.042c-.281,0-.564-.014-.841-.042a.937.937,0,0,0-.188,1.865,10.275,10.275,0,0,0,1.03.052h0a.938.938,0,1,0,0-1.875Z" transform="translate(-176.046 -430.995)" fill="#303030" />
                                </g>
                            </g>
                            <g id="Groupe_74" data-name="Groupe 74" transform="translate(3.909 56.708)">
                                <g id="Groupe_73" data-name="Groupe 73">
                                    <path id="Tracé_59" data-name="Tracé 59" d="M85.579,397.059a8.278,8.278,0,0,1-.712-.448.938.938,0,0,0-1.078,1.534,10.17,10.17,0,0,0,.874.55.937.937,0,1,0,.917-1.636Z" transform="translate(-83.39 -396.44)" fill="#303030" />
                                </g>
                            </g>
                            <g id="Groupe_76" data-name="Groupe 76" transform="translate(0.991 44.219)">
                                <g id="Groupe_75" data-name="Groupe 75" transform="translate(0 0)">
                                    <path id="Tracé_60" data-name="Tracé 60" d="M23.055,130.156a.938.938,0,0,0-1.3.281,10.139,10.139,0,0,0-.514.9.937.937,0,1,0,1.672.849,8.262,8.262,0,0,1,.419-.73A.938.938,0,0,0,23.055,130.156Z" transform="translate(-21.143 -130.007)" fill="#303030" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div class="vertical-text">
                        <span class="font-weight-bold pl-2">Show more</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>

<!-- Latest Films Section -->
<div class="wrapper">
    <section class="mb-5">
        <h3 class="font-weight-bold mt-5 mb-4">Latest Films</h3>
        <div class="container-fluid mt-3">
            <div class="row p-1">
                <div class="col w-50 p-0">
                    <div href="#" class="text-secondary  m-0 d-flex align-items-start">
                        <img class="align-top" src="/images/films/los_conductor.png" alt="">
                        <div class="vertical-text pl-4 pr-4">
                            <p class="font-weight-regular mb-1">Colombia, France</p>
                            <h6 class="text-uppercase font-weight-bold mb-0">los conductor</h6>
                            <h6 class="text-uppercase font-weight-bold mb-1">camilo restrepo<span class="text-capitalize">, 2020, Drama</span></h6>
                            <p class="font-weight-regular text-uppercase mb-0">synopsis</p>
                            <p class="font-weight-regular mb-0">Medellin, Colombia. Pinky is on the run after freeing himself from the grip of a religious sect. He finds a place to squat, but misled by his own faith, <span id="dots">...</span><span id="more">he questions everything. As he tries to put back together the pieces of his life, violent memories return to haunt him, and ask for revenge.</span></p>
                            <button onclick="myFunction()" id="myBtn">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="col w-50 p-0">
                    <div href="#" class="text-secondary  m-0 d-flex align-items-start">
                        <img class="align-top" src="/images/films/cold_meridian.png" alt="">
                        <div class="vertical-text pl-4 pr-4">
                            <p class="font-weight-regular mb-1">Hungary, United Kingdom</p>
                            <h6 class="text-uppercase font-weight-bold mb-0">cold meridian</h6>
                            <h6 class="text-uppercase font-weight-bold mb-1">peter strickland<span class="text-capitalize">, 2020, Short, Avant-Garde</span></h6>
                            <p class="font-weight-regular text-uppercase mb-0">synopsis</p>
                            <p class="font-weight-regular mb-0">The repeated rituals of an online performer have a transfixing effect on her viewers, in this short exploration of sensual audio visual stimulation. <span id="dots2">...</span><span id="more2">What starts as an exploration of tactility, addiction and control soon descends into a nightmarish dance performance where no rules apply.</span></p>
                            <button onclick="myFunction2()" id="myBtn2">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@include('footer')