
    <!-- mstari wa biblia -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Shuhuda</div>
                <h1 class="display-6 mb-5">Mstari wa Moyo Siku </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($verses as $key => $verse)
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                            src="{{ asset('web/img/bible.png') }}" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p> {{ $verse->verse }}</p>
                            <h5 class="mb-1">{{ $verse->servant }}</h5>
                            {{-- <span class="fst-italic">Profession</span> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- misa na mahubili ya kila jimapili -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Misa </div>
                <h1 class="display-6 mb-5">Misa na Mahubli</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($sermons as $sermons)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>{{ $sermons->sermons_title }}</small>
                                </div>
                                <h5 class="mb-3">{{ $sermons->name }}</h5>
                                {{-- <p>{{ $sermons->name }}</p> --}}

                            </div>
                            <div class="position-relative mt-auto">
                                <video class="img-fluid"
                                    src="{{ asset('admin/assets/video/sermons/' . $sermons->video) }}" alt=""
                                    style="border-radius: 10px" height="240" width="440"></video>
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter"
                                        href="{{ asset('admin/assets/video/sermons/' . $sermons->video) }}">
                                        Angalia zaidi
                                        <div
                                            class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>

                                    </a>


                                </div>
                            </div>
                            <!-- Button trigger modal -->

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Causes End -->