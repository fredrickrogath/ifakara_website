<section class="elements-area section-padding-10-0" style="margin-top: 2%;">
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