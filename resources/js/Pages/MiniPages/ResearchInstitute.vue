<template>
    <div>
        <div v-if="!componentsReady" class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
     </div>


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



    <!-- ##### Intro News Area End ##### -->
    <section class="intro-news-area  mb-70 mt-4">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="intro-news-tab mt-4">

                        <h4 style="color:rgb(3, 3, 3); font-size: medium;">RESEARCH INSTITUTE</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>

                                            <!-- Blog Content -->

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>

                                            <!-- Blog Content -->

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>

                                            <!-- Blog Content -->

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>

                                            <!-- Blog Content -->

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                   
                </div>
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-4" style="float: right;">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>


        </div>
    </section>


    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Text in a modal</h6>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                    <hr>
                    <h6>Overflowing text to show scroll behavior</h6>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- ##### Add Area End ##### -->


     <!-- ##### Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area" style="background-color: 	#F9F6EE">
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
                        <div class="footer-social-info" style="margin-top: -4%">

                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a>

                            <a href="#" data-toggle="tooltip" data-placement="top" title="instagram"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>

                        <p class="mb-15">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue
                            condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus
                            volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra
                            elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text">
                            <a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                {{ new Date().getFullYear() }} | Ifakara Catholic Diocese
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

    mounted() {
        // setInterval(() => {
            this.componentsReady = true;
        // }, 1000);
    },

    data(){
        return {
            componentsReady: false,
        }
    },

    }
</script>