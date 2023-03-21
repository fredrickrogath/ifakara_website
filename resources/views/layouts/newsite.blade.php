<section class="intro-news-area mb-70" style="margin-top: 5%">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-8">
                <div class="intro-news-tab">   

                       {{-- <div class="intro-news-filter d-flex justify-content-between" style="background-color:#ffff; color:#ffff; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6 style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Yote kwa ujumla</h6>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                <a class="nav-item nav-link active" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false" style="color:#000">Habari</a>
                                <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false" style="color:#000">Matukio</a>

                            </div>
                        </nav>
                    </div> --}}


                    <div class="tab-content" id="nav-tabContent">

                       
                        <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                            <div class="row">
                                @foreach ($news as $news)
                                <div class="col-12 col-sm-6">
                                    <div class="single-blog-post d-flex style-4 mb-30">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img
                                                    src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                                                    alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">{{ $news->news_date }}</span>
                                            <a href="{{url('single_news/'. $news->id)}}" class="post-title" style="white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden; max-height: 100px; font-size:14px;">{{ $news->initial_description }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="single-blog-post style-2 mb-5">
                                        <div class="blog-thumbnail">
                                            <a href="#"><img src="img/bg-img/27.jpg" alt=""></a>
                                        </div>

                                        <div class="blog-content">
                                            <span class="post-date">June 20, 2018</span>
                                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                            <a href="#" class="post-author mb-30">By Michael Smith</a>
                                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>
                                        </div>
                                    </div>
                                </div>
                                                 
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="intro-news-tab">

                    <!-- Intro News Filter -->
                    <div class="intro-news-filter d-flex justify-content-between"  style="background-color:#fff; color:#ffff;  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6  style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Yote kwa Ujumla</h6>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true" style="color:#000">Habari</a>
                                <a class="nav-item nav-link" id="nav5" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false" style="color:#000">Matukio</a>
                            </div>
                        </nav>
                    </div>

                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="{{asset('site/img/bg-img/n-1.jpeg')}}" alt=""></a>
                                                </div>
        
                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <p>Parokia ya Mtakatifu Yohane Mbatizaji V 60, Ibadan ya misa takatifu, somo ni kutoka mambo ya walawi, Ibada imeambatana na Watoto kushiliki kusoma Mistari ya biblia</p>
                                                    <a href="#" class="post-title">Soma zaidi</a>
                                                    <a href="#" class="post-author">By admin</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="{{asset('site/img/bg-img/n-2.jpeg')}}" alt=""></a>
                                                </div>
        
                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <a href="#" class="post-title">Ufunguzi wa misa</a>
                                                    <p>Paro Msaidizi wa parokia ya v 60 Padre Lyanga akifungua Misa</p>
                                                    <a href="#" class="post-title">Soma zaidi</a>
                                                    <a href="#" class="post-author">By Admin</a>
                                                </div>
                                            </div>
                                        </div>
        
                                        <!-- Single News Area -->
        
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="{{asset('site/img/bg-img/n-5.jpg')}}" alt=""></a>
                                                </div>
        
                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <a href="#" class="post-title">Walsha Kanisa Katoriki Jimbo la Ifakara</a>
                                                    <p>Mazungumzo ya Kitaaluma kuhusu Mtaala wa Elimu unaozungatia Ujuzi na Umahili. Mgeni Rasmi alikuwa na Baba Askofu Wa Jimbo Kuu la Ifakara. </p>
                                                    <a href="#" class="post-author">By Admin</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="{{asset('site/img/bg-img/n-4.jpg')}}" alt=""></a>
                                                </div>
        
                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <a href="#" class="post-title"> Mafunzo ya Mtaala Kitaaluma kwa walimu</a>
                                                    <p>Ufunguzi wa Mafunzo ya Mtaala Kitaaluma kwa walimu</p>
                                                    <a href="#" class="post-author">By admin</a>
                                                </div>
                                            </div>
                                        </div>
                                       
        
                                     
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="{{asset('site/img/bg-img/n-6.jpg')}}" alt=""></a>
                                                </div>
        
                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <a href="#" class="post-title">Mafunzo ya CBS</a>
                                                    <P>Mkufunzi akitoa mafunzo ya taaluma kwa walimu</P>
                                                    <a href="#" class="post-author">By admin</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="{{asset('site/img/bg-img/g-1.jpg')}}" alt=""></a>
                                                </div>
        
                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <a href="#" class="post-title">Mafunzo ya CBS</a>
                                                    <P>Baba Askofu akifungua mafunzo ya walimu kuhusu kufundisha kwa kufata mutaala unaozingatia uamahili</P>
                                                    <a href="#" class="post-author">By Admin</a>
                                                </div>
                                            </div>
                                        </div>
        
                                       <!-- Single News Area -->
        
                                        
        
                                     
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar gallery -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">
                    <div class="intro-news-filter d-flex justify-content-between" style="background-color:#fff; color:#ffff;  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                        <h6 style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Album ya picha</h6>

                    </div>
                    <!-- Newsletter Widget -->


                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                        <div class="card">
                            <div class="card-body">
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
        </div>
    </div>
</section>

