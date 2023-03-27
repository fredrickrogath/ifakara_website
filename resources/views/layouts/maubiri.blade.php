<section class="intro-news-area mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-12">
                <div class="intro-news-tab">
                    <div class="card">
                        <div class="card-header">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Mistari wa siku</h6>

                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                            aria-labelledby="nav1">
                            <div class="card mt-3">
                                <div class="card-body"
                                    style="background-color:rgb(238, 226, 201); border-radius: 10px;">
                                    <div class="row justify-content-center">

                                        <div id="carouselExampleSlidesOnly" class="carousel slide"
                                            data-ride="carousel">

                                            <div class="carousel-inner">
                                                @foreach ($verses as $key => $verse)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                                                        <a href="#">
                                                            <blockquote>
                                                                <h4
                                                                    style="text-align: center; color:#662323; font-weight:200; font-size:17px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                                    {{ $verse->verse }}
                                                                </h4>
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
                    </div>
                </div>
            </div>
            <!--  documents-->
            {{-- <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">
                    <div class="card">
                        <div class="card-header">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Hati na taarifa za Jimbo </h6>
                        </div>
                    </div> --}}


                    <!-- Add Widget -->
                    {{-- <div class="single-widget-area add-widget mb-30">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p
                                    style="text-align: justify;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;color:#000;">
                                    <i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> Lorem ipsum
                                    dolor
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

                    </div> --}}

                {{-- </div>
            </div> --}}
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-sm-12">
                <div id="fh5co-sermon">
                    <div class="row animate-box justify-content-center mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6
                                        style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        Misa na Maubiri</h6>
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