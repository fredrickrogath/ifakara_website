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


    @include('layouts.slider')

    <!-- ##### Intro News Area End ##### -->
    <section class="intro-news-area  mb-70" style="margin-top: -6%">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6 style="color:#FF0000; font-weight:700"> Ifakara Catholic Diocese</h6>

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
                                    <div class="col-12 col-sm-8">
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
                                    <div class="col-12 col-sm-4">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('site/img/bg-img/ifakarachurch.jpg') }}"
                                                        alt="" style="height:250px; width:200px"></a>
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
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6 style="color:#FF0000; font-weight:700">BISHOP</h6>

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

    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row" style="margin-top:-10%">
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <p class="text-center"style="font-size:18px">We have a fun facts far far away, behind the word
                            mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="newsbox-cool-facts-area">
                        <div class="row mt-2">

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/idea.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">149</span></h2>
                                        <p>Members</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/list.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">2391</span></h2>
                                        <p>Parishies</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/id-card.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">245</span></h2>
                                        <p>Schools</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/diamond.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">128</span></h2>
                                        <p>Healths Centers</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6 style="color:#FF0000; font-weight:700">Our Offers</h6>

                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="icon mb-30">
                                    <img src="{{ asset('site/img/core-img/id-card2.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h5>Health Activities</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                        facilisis, volutpat nulla placerat, tincidunt mi.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></a>

                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="icon mb-30">
                                    <img src="{{ asset('site/img/core-img/file.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h5>Educations Studys</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                        facilisis, volutpat nulla placerat, tincidunt mi.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></a>

                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="icon mb-30">
                                    <img src="{{ asset('site/img/core-img/archive.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h5>Livehood Activities</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                        facilisis, volutpat nulla placerat, tincidunt mi.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6 style="color:#FF0000; font-weight:700">Sunday Qoutes</h6>

                    </div>
                </div>

                <div class="col-12">
                    <!-- Video Slides -->
                    <div class="video-slides owl-carousel">
                        <!-- Single News Area -->

                        <div class="single-blog-post style-3" style="background-color:#2c3e50;">
                            <!-- Blog Thumbnail -->
                            <div class="card-body">
                                <div class="blog-thumbnail" style="text-align: justify">

                                    <blockquote>
                                        <p style="color:#fff; font-weight:700; font-size:15px">&ldquo;For God so loved the world, that he gave his only begotten Son, that
                                            whosoever believeth in him should not perish, but have everlasting life.&rdquo;
                                        </p>
                                        <span style="color:#b21818; font-weight:700; font-size:18px">John 3:16</span>
                                    </blockquote>
                                    {{-- <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
                                </div>
                            </div>
                            
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post style-3" style="background-color:#2c3e50;">
                            <!-- Blog Thumbnail -->

                            <div class="card-body">
                                <div class="blog-thumbnail">
                                    <blockquote>
                                        <p style="color:#fff; font-weight:700; font-size:15px">&ldquo;The LORD [is] my strength and my shield; my heart trusted in him, and I am
                                            helped: therefore my heart greatly rejoiceth; and with my song will I praise
                                            him.&rdquo;</p>
                                        <span style="color:#b21818; font-weight:700; font-size:18px">Psalms 28:7</span>
                                    </blockquote>
                                </div>
    
                            </div>
                            
                            
                        </div>

                        <!-- Single News Area -->
                        <div
                            class="single-blog-post style-3"style="background-color:#2c3e50;">
                            <!-- Blog Thumbnail -->
                            <div class="card-body">
                                <div class="blog-thumbnail" >
                                    <blockquote>
                                        <p style="color:#fff; font-weight:700; font-size:15px">&ldquo;And we have known and believed the love that God hath to us. God is love;
                                            and he that dwelleth in love dwelleth in God, and God in him.&rdquo;</p>
                                        <span style="color:#b21818; font-weight:700; font-size:18px">1 John 4:16</span>
                                    </blockquote>
                                </div>
    
                            </div>
                            
                            
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post style-3" style="background-color:#2c3e50;">
                            <!-- Blog Thumbnail -->
                            <div class="card-body">
                                <div class="blog-thumbnail">
                                        <blockquote>
                                            <p style="color:#fff; font-weight:700; font-size:15px">&ldquo;The LORD [is] my strength and my shield; my heart trusted in him, and I am
                                            helped: therefore my heart greatly rejoiceth; and with my song will I praise
                                            him.&rdquo;</p>
                                        <span style="color:#b21818; font-weight:700; font-size:18px">Psalms 28:7</span>
                                    </blockquote>
                                </div>
    
                            </div>
                          
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### Intro News Area Start ##### -->
    @include('layouts.newsite')


    <!-- ##### Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')
</body>

</html>
