@include('assets.css')
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Maktaba ya picha</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Nyumbani</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Maktaba ya picha</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Causes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div>
                <h1 class="display-6 mb-5">Picha za matukio Mbalimbali yaliyo kuishwa kutokea jimboni</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top:6%">
                    {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div> --}}
                    <h4>Mtaala wa Elimu unaozungatia Ujuzi na Umahili</h6>
                    <p>Mazungumzo ya Kitaaluma kuhusu Mtaala wa Elimu unaozungatia Ujuzi na Umahili. Mgeni Rasmi alikuwa na Baba Askofu Wa Jimbo Kuu la Ifakara. </p>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-1.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-16.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom 
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-17.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center mt-4">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top:6%">
                    {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div> --}}
                    <h4>Mtaala wa Elimu unaozungatia Ujuzi na Umahili</h4>
                    <p>Mazungumzo ya Kitaaluma kuhusu Mtaala wa Elimu unaozungatia Ujuzi na Umahili. Mgeni Rasmi alikuwa na Baba Askofu Wa Jimbo Kuu la Ifakara. </p>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-4.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-5.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom 
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-6.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center mt-4">
               
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                      
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-7.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-8.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom 
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-9.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center mt-4">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div> --}}
                    <h4> Misa Takatifu ya Kubariki Mafuta</h4>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                      
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-10.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-11.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom 
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-18.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center mt-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div> --}}
                    <h4> Misa Takatifu ya Kubariki Mafuta</h4>
                    <p> Adhimisho la Misa Takatifu ya kubariki Mafuta ya Wakatukumeni, Wagonjwa na kuweka Wakfu  Krisma Takatifu kutoka Parokia ya Kanisa Kuu Mtakatifu Andrea Mtume, Jimbo Katoliki Ifakara.</p>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-13.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                      
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-14.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom 
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('web/img/gallery/g-15.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->
  
    @include('layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('assets.js')
</body>

</html>