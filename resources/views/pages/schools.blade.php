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

    <!-- ##### Header Area Start ##### -->
    @include('layouts.header')
    <!-- ##### Header Area End ##### -->
    <!-- ##### Header Area End ##### -->


    <!-- ##### Intro News Area End ##### -->
    <section class="intro-news-area  mb-70 mt-4">
        <div class="container">
            <div class="row justify-content-center mt-4">

                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12">
                    <!-- ##### Accordians ##### -->
                    <div class="col-12 col-lg-12">
                        <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- single accordian area -->
                            <div class="panel single-accordion">
                                <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                        data-toggle="collapse" data-parent="#accordion" href="#collapseOne">St.
                                        Augustine Kindergarten & Primary
                                        School
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                <div id="collapseOne" class="accordion-content collapse show">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="collapsed" aria-expanded="true"
                                            aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapseTwo">Pellentesque
                                            sit amet velit a libero viverra porta non eu justo
                                            <span class="accor-open"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-content collapse">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor
                                            eu
                                            quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus.
                                            Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum
                                            at
                                            ipsum ac, dignissim iaculis ante.</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6><a role="button" class="" aria-expanded="true" aria-controls="collapsethree"
                                        data-toggle="collapse" data-parent="#accordion" href="#collapseOne">St.
                                        Augustine Kindergarten & Primary
                                        School
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                <div id="collapsethree" class="accordion-content collapse show">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
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

                        
                        <div class="intro-news-tab mt-4">

                            <h4 style="color:rgb(3, 3, 3); font-size: medium;">DEPARTIMENTS</h4>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-3">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#" class=" justify-content-center">
                                                        <img src="site/img/bg-img/bishop.jpg" alt=""
                                                            style="width: 60%">
                                                    </a>
                                                    <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch

                                                    </h6>
                                                </div>

                                                <!-- Blog Content -->

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="single-blog-post style-2 mb-5">
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                    distinctio a
                                                    adipisci, amet similique sit fuga ratione possimus temporibus
                                                    tempore
                                                    unde, modi nam totam eius qui. Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                    praesentium veritatis eveniet, commodi hic maiores molestias
                                                    repellendus, natus facere quisquam repellat modi autem delectus
                                                    fugit.
                                                </p>
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet
                                                    consectetur adipisicing elit. Eius sunt voluptates nam in fuga
                                                    repellat
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
                                                        <img src="site/img/bg-img/bishop.jpg" alt=""
                                                            style="width: 60%">
                                                    </a>
                                                    <h6 class="mt-3" style="font-weight:600; color: black;">ICT

                                                    </h6>
                                                </div>

                                                <!-- Blog Content -->

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="single-blog-post style-2 mb-5">
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                    distinctio a
                                                    adipisci, amet similique sit fuga ratione possimus temporibus
                                                    tempore
                                                    unde, modi nam totam eius qui. Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                    praesentium veritatis eveniet, commodi hic maiores molestias
                                                    repellendus, natus facere quisquam repellat modi autem delectus
                                                    fugit.
                                                </p>
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet
                                                    consectetur adipisicing elit. Eius sunt voluptates nam in fuga
                                                    repellat
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
                                                        <img src="site/img/bg-img/bishop.jpg" alt=""
                                                            style="width: 60%">
                                                    </a>
                                                    <h6 class="mt-3" style="font-weight:600; color: black;">MEDICINE

                                                    </h6>
                                                </div>

                                                <!-- Blog Content -->

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="single-blog-post style-2 mb-5">
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                    distinctio a
                                                    adipisci, amet similique sit fuga ratione possimus temporibus
                                                    tempore
                                                    unde, modi nam totam eius qui. Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                    praesentium veritatis eveniet, commodi hic maiores molestias
                                                    repellendus, natus facere quisquam repellat modi autem delectus
                                                    fugit.
                                                </p>
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet
                                                    consectetur adipisicing elit. Eius sunt voluptates nam in fuga
                                                    repellat
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
                                                        <img src="site/img/bg-img/bishop.jpg" alt=""
                                                            style="width: 60%">
                                                    </a>
                                                    <h6 class="mt-3" style="font-weight:600; color: black;">PARISH

                                                    </h6>
                                                </div>

                                                <!-- Blog Content -->

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="single-blog-post style-2 mb-5">
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                    distinctio a
                                                    adipisci, amet similique sit fuga ratione possimus temporibus
                                                    tempore
                                                    unde, modi nam totam eius qui. Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                    praesentium veritatis eveniet, commodi hic maiores molestias
                                                    repellendus, natus facere quisquam repellat modi autem delectus
                                                    fugit.
                                                </p>
                                                <p style="text-align: justify; color: black;">Lorem ipsum dolor sit
                                                    amet
                                                    consectetur adipisicing elit. Eius sunt voluptates nam in fuga
                                                    repellat
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


    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')



</body>

</html>
