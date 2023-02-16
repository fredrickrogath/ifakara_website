@include('assets.css')

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('layouts.header')
    <!-- ##### Header Area End ##### -->


    <section class="intro-news-area mt-4 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12">
                    <div class="intro-news-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col- md-8 col-sm-8 col-md-8">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail " style="width: 100%">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                    data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                                        </li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                                        </li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('site/img/bg-img/church_1.jpg') }}"
                                                                alt="First slide">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>first image on the the </h5>
                                                                <p>Lorem ipsum uptas deserucusandae! Adipisci, aut
                                                                    dolorum!
                                                                    Ullam..</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('site/img/bg-img/church_2.jpg') }}"
                                                                alt="Second slide">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>first image on the the </h5>
                                                                <p>Lorem ipsum uptas deserucusandae! Adipisci, aut
                                                                    dolorum!
                                                                    Ullam..</p>
                                                                <p>Lorem ipsum uptas deserucusandae! Adipisci, aut
                                                                    dolorum!
                                                                    Ullam..</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('site/img/bg-img/church_2.jpg') }}"
                                                                alt="Third slide">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>first image on the the </h5>
                                                                <p>Lorem ipsum uptas deserucusandae! Adipisci, aut
                                                                    dolorum!
                                                                    Ullam..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                        role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                        role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="intro-news-filter d-flex justify-content-between"
                                            style="background-color:#1c2938; color:#ffff">
                                            <h6 style="color:#fff"> Ifakara Catholic Diocese</h6>

                                        </div>
                                        <p style="text-align: justify">The Ifakara Catholic Diocese ceded from Mahenge
                                            Diocese on 14th January 2012. It was officially inaugurated on 19th March
                                            2012. The first bishop is the Rit. Rev. Salutaris M. Libena. The Vicar
                                            General is Rev. Fr. Hospitio Itatilo, the Secretary General is Rev. Godfrey
                                            Hongo, the deputy secretary general is Rev. Fr. Edwin Lyanga and the
                                            treasury general is Rev. Sr. Patricia Mtunga. The Ifakara Catholic Diocese
                                            ceded from Mahenge Diocese on 14th January 2012. </p>

                                       <div class="intro-news-filter d-flex justify-content-between"
                                            style="background-color:#1c2938; color:#ffff">
                                            <h6 style="color:#fff">Diocese Documents </h6>

                                        </div>
                                        <p style="text-align: justify "><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Nesciunt sit,
                                            rep
                                        </p>
                                        <p style="text-align: justify"><span><a href=""><i class="fa fa-book text-danger"
                                                        aria-hidden="true"></i></a></span> Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Tempore, minima veniam. Placeat.</p>
                                            
                                        <p style="text-align: justify"><span style="font-size: 25px"><a href=""><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i>
                                        </a></span> Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Tempore, minima veniam. Placeat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Intro News Area End ##### -->
    <section class="intro-news-area  mb-70" style="margin-top: -6%">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between"
                                            style="background-color:#1c2938; color:#ffff">
                                            <h6 style="color:#fff"> Ifakara Catholic Diocese</h6>

                                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-md-12 col-12">
                                        <p style="text-align: justify">The Ifakara Catholic Diocese ceded from Mahenge
                                            Diocese on 14th January 2012. It was officially inaugurated on 19th March
                                            2012. The first bishop is the Rit. Rev. Salutaris M. Libena. The Vicar
                                            General is Rev. Fr. Hospitio Itatilo, the Secretary General is Rev. Godfrey
                                            Hongo, the deputy secretary general is Rev. Fr. Edwin Lyanga and the
                                            treasury general is Rev. Sr. Patricia Mtunga. The diocese covers 14,245 km2
                                            of the whole part of Kilombero district. </p>

                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify">Ifakara Catholic Diocese was started with 19
                                                parishes. Now the diocese has 26 parishes and 01 elected parish. The
                                                diocese has 32 diocesan priests and 27 religious priests. Also there are
                                                different religious institutions of men and women. The diocese also is
                                                offering social activities such as health, education and livehood. </p>

                                            <p style="text-align: justify"></p>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ asset('site/img/bg-img/church.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            {{-- <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while
                                                    discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div> --}}
                                        </div>
                                    </div>



                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">
                        <div class="intro-news-filter d-flex justify-content-between"
                                            style="background-color:#1c2938; color:#ffff">
                                            <h6 style="color:#fff">Bishop</h6>

                                        </div>
                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mt-3 ml-3">
                            <a href="#" class=" justify-content-center">
                                <img src="{{ asset('site/img/bg-img/bishop.jpg') }}" alt="">
                            </a>
                            <h6 class="text-center mt-3" style="font-weight:600">Right Rev. Salutaris Melchior Libena
                            </h6>
                            <p>the Bishop of the Ifakara Cathedrol Diocese</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area mb-70" style="margin-top: -5%">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between"style="background-color:#1c2938; color:#ffff">
                            <h6 style="color:#fff">All News </h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab"
                                        href="#nav-1" role="tab" aria-controls="nav-1"
                                        aria-selected="true">Latest</a>


                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('site/img/bg-img/church_imag.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Lorem ipsum dolor sit, amet
                                                    consectsaepe eveniet .</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('site/img/bg-img/church_new.png') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Lorem ipsum dolor sit, amet
                                                    consectsaepe eveniet .</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('site/img/bg-img/church_new.png') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Lorem ipsum dolor sit, amet
                                                    consectsaepe eveniet .</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('site/img/bg-img/church_imag.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Lorem ipsum dolor sit, amet
                                                    consectsaepe eveniet odit provident iusto.</a>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">
                        <div class="intro-news-filter d-flex justify-content-between" style="background-color:#1c2938; color:#ffff">
                            <h6 style="color:#fff">Galley and Photos</h6>

                        </div>
                        <!-- Newsletter Widget -->


                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                            </a>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href="#">
                                            <img class="d-block w-100" src="{{ asset('site/img/bg-img/church.jpg') }}"
                                                alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="#">
                                            <img class="d-block w-100"
                                                src="{{ asset('site/img/bg-img/church.jpg') }}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="#">
                                            <img class="d-block w-100"
                                                src="{{ asset('site/img/bg-img/church.jpg') }}" alt="Third slide">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- ##### Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')
</body>

</html>
