@include('assets.css')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('web/img/s-3.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h3 class="display-4 text-white mb-3 animated slideInDown">
                                        KUBARIKI MAFUTA
                                    </h3>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">

                                        Adhimisho la Misa Takatifu ya kubariki Mafuta ya Wakatukumeni</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown"
                                        href="{{ route('catholic_diocese') }}">
                                        Kuhusu sisi
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('web/img/s-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Mafunzo ya CBS</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Ufununguzi la mafunzo ya
                                        walimu kuhusu kufundisha kwa kufata mutaala unaozingatia uamahili</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown"
                                        href="{{ route('catholic_diocese') }}">
                                        kuhusu sisi
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start and Kuhusu sisi -->
    @include('layouts.ifakara')
    <!-- About End -->

    <!-- mstari wa biblia && mahubiri -->
    @include('layouts.maubiri')
    <!-- Causes End -->


    <!-- Service Start huduma zetu -->
    @include('layouts.service')
    <!-- Service End -->


    <!-- Mhutasari wa jimbo -->
    @include('layouts.summary')
    <!-- Donate End -->


    <!-- Matukio na Habari zetu -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Causes</div>
                <h1 class="display-6 mb-5">Habari na Matukio</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($news as $news)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>Education</small>
                                </div>
                                <h5 class="mb-3">Education For African Children</h5>
                                <p>{{ $news->initial_description }}</p>
                                <h6 class="text-danger">The posted at : {{ $news->news_date }}<span> by
                                        {{ $news->created_by }}</span></h6>

                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                                    alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="{{ url('single_news/' . $news->id) }}">
                                        Read More
                                        <div
                                            class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            {{-- <div class="row g-4 justify-content-center">
              
                @foreach ($events as $events)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Pure Water</small>
                            </div>
                            <h5 class="mb-3">{{ $events->events_title }}</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>

                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('admin/assets/images/events/' . $events->image) }}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div> --}}
        </div>
    </div>
    <!-- Causes End -->



    <!-- Footer Start -->
    @include('layouts.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('assets.js')
    <script>
        $(".counter").each(function() {
            var $this = $(this),
                countTo = $this.attr("data-countto");
            countDuration = parseInt($this.attr("data-duration"));
            $({
                counter: $this.text()
            }).animate({
                counter: countTo
            }, {
                duration: countDuration,
                easing: "linear",
                step: function() {
                    $this.text(Math.floor(this.counter));
                },
                complete: function() {
                    $this.text(this.counter);
                }
            });
        });
    </script>
</body>

</html>
