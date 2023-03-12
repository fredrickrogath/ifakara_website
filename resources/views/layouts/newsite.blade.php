<section class="intro-news-area mb-70" style="margin-top: 5%">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-8">
                <div class="intro-news-tab">   
                    <!-- Intro News Filter -->
                    <div class="intro-news-filter d-flex justify-content-between"style="background-color:#ffff; color:#ffff; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6 s style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">All News </h6>
                        <nav style="background-color: #000">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav1" data-toggle="tab"
                                    href="#nav-1" role="tab" aria-controls="nav-1"
                                    aria-selected="true" style="color:#000">Latest</a>


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
                                                    src="{{ asset('site/img/bg-img/bg-3.jpg') }}"
                                                    alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">Dec 10, 2022</span>
                                            <a href="{{route('single_news')}}" class="post-title" style="font-size:14px;"> Ufununguzi la mafunzo ya walimu kuhusu kufundisha kwa
                                                kufata mutaala unaozingatia uamahili</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single News Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-blog-post d-flex style-4 mb-30"> 
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img
                                                    src="{{ asset('site/img/bg-img/n-1.jpeg') }}"
                                                    alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">June 20, 2018</span>
                                            <a href="#" class="post-title" style="font-size:14px;">Parokia ya Mtakatifu Yohane Mbatizaji V 60, Ibadan ya misa takatifu, somo ni kutoka Mambo ya Walawi.</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single News Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-blog-post d-flex style-4 mb-30">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img
                                                    src="{{ asset('site/img/bg-img/n-2.jpeg') }}"
                                                    alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">Feb 2, 2023</span>
                                            <a href="#" class="post-title" style="font-size:14px;">Parokia ya Mtakatifu Yohane Mbatizaji V 60, Ibadan ya misa takatifu, somo ni kutoka Mambo ya Walawi.</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single News Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-blog-post d-flex style-4 mb-30">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img
                                                    src="{{ asset('site/img/bg-img/new_1.JPG') }}"
                                                    alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">March 02, 2023</span>
                                            <a href="#" class="post-title" style="font-size:14px;">Mazungumzo ya Kitaaluma kuhusu Mtaala wa Elimu unaozungatia Ujuzi na Umahili. 
                                                                         Mtoa Mada : Dr Eliya Kibga.
                                                </a>
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
                    <div class="intro-news-filter d-flex justify-content-between" style="background-color:#fff; color:#ffff;  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6 style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Galley and Photos</h6>

                    </div>
                    <!-- Newsletter Widget -->


                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" >
                                @foreach ($gallery_photo as $key => $gallery_photo)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <a href="#">
                                        <img class="d-block w-100" src="{{ asset('admin/assets/images/gallery/' . $gallery_photo->media) }}"
                                            alt="First slide" style="height: 260px;">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

