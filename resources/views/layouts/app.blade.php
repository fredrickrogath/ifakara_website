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
    <section class="intro-news-area  mb-50" style="margin-top: -6%">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-9">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Ifakara Catholic Diocese</h6>

                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-md-12 col-12">
                                        <p
                                            style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:18px; color:#000">
                                            The Ifakara Catholic Diocese ceded from Mahenge
                                            Diocese on 14th January 2012. It was officially inaugurated on 19th March
                                            2012. The first bishop is the Rit. Rev. Salutaris M. Libena. The Vicar
                                            General is Rev. Fr. Hospitio Itatilo, the Secretary General is Rev. Godfrey
                                            Hongo, the deputy secretary general is Rev. Fr. Edwin Lyanga and the
                                            treasury general is Rev. Sr. Patricia Mtunga. The diocese covers 14,245 km2
                                            of the whole part of Kilombero district. </p>

                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p
                                                style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">
                                                Ifakara Catholic Diocese was started with 19
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
                                                        src="{{ asset('site/img/bg-img/chrch_bg_2.jpg') }}"
                                                        alt=""
                                                        style="height:200px; width:250px; border-radius: 5px;"></a>
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
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="sidebar-area">
                        <div class="intro-news-filter d-flex justify-content-between"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6
                                style="color:#ff7b00;font-weight:700; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                BISHOP</h6>

                        </div>
                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mt-3 ml-3">
                            <a href="#" class=" justify-content-center">
                                <img src="{{ asset('site/img/bg-img/bishop_img.jpg') }}" alt=""
                                    style="border-radius: 5px; margin-left:2px height: 290px; text-align:center">
                            </a>
                            <h6 class="text-center mt-3"
                                style="font-weight:600; color:#000; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Right Rev. Salutaris Melchior Libena
                            </h6>
                            <p
                                style="color:#ff7b00; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                The Bishop of Roman Catholic Diocese of Ifakara </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center" style="margin-top:-5%">
                <div class="col-12 col-md-12 col-sm-12">
                    <div id="fh5co-sermon">
                        <div class="row animate-box">
                            {{-- <div class="col-md-12 col-md-offset-3 text-center fh5co-heading">
                                <h5 style="font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Message from GOD</h5>
                            </div> --}}
                            <div class="col-12">
                                <div class="intro-news-filter d-flex justify-content-between"
                                    style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                                    <h6
                                        style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        Our Sermons</h6>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center animate-box">
                                <div class="sermon-entry">
                                    <div class="sermon">
                                        <video src="{{ asset('site/img/bg-img/n-1.jpeg') }}" style="border-radius: 10px"
                                            height="240" width="340" controls></video>
                                        <div class="play" style="background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);">
                                            <a class="popup-vimeo"
                                                href="https://vimeo.com/channels/staffpicks/93951774"><i
                                                    class="icon-play3"></i></a>
                                        </div>
                                    </div>
                                    <h3
                                        style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        Soul Winning</h3>
                                    <span>Pstr. John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="sermon-entry">
                                    <div class="sermon">
                                        {{-- <img src="{{ asset('site/img/bg-img/n-1.jpeg') }}" alt="" style="border-radius: 10px"> --}}
                                        <video src="{{ asset('site/img/bg-img/n-1.jpeg') }}" style="border-radius: 10px"
                                            height="240" width="340" controls></video>
                                        <div class="play">
                                            <a class="popup-vimeo"
                                                href="https://vimeo.com/channels/staffpicks/93951774"><i
                                                    class="icon-play3"></i></a>
                                        </div>
                                    </div>
                                    <h3
                                        style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        Message From God</h3>
                                    <span>Pstr. John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="sermon-entry">
                                    <div class="sermon">
                                        <video src="{{ asset('site/img/bg-img/n-1.jpeg') }}" style="border-radius: 10px"
                                            height="240" width="340" controls></video>
                                        <div class="play">
                                            <a class="popup-vimeo"
                                                href="https://vimeo.com/channels/staffpicks/93951774"><i
                                                    class="icon-play3"></i></a>
                                        </div>
                                    </div>
                                    <h3
                                        style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        Our World Today</h3>
                                    <span>Pstr. John Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <section class="elements-area section-padding-100-0" style="margin-top:-2%">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6
                            style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            Our Service</h6>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="icon mb-30">
                            <img src="{{ asset('site/img/core-img/id-card2.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h5 style="font-weight:700">Health Activities</h5>
                            <p style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                facilisis, volutpat nulla placerat, tincidunt mi.</p>
                        </div>
                        <a href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="icon mb-30">
                            <img src="{{ asset('site/img/core-img/file.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h5 style="font-weight:700">Educations Studys</h5>
                            <p style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                facilisis, volutpat nulla placerat, tincidunt mi.</p>
                        </div>
                        <a href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="icon mb-30">
                            <img src="{{ asset('site/img/core-img/archive.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h5 style="font-weight:700">Livehood Activities</h5>
                            <p style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                facilisis, volutpat nulla placerat, tincidunt mi.</p>
                        </div>
                        <a href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>






                <div class="row">
                    <div class="col-12 col-md-7 col-sm-8">

                        <div class="intro-news-filter d-flex justify-content-between"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Verse of the day</h6>

                        </div>
                        <div class="single-blog-post style-3"
                            style="background-color:rgb(237, 186, 86);; border-radius: 20px;">
                            <!-- Blog Thumbnail -->

                            <div class="card-body">
                                <!-- Add Widget -->
                                <div class="single-widget-area add-widget mb-30">
                                    <a href="#">
                                    </a>
                                    
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        
                                        <div class="carousel-inner">
                                            @foreach ($verses as $key => $verse)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                
                                                <a href="#">
                                                    <blockquote>
                                                        <p
                                                            style="color:#fff; font-weight:700; font-size:15px; padding: 10px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                            {{ $verse->verse }}
                                                        </p>
                                                        <h4
                                                            style="color:#b21818; font-weight:700; font-size:18px; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                            {{ $verse->servant }}</h4>
                                                    </blockquote>
                                                </a>
                                                
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="blog-thumbnail" style="text-align: justify">



                                    {{-- <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
                                </div>
                            </div>

                        </div>
                        {{-- </div> --}}
                    </div>
                    <div class="col-md-5 col-sm-4">


                        <div class="intro-news-filter d-flex justify-content-between"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Diocese Documents </h6>

                        </div>
                        <p
                            style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                            <i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> Lorem ipsum dolor sit amet
                            consectetur,
                            adipisicing elit. Nesciunt sit,
                            rep
                        </p>
                        <p
                            style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                            <span><a href=""><i class="fa fa-book text-danger"
                                        aria-hidden="true"></i></a></span>
                            Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Tempore, minima veniam. Placeat.</p>

                        <p
                            style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                            <span style="font-size: 25px"><a href=""><i class="fa fa-file-pdf-o text-danger"
                                        aria-hidden="true"></i>
                                </a></span> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Tempore, minima veniam. Placeat.</p>
                    </div>
                </div>
            </div>



        </div>

    </section>


    <!-- ##### Intro News Area Start ##### -->
    @include('layouts.newsite')

    <section class="elements-area section-padding-10-0" style="margin-top:-3%;">
        <div class="container">
            <div class="row"s>
                <div class="col-12">
                    <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6
                            style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            Diocese Summary</h6>

                    </div>
                </div>

                <div class="col-12">
                    <div class="newsbox-cool-facts-area">
                        <div class="row mt-1">

                            @foreach ($member as $member)
                                <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-10">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/idea.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">{{ $member->amount }}</span></h2>
                                        <p style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{ $member->name }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            @foreach ($parish as $parish)
                                 <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-10">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/list.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">{{$parish->amount}}</span></h2>
                                        <p style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$parish->name}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @foreach ($school as $school)
                                <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-10">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/id-card.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">{{$school->amount}}</span></h2>
                                        <p style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$school->name}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @foreach ($health as $health)
                                <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-10">
                                    <div class="scf-icon">
                                        <img src="{{ asset('site/img/core-img/diamond.png') }}" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">{{$health->amount}}</span></h2>
                                        <p style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$health->name}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

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
