@include('assets.css')

<body>

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
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="intro-news-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-md-12 col-sm-8 col-md-12">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail " style="width: 100%">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                    data-ride="carousel">

                                                    <div class="carousel-inner" style="margin-top: 80px;">
                                                        <div class="carousel-item active">

                                                            <img class="d-block w-100 h-50"
                                                                src="{{ asset('site/img/bg-img/cathedal_church.jpg') }}"
                                                                alt="First slide">
                                                            <div class="carousel-caption d-none d-md-block py-1"
                                                                style="background-color: rgb(170, 167, 167); opacity:0.8; ">
                                                                <h5 style="color:black; font-weight:700">Kanisa Kuu la Ifakara
                                                                     </h5>
                                                                <h6
                                                                    style="color:#0b0b0a; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                                    Ufununguzi la mafunzo ya walimu kuhusu kufundisha
                                                                    kwa
                                                                    kufata mutaala unaozingatia uamahili</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>


                                        </div>
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
    <section class="intro-news-area" style="margin-top:-4%;">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6
                            style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            Leadership Structure</h6>

                    </div>
                    <div class="intro-news-tab">

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                aria-labelledby="nav1">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="{{ asset('site/img/bg-img/bishop_img.jpg') }}"
                                                        alt=""
                                                        style="text-align:center">
                                                </a>
                                                <h6 class="text-center mt-3" style="font-weight:600; color:#000; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                    Right Rev. Salutaris
                                                    Melchior Libena
                                                </h6>
                                                <p class="text-center" style="color:#ff7b00; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">The Bishop of the
                                                    Ifakara Cathedrol Diocese</p>
                                            </div>

                                            <!-- Blog Content -->

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-8">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. Iusto asperiores neque vitae
                                                officiis distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus
                                                tempore unde, modi nam totam eius qui. Lorem ipsum dolor sit
                                                amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus
                                                fugit.</p>
                                            <p  style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">Lorem ipsum dolor sit
                                                amet consectetur adipisicing elit. Eius sunt voluptates nam in
                                                fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad
                                                sed beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->

                                    <!-- Single News Area -->
                                    <div class="col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="single-widget-area add-widget mt-3 ml-3">
                                                    <a href="#" class=" justify-content-center">
                                                        <img src="{{asset('site/img/bg-img/pr_marcus.jpg')}}" alt="">
                                                    </a>
                                                    <h6 class="text-center mt-3" style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">
                                                                    Pd. Marcus Abell Mirwato
                                                    </h6>
                                                    <p style="font-size:12px; color:#ff7b00;" class="text-center">Paroko</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="single-widget-area add-widget mt-3 ml-3">
                                                    <a href="#" class=" justify-content-center">
                                                        <img src="site/img/bg-img/p_1.jpg" alt="">
                                                    </a>
                                                    <h6 class="text-center mt-3"  style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">
                                                       Pd. Benny Jullio Mtema
                                                    </h6>
                                                    <p style="font-size:12px; color:#ff7b00;" class="text-center">Paroko</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="single-widget-area add-widget mt-3 ml-3">
                                                    <a href="#" class=" justify-content-center">
                                                        <img src="site/img/bg-img/p_2.jpg" alt="">
                                                    </a>
                                                    <h6 class="text-center mt-3"  style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">
                                                        Pd. Godfrey Hongo
                                                    </h6>
                                                    <p style="font-size:12px; color:#ff7b00;" class="text-center">Paroko</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="single-widget-area add-widget mt-3 ml-3">
                                                    <a href="#" class=" justify-content-center">
                                                        <img src="site/img/bg-img/p_3.jpg" alt="">
                                                    </a>
                                                    <h6 class="text-center mt-3"  style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">
                                                        Pd. Pius Rwegoshora
                                                    </h6>
                                                    <p style="font-size:12px; color:#ff7b00;" class="text-center">Paroko</p>
                                                </div>
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
                        <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6
                            style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            IFakara Catholic History</h6>

                    </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mt-3 ml-3">
                            <a href="#" class=" justify-content-center">
                                <img src="{{asset('site/img/bg-img/catholic_history.jpg')}}" alt="">
                            </a>
                            <h6 class="text-center mt-3" style="font-weight:600;color:#000000; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Historia ya Jimbo kuu la Ifakara
                            </h6>
                            <a href="#" class="text-center" style="text-align: center">Soma zaidi <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>

                    </div>


                    <div class="card">
                        <div class="p-1 d-flex justify-content-between" style="background-color:#1c2938; ">
                            <H5
                                class="text-center"style="font-weight:600;font-size:18px; color:#ffff; text-align:center">
                                Quick Links</H5>
                        </div>
                        <div class="card-body">
                            <span>
                                <a href="http://">Events and News</a>
                            </span>
                            <br>
                            <span><a href="http://">Schools</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area Start ##### -->
    @include('layouts.newsite')




    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')

</body>

</html>
