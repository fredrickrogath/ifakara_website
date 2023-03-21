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
                                Jimbo Kuu la Ifakara</h6>

                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-md-12 col-12">
                                        <p
                                            style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:18px; color:#000">
                                            Jimbo Katoliki Ifakara lilitengwa kutoka jimbo katoliki Mahenge tarehe 14
                                            Januari 2012. Liliwekwa rasmi tarehe 19 Machi 2012. Askofu wa kwanza ni
                                            Mhashamu Salutaris M. Libena. Naibu wa Askofu ni Padre Hospitio Itatiro,
                                            Katibu Mkuu ni Padre Godfrey Hongo,
                                            Naibu Katibu Mkuu ni Padre Edwin Lyanga na Mtunza Hazina ni Sr. Patricia
                                            Mtunga.
                                            Jimbo lina ukubwa wa eneo la kitume ni kilomita za mraba 14,245 ya wilaya
                                            yote ya Kilombero. </p>

                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <div class="single-blog-post style-2">
                                            <p
                                                style="text-align: justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size:18px; color:#000">
                                                Jimbo Katoliki Ifakara ilianzishwa na parokia 19. Sasa jimbo ina parokia
                                                26 na parokia moja iliyochaguliwa.
                                                Dayosisi ina mapadre 32 wa dayosisi na mapadre 27 wa mashirika ya
                                                kitawa. Vilevile kuna taasisi mbalimbali za kitawa za
                                                wanaume na wanawake. Jimbo pia inatoa shughuli za kijamii kama afya,
                                                elimu, na maisha ya kipato.
                                            </p>

                                            <p style="text-align: justify"></p>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-4">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img id="imageOne"
                                                        src="{{ asset('site/img/bg-img/chrch_bg_2.jpg') }}"
                                                        alt="" style="height:200px; border-radius: 5px;"></a>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="">
                        <div class="intro-news-filter d-flex justify-content-between my-0"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                            <h6
                                style="color:#ff7b00;font-weight:700; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                BISHOP</h6>

                        </div>
                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mt-3 ml-3">
                            <a href="#" class=" justify-content-center">
                                <img src="{{ asset('site/img/bg-img/bishop_img.jpg') }}" alt=""
                                    style="border-radius: 5px; margin-left:2px; width: 100%; text-align:center">
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6
                                            style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                            Misa na Maabiri</h6>
                                    </div>
                                </div>
                                {{-- <div class="intro-news-filter d-flex justify-content-between"
                                    style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                                

                                </div> --}}
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($sermons as $sermons)
                                        <div class="col-md-4 text-center animate-box">
                                            <div class="sermon-entry">
                                                <div class="sermon">
                                                    <video
                                                        src="{{ asset('admin/assets/video/sermons/' . $sermons->video) }}"
                                                        style="border-radius: 10px" height="240" width="340"
                                                        controls></video>
                                                    <div class="play"
                                                        style="background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);">
                                                        <a class="popup-vimeo"
                                                            href="{{ asset('admin/assets/video/sermons/' . $sermons->video) }}"><i
                                                                class="icon-play3">Full Screen</i></a>
                                                    </div>
                                                </div>
                                                <h3
                                                    style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                    {{ $sermons->sermons_title }}</h3>
                                                <span>{{ $sermons->name }}</span>
                                            </div>
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
    <section class="elements-area section-padding-100-0" style="margin-top:-2%">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card-header">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Huduma zetu</h6>
                        </div>
                    </div>
                    {{-- <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                       

                    </div> --}}
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="card-body">
                            @foreach ($health_service as $health_service)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service-area mb-100">
                                        <div class="icon mb-30">
                                            <img src="{{ asset('site/img/core-img/id-card2.png') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 style="font-weight:700">{{ $health_service->title }}</h5>
                                            <p
                                                style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px; height: 180px;
                    white-space:initial; text-overflow:ellipsis; max-width: 100%; overflow:hidden;">
                                                {{ $health_service->initial_description }}</p>
                                        </div>
                                        <a href="#">Soma Zaidi<i class="fa fa-long-arrow-right"
                                                aria-hidden="true"></i></a>

                                    </div>
                                </div>
                            @endforeach

                            <!-- Single Service Area -->
                            @foreach ($education_service as $education_service)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service-area mb-100">
                                        <div class="icon mb-30">
                                            <img src="{{ asset('site/img/core-img/file.png') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 style="font-weight:700">{{ $education_service->title }}</h5>
                                            <p
                                                style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px; height: 180px;
                    white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden;">
                                                {{ $education_service->initial_description }}</p>
                                        </div>
                                        <a href="#">Soma Zaidi <i class="fa fa-long-arrow-right"
                                                aria-hidden="true"></i></a>

                                    </div>
                                </div>
                            @endforeach

                            <!-- Single Service Area -->
                            @foreach ($bible_service as $bible_service)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service-area mb-100">
                                        <div class="icon mb-30">
                                            <img src="{{ asset('site/img/core-img/archive.png') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 style="font-weight:700">{{ $bible_service->title }}</h5>
                                            <p
                                                style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px; height: 180px;
                    white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden;">
                                                {{ $bible_service->initial_description }}</p>
                                        </div>
                                        <a href="#">Soma Zaidi <i class="fa fa-long-arrow-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-md-8 col-sm-8">
                        <div class="card">
                            <div class="card-header">
                                <h6
                                    style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    Mistari wa siku</h6>
                            </div>
                        </div>
                        <div class="single-blog-post style-3"
                            style="background-color:rgb(230, 197, 131);; border-radius: 20px; height: 250px; width: 650px;">
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
                                                            style="color:#662323; font-weight:200; font-size:17px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                            {{ $verse->verse }}
                                                        </p>
                                                        <h4
                                                            style="color:#662323; font-weight:700; font-size:18px; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                            {{ $verse->servant }}</h4>
                                                    </blockquote>
                                                </a>
                                                
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h6
                                    style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    Hati na taarifa za Jimbo </h6>
                            </div>
                        </div>
                        {{-- <div class="intro-news-filter d-flex justify-content-between"
                            style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                           

                        </div> --}}
                        <div class="card mt-2 d-flex justify-content-between">
                            <div class="card-body">
                                <p
                                    style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                                    <i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> Lorem ipsum dolor
                                    sit amet
                                    consectetur,
                                    adipisicing elit. Nesciunt sit,
                                    rep
                                </p>
                                <p
                                    style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                                    <span><a href=""><i class="fa fa-book text-danger"
                                                aria-hidden="true"></i></a></span>
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Tempore, minima veniam. Placeat.
                                </p>

                                <p
                                    style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                                    <span style="font-size: 25px"><a href=""><i
                                                class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i>
                                        </a>
                                    </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, minima
                                    veniam. Placeat.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>

    </section>


    <!-- ##### Intro News Area Start ##### -->
    @include('layouts.newsite')

    <section class="elements-area section-padding-10-0" style="margin-top:-3%;">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Muhtasari wa Jimbo</h6>
                        </div>
                    </div>
                    {{-- <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#FFF; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                     

                    </div> --}}
                </div>

                <div class="col-12 mt-3">
                    <div class="newsbox-cool-facts-area">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-1">

                                    @foreach ($member as $member)
                                        <!-- Single Cool Facts -->
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="single-cool-fact mb-10">
                                                <div class="scf-icon">
                                                    <img src="{{ asset('site/img/core-img/idea.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="scf-text">
                                                    <h2><span class="counter">{{ $member->amount }}</span></h2>
                                                    <p
                                                        style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                        {{ $member->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach ($parish as $parish)
                                        <!-- Single Cool Facts -->
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="single-cool-fact mb-10">
                                                <div class="scf-icon">
                                                    <img src="{{ asset('site/img/core-img/list.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="scf-text">
                                                    <h2><span class="counter">{{ $parish->amount }}</span></h2>
                                                    <p
                                                        style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                        {{ $parish->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach ($school as $school)
                                        <!-- Single Cool Facts -->
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="single-cool-fact mb-10">
                                                <div class="scf-icon">
                                                    <img src="{{ asset('site/img/core-img/id-card.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="scf-text">
                                                    <h2><span class="counter">{{ $school->amount }}</span></h2>
                                                    <p
                                                        style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                        {{ $school->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach ($health as $health)
                                        <!-- Single Cool Facts -->
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="single-cool-fact mb-10">
                                                <div class="scf-icon">
                                                    <img src="{{ asset('site/img/core-img/diamond.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="scf-text">
                                                    <h2><span class="counter">{{ $health->amount }}</span></h2>
                                                    <p
                                                        style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                        {{ $health->name }}</p>
                                                </div>
                                            </div>
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


    <!-- ##### Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')
</body>

</html>
