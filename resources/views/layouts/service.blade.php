<section class="elements-area section-padding-100-0" style="margin-top:-3%">
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
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($health_service as $health_service)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="">
                                        <div class="card-body">
                                            <div class="single-service-area mb-50">
                                                <div class="icon mb-30">
                                                    <img src="{{ asset('site/img/core-img/id-card2.png') }}"
                                                        alt="">
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
                                    </div>
                                </div>
                            @endforeach

                            <!-- Single Service Area -->
                            @foreach ($education_service as $education_service)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="">
                                        <div class="card-body">
                                            <div class="single-service-area mb-25">
                                                <div class="icon mb-30">
                                                    <img src="{{ asset('site/img/core-img/file.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">
                                                    <h5 style="font-weight:700">{{ $education_service->title }}
                                                    </h5>
                                                    <p
                                                        style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#000; font-size:17px; height: 180px;
                                                         white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden;">
                                                        {{ $education_service->initial_description }}</p>
                                                </div>
                                                <a href="#">Soma Zaidi <i class="fa fa-long-arrow-right"
                                                        aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                            <!-- Single Service Area -->
                            @foreach ($bible_service as $bible_service)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="">
                                        <div class="card-body">
                                            <div class="single-service-area mb-100">
                                                <div class="icon mb-30">
                                                    <img src="{{ asset('site/img/core-img/archive.png') }}"
                                                        alt="">
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
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</section>