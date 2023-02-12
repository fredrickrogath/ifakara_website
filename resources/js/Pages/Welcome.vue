<template>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
        <!-- <div class="preloader d-flex align-items-center justify-content-center">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> -->

        <!-- ##### Header Area Start ##### -->

        <header class="header-area" style="background-color: #f9f6ee">
            <!-- Navbar Area -->

            <div class="">
                <nav
                    class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light"
                    id="ftco-navbar"
                >
                    <div class="container">
                        <a class="navbar-brand" href="#">LOGO</a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#ftco-nav"
                            aria-controls="ftco-nav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="fa fa-bars"></span> Menu
                        </button>
                        <div class="collapse navbar-collapse" id="ftco-nav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <my-custom-link
                                        class="nav-link"
                                        :href="route('welcome')"
                                        :active="route().current('welcome')"
                                        >Home
                                    </my-custom-link>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <li class="nav-item">
                                    <my-custom-link
                                        class="nav-link"
                                        :href="route('catholic.diosece')"
                                        :active="route().current('catholic.diosece')"
                                        >Catholic Diocese
                                    </my-custom-link>
                                </li>
                                </li>
                                <li class="nav-item dropdown position-static">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="dropdown04"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >Schools</a
                                    >
                                    <div
                                        class="dropdown-menu p-4"
                                        aria-labelledby="dropdown04"
                                    >
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Augustine Kindergarten
                                                    & Primary School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Benedict Montessori
                                                    Nursery School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Benignis Girls Secondary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Benignis Kindergarten &
                                                    Primary School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Mary’s Catholic Nursery
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Theresa Nursery
                                                    school</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Mchombe Parish
                                                    Kindergarten</a
                                                >
                                            </div>
                                            <div
                                                class="col-md-3 d-none d-md-block"
                                            >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Raphael Secondary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Malecela Secondary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Francis Xavier Nursery
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Queen Mary Secondary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Alphonsa Pre and
                                                    Primary School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Martin Girls Secondary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Theresa Nursery
                                                    school</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Mchombe Parish
                                                    Kindergarten</a
                                                >
                                            </div>

                                            <div
                                                class="col-md-3 d-none d-md-block"
                                            >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Kindergarten of St. Teresa
                                                    of Child Jesus</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    Sole Secondary School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Compassion Secondary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Assumption Primary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Assumption Pre-Primary
                                                    School</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Devine Mercy Minor
                                                    Seminary</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Theresa Nursery
                                                    school</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Good news secondary
                                                    school</a
                                                >
                                            </div>

                                            <div
                                                class="col-md-3 d-none d-md-block"
                                            >
                                                <div
                                                    id="carouselExampleSlidesOnly"
                                                    class="carousel slide"
                                                    data-ride="carousel"
                                                >
                                                    <div class="carousel-inner">
                                                        <div
                                                            class="carousel-item active"
                                                        >
                                                            <a href="#">
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/school_1.jpg"
                                                                    alt="First slide"
                                                                />
                                                            </a>
                                                            <div
                                                                class="text mt-3"
                                                            >
                                                                <h3>
                                                                    <a href="#"
                                                                        >The
                                                                        Schools
                                                                        that
                                                                        provide
                                                                        Quality
                                                                        and
                                                                        Better
                                                                        Education</a
                                                                    >
                                                                </h3>
                                                                <span
                                                                    >Benignis</span
                                                                >
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <a href="#">
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/school_2.jpg"
                                                                    alt="Second slide"
                                                                />
                                                            </a>
                                                            <div
                                                                class="text mt-3"
                                                            >
                                                                <h3>
                                                                    <a href="#"
                                                                        >The
                                                                        Schools
                                                                        that
                                                                        provide
                                                                        Quality
                                                                        and
                                                                        Better
                                                                        Education</a
                                                                    >
                                                                </h3>
                                                                <span
                                                                    >Benignis</span
                                                                >
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <a href="#">
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/school_3.jpg"
                                                                    alt="Third slide"
                                                                />
                                                            </a>
                                                            <div
                                                                class="text mt-3"
                                                            >
                                                                <h3>
                                                                    <a href="#"
                                                                        >The
                                                                        Schools
                                                                        that
                                                                        provide
                                                                        Quality
                                                                        and
                                                                        Better
                                                                        Education</a
                                                                    >
                                                                </h3>
                                                                <span
                                                                    >Benignis</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown position-static">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="dropdown04"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >Health Institute</a
                                    >
                                    <div
                                        class="dropdown-menu p-4"
                                        aria-labelledby="dropdown04"
                                    >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    St. Francis Referral
                                                    Hospital</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Francis University
                                                    College of Health and Allied
                                                    Sciences (SFUCHAS)</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Edgar Maranta Ifakara
                                                    Collage</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Good Samaritan Cancer
                                                    Hospital
                                                </a>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Joseph Vocational
                                                    Training Centre</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Nazareth Leprosy
                                                    Hospital</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Kisawasawa Health Center</a
                                                >
                                            </div>
                                            <div
                                                class="col-md-4 d-none d-md-block"
                                            >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Kisawasawa Health Center</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >St. Judas Thaddeus Health
                                                    Center</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Mchombe Parish
                                                    Dispensary</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Taweta Parish Dispensary</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Merera Parish Dispensary</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Katurukila Dispensaryl</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    Good Samaritan Hospital
                                                </a>
                                            </div>

                                            <div
                                                class="col-md-4 d-none d-md-block"
                                            >
                                                <div
                                                    id="carouselExampleSlidesOnly"
                                                    class="carousel slide"
                                                    data-ride="carousel"
                                                >
                                                    <div class="carousel-inner">
                                                        <div
                                                            class="carousel-item active"
                                                        >
                                                            <a href="#">
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/school_1.jpg"
                                                                    alt="First slide"
                                                                />
                                                            </a>
                                                            <div
                                                                class="text mt-3"
                                                            >
                                                                <h3>
                                                                    <a href="#"
                                                                        >The
                                                                        Schools
                                                                        that
                                                                        provide
                                                                        Quality
                                                                        and
                                                                        Better
                                                                        Education</a
                                                                    >
                                                                </h3>
                                                                <span
                                                                    >Benignis</span
                                                                >
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <a href="#">
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/school_2.jpg"
                                                                    alt="Second slide"
                                                                />
                                                            </a>
                                                            <div
                                                                class="text mt-3"
                                                            >
                                                                <h3>
                                                                    <a href="#"
                                                                        >The
                                                                        Schools
                                                                        that
                                                                        provide
                                                                        Quality
                                                                        and
                                                                        Better
                                                                        Education</a
                                                                    >
                                                                </h3>
                                                                <span
                                                                    >Benignis</span
                                                                >
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <a href="#">
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/school_3.jpg"
                                                                    alt="Third slide"
                                                                />
                                                            </a>
                                                            <div
                                                                class="text mt-3"
                                                            >
                                                                <h3>
                                                                    <a href="#"
                                                                        >The
                                                                        Schools
                                                                        that
                                                                        provide
                                                                        Quality
                                                                        and
                                                                        Better
                                                                        Education</a
                                                                    >
                                                                </h3>
                                                                <span
                                                                    >Benignis</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <my-custom-link
                                        class="nav-link"
                                        :href="route('research.institute')"
                                        :active="
                                            route().current(
                                                'research.institute'
                                            )
                                        "
                                        >Research Institute
                                    </my-custom-link>
                                </li>

                                <li class="nav-item">
                                    <my-custom-link
                                        class="nav-link"
                                        :href="route('departiment')"
                                        :active="route().current('departiment')"
                                        >Departiments
                                    </my-custom-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- END nav -->
            </div>
        </header>
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
                                        <div
                                            class="col- md-8 col-sm-8 col-md-8"
                                        >
                                            <div
                                                class="single-blog-post style-2 mb-5"
                                            >
                                                <!-- Blog Thumbnail -->
                                                <div
                                                    class="blog-thumbnail"
                                                    style="width: 100%"
                                                >
                                                    <div
                                                        id="carouselExampleIndicators"
                                                        class="carousel slide"
                                                        data-ride="carousel"
                                                    >
                                                        <ol
                                                            class="carousel-indicators"
                                                        >
                                                            <li
                                                                data-target="#carouselExampleIndicators"
                                                                data-slide-to="0"
                                                                class="active"
                                                            ></li>
                                                            <li
                                                                data-target="#carouselExampleIndicators"
                                                                data-slide-to="1"
                                                            ></li>
                                                            <li
                                                                data-target="#carouselExampleIndicators"
                                                                data-slide-to="2"
                                                            ></li>
                                                        </ol>
                                                        <div
                                                            class="carousel-inner"
                                                        >
                                                            <div
                                                                class="carousel-item active"
                                                            >
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/church_1.jpg"
                                                                    alt="First slide"
                                                                />
                                                                <div
                                                                    class="carousel-caption d-none d-md-block"
                                                                >
                                                                    <h5>
                                                                        first
                                                                        image on
                                                                        the the
                                                                    </h5>
                                                                    <p>
                                                                        Lorem
                                                                        ipsum
                                                                        uptas
                                                                        deserucusandae!
                                                                        Adipisci,
                                                                        aut
                                                                        dolorum!
                                                                        Ullam..
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="carousel-item"
                                                            >
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/church_2.jpg"
                                                                    alt="Second slide"
                                                                />
                                                                <div
                                                                    class="carousel-caption d-none d-md-block"
                                                                >
                                                                    <h5>
                                                                        first
                                                                        image on
                                                                        the the
                                                                    </h5>
                                                                    <p>
                                                                        Lorem
                                                                        ipsum
                                                                        uptas
                                                                        deserucusandae!
                                                                        Adipisci,
                                                                        aut
                                                                        dolorum!
                                                                        Ullam..
                                                                    </p>
                                                                    <p>
                                                                        Lorem
                                                                        ipsum
                                                                        uptas
                                                                        deserucusandae!
                                                                        Adipisci,
                                                                        aut
                                                                        dolorum!
                                                                        Ullam..
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="carousel-item"
                                                            >
                                                                <img
                                                                    class="d-block w-100"
                                                                    src="site/img/bg-img/church_2.jpg"
                                                                    alt="Third slide"
                                                                />
                                                                <div
                                                                    class="carousel-caption d-none d-md-block"
                                                                >
                                                                    <h5>
                                                                        first
                                                                        image on
                                                                        the the
                                                                    </h5>
                                                                    <p>
                                                                        Lorem
                                                                        ipsum
                                                                        uptas
                                                                        deserucusandae!
                                                                        Adipisci,
                                                                        aut
                                                                        dolorum!
                                                                        Ullam..
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            class="carousel-control-prev"
                                                            href="#carouselExampleIndicators"
                                                            role="button"
                                                            data-slide="prev"
                                                        >
                                                            <span
                                                                class="carousel-control-prev-icon"
                                                                aria-hidden="true"
                                                            ></span>
                                                            <span
                                                                class="sr-only"
                                                                >Previous</span
                                                            >
                                                        </a>
                                                        <a
                                                            class="carousel-control-next"
                                                            href="#carouselExampleIndicators"
                                                            role="button"
                                                            data-slide="next"
                                                        >
                                                            <span
                                                                class="carousel-control-next-icon"
                                                                aria-hidden="true"
                                                            ></span>
                                                            <span
                                                                class="sr-only"
                                                                >Next</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div
                                                class="intro-news-filter d-flex justify-content-between"
                                                style="
                                                    background-color: #1c2938;
                                                    color: #ffff;
                                                "
                                            >
                                                <h6 style="color: #fff">
                                                    Ifakara Catholic Diocese
                                                </h6>
                                            </div>
                                            <p style="text-align: justify">
                                                The Ifakara Catholic Diocese
                                                ceded from Mahenge Diocese on
                                                14th January 2012. It was
                                                officially inaugurated on 19th
                                                March 2012. The first bishop is
                                                the Rit. Rev. Salutaris M.
                                                Libena. The Vicar General is
                                                Rev. Fr. Hospitio Itatilo, the
                                                Secretary General is Rev.
                                                Godfrey Hongo, the deputy
                                                secretary general is Rev. Fr.
                                                Edwin Lyanga and the treasury
                                                general is Rev. Sr. Patricia
                                                Mtunga. The Ifakara Catholic
                                                Diocese ceded from Mahenge
                                                Diocese on 14th January 2012.
                                            </p>

                                            <div
                                                class="bg-secondary justify-content-between p-2"
                                            >
                                                <h6>Diocese Almanac</h6>
                                            </div>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit.
                                                Nesciunt sit, rep
                                            </p>
                                            <p style="text-align: justify">
                                                <span
                                                    ><a href=""
                                                        ><i
                                                            class="fa fa-book"
                                                            aria-hidden="true"
                                                        ></i></a
                                                ></span>
                                                Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit.
                                                Tempore, minima veniam. Placeat.
                                            </p>
                                            <p style="text-align: justify">
                                                <span
                                                    ><a href=""
                                                        ><i
                                                            class="fa fa-book"
                                                            aria-hidden="true"
                                                        ></i></a
                                                ></span>
                                                Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit.
                                                Tempore, minima veniam. Placeat.
                                            </p>
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
        <section class="intro-news-area mb-70" style="margin-top: -6%">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Intro News Tabs Area -->
                    <div class="col-12 col-lg-8">
                        <div class="intro-news-tab">
                            <!-- Intro News Filter -->
                            <div
                                class="intro-news-filter d-flex justify-content-between text-center"
                                style="background-color: #1c2938; color: #ffff"
                            >
                                <h4 style="color: #fff; font-size: medium">
                                    ABOUT IFAKARA DIOCESE
                                </h4>
                            </div>

                            <div class="tab-content" id="nav-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="nav-1"
                                    role="tabpanel"
                                    aria-labelledby="nav1"
                                >
                                    <div class="row">
                                        <!-- Single News Area -->
                                        <div class="col-md-12 col-12">
                                            <p style="text-align: justify">
                                                The Ifakara Catholic Diocese
                                                ceded from Mahenge Diocese on
                                                14th January 2012. It was
                                                officially inaugurated on 19th
                                                March 2012. The first bishop is
                                                the Rit. Rev. Salutaris M.
                                                Libena. The Vicar General is
                                                Rev. Fr. Hospitio Itatilo, the
                                                Secretary General is Rev.
                                                Godfrey Hongo, the deputy
                                                secretary general is Rev. Fr.
                                                Edwin Lyanga and the treasury
                                                general is Rev. Sr. Patricia
                                                Mtunga. The diocese covers
                                                14,245 km2 of the whole part of
                                                Kilombero district.
                                            </p>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div
                                                class="single-blog-post style-2 mb-5"
                                            >
                                                <p style="text-align: justify">
                                                    Ifakara Catholic Diocese was
                                                    started with 19 parishes.
                                                    Now the diocese has 26
                                                    parishes and 01 elected
                                                    parish. The diocese has 32
                                                    diocesan priests and 27
                                                    religious priests. Also
                                                    there are different
                                                    religious institutions of
                                                    men and women. The diocese
                                                    also is offering social
                                                    activities such as health,
                                                    education and livehood.
                                                </p>

                                                <p
                                                    style="text-align: justify"
                                                ></p>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div
                                                class="single-blog-post style-2 mb-5"
                                            >
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"
                                                        ><img
                                                            src="site/img/bg-img/church.jpg"
                                                            alt=""
                                                    /></a>
                                                </div>

                                                <!-- Blog Content -->
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
                            <div
                                class="bg-secondary p-1 d-flex justify-content-between"
                                style="border-radius: 5px"
                            >
                                <h6
                                    class="text-white-50"
                                    style="color: #fff; font-weight: 600"
                                >
                                    BiShop
                                </h6>
                            </div>
                            <!-- Add Widget -->
                            <div
                                class="single-widget-area add-widget mt-3 ml-3"
                            >
                                <a href="#" class="justify-content-center">
                                    <img
                                        src="site/img/bg-img/bishop.jpg"
                                        alt=""
                                    />
                                </a>
                                <h6
                                    class="text-center mt-3"
                                    style="font-weight: 600"
                                >
                                    Right Rev. Salutaris Melchior Libena
                                </h6>
                                <p>
                                    the Bishop of the Ifakara Cathedrol Diocese
                                </p>
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
                            <div
                                class="intro-news-filter d-flex justify-content-between"
                            >
                                <h6>All News</h6>
                                <nav>
                                    <div
                                        class="nav nav-tabs"
                                        id="nav-tab"
                                        role="tablist"
                                    >
                                        <a
                                            class="nav-item nav-link active"
                                            id="nav1"
                                            data-toggle="tab"
                                            href="#nav-1"
                                            role="tab"
                                            aria-controls="nav-1"
                                            aria-selected="true"
                                            >Latest</a
                                        >
                                    </div>
                                </nav>
                            </div>

                            <div class="tab-content" id="nav-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="nav-1"
                                    role="tabpanel"
                                    aria-labelledby="nav1"
                                >
                                    <div class="row">
                                        <!-- Single News Area -->
                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div
                                                class="single-blog-post d-flex style-4 mb-30"
                                            >
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"
                                                        ><img
                                                            src="site/img/bg-img/church_imag.jpg"
                                                            alt=""
                                                    /></a>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <span class="post-date"
                                                        >June 20, 2018</span
                                                    >
                                                    <a
                                                        href="#"
                                                        class="post-title"
                                                        >Lorem ipsum dolor sit,
                                                        amet consectsaepe
                                                        eveniet .</a
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div
                                                class="single-blog-post d-flex style-4 mb-30"
                                            >
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"
                                                        ><img
                                                            src="site/img/bg-img/church_new.png"
                                                            alt=""
                                                    /></a>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <span class="post-date"
                                                        >June 20, 2018</span
                                                    >
                                                    <a
                                                        href="#"
                                                        class="post-title"
                                                        >Lorem ipsum dolor sit,
                                                        amet consectsaepe
                                                        eveniet .</a
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div
                                                class="single-blog-post d-flex style-4 mb-30"
                                            >
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"
                                                        ><img
                                                            src="site/img/bg-img/church_new.png"
                                                            alt=""
                                                    /></a>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <span class="post-date"
                                                        >June 20, 2018</span
                                                    >
                                                    <a
                                                        href="#"
                                                        class="post-title"
                                                        >Lorem ipsum dolor sit,
                                                        amet consectsaepe
                                                        eveniet .</a
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single News Area -->
                                        <div class="col-12 col-sm-6">
                                            <div
                                                class="single-blog-post d-flex style-4 mb-30"
                                            >
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"
                                                        ><img
                                                            src="site/img/bg-img/church_imag.jpg"
                                                            alt=""
                                                    /></a>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <span class="post-date"
                                                        >June 20, 2018</span
                                                    >
                                                    <a
                                                        href="#"
                                                        class="post-title"
                                                        >Lorem ipsum dolor sit,
                                                        amet consectsaepe
                                                        eveniet odit provident
                                                        iusto.</a
                                                    >
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
                            <div
                                class="intro-news-filter d-flex justify-content-between"
                            >
                                <h6>Up comming Events</h6>
                            </div>
                            <!-- Newsletter Widget -->

                            <!-- Add Widget -->
                            <div class="single-widget-area add-widget mb-30">
                                <a href="#"> </a>
                                <div
                                    id="carouselExampleSlidesOnly"
                                    class="carousel slide"
                                    data-ride="carousel"
                                >
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a href="#">
                                                <img
                                                    class="d-block w-100"
                                                    src="site/img/bg-img/church.jpg"
                                                    alt="First slide"
                                                />
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="#">
                                                <img
                                                    class="d-block w-100"
                                                    src="site/img/bg-img/church.jpg"
                                                    alt="Second slide"
                                                />
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="#">
                                                <img
                                                    class="d-block w-100"
                                                    src="site/img/bg-img/church.jpg"
                                                    alt="Third slide"
                                                />
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

        <div
            id="standard-modal"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="standard-modalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">
                            Modal Heading
                        </h4>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <h6>Text in a modal</h6>
                        <p>
                            Duis mollis, est non commodo luctus, nisi erat
                            porttitor ligula.
                        </p>
                        <hr />
                        <h6>Overflowing text to show scroll behavior</h6>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum.
                            Cras justo odio, dapibus ac facilisis in, egestas
                            eget quam. Morbi leo risus, porta ac consectetur ac,
                            vestibulum at eros.
                        </p>
                        <p>
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur et. Vivamus sagittis lacus vel augue
                            laoreet rutrum faucibus dolor auctor.
                        </p>
                        <p>
                            Aenean lacinia bibendum nulla sed consectetur.
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur et. Donec sed odio dui. Donec
                            ullamcorper nulla non metus auctor fringilla.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- ##### Add Area End ##### -->

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area" style="background-color: #f9f6ee">
            <!-- Footer Logo -->

            <!-- Footer Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content text-center mt-4">
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <ul>
                                    <li><a href="/drp/login">DRP</a></li>
                                    <li><a href="/fmcs/login">FMCS</a></li>
                                    <li><a href="/ses/login">SES</a></li>
                                    <li><a href="/ors/login">ORS</a></li>
                                </ul>
                            </div>
                            <!-- Social Info -->
                            <div
                                class="footer-social-info"
                                style="margin-top: -4%"
                            >
                                <a
                                    href="#"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="facebook"
                                    ><i
                                        class="fa fa-facebook"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                                <a
                                    href="#"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="twitter"
                                    ><i
                                        class="fa fa-twitter"
                                        aria-hidden="true"
                                    ></i
                                ></a>

                                <a
                                    href="#"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="instagram"
                                    ><i
                                        class="fa fa-instagram"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                            </div>

                            <p class="mb-15">
                                Nullam lacinia ex eleifend orci porttitor,
                                suscipit interdum augue condimentum. Etiam
                                pretium turpis eget nibh laoreet iaculis. Proin
                                ac urna at lectus volutpat lobortis. Vestibulum
                                venenatis iaculis diam vitae lobortis. Donec
                                tincidunt viverra elit, sed consectetur est pr
                                etium ac. Mauris nec mauris tellus.
                            </p>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text">
                                <a href="#">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    {{ new Date().getFullYear() }} | Ifakara
                                    Catholic Diocese
                                </a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ##### Footer Area Start ##### -->
    </div>
</template>

<script>
//end of inertiajs progress
import { InertiaProgress } from '@inertiajs/progress'
InertiaProgress.init({
  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 250,

  // The color of the progress bar.
  color: '#FBBF24',

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: true,
})
//end of inertiajs progress

import MyCustomLink from "@/Jetstream/MyCustomLink";

export default {
    components: {
        MyCustomLink,
    },
};
</script>
