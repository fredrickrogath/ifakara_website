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


    @include('layouts.header')


    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-lg-8">
                    <div class="contact-content mb-100">

                        <!-- Logo -->
                        <h4 style="font-weight:700">Contact us</h4>
                        <a href="#" class="d-block mb-50"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <img src="{{ asset('site/img/core-img/map-pin.png') }}" alt="">
                            </div>
                            <p>Ifakara , Morogoro Tanzania</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <img src="{{ asset('site/img/core-img/smartphone.png') }}" alt="">
                            </div>
                            <p>+255 345 7953 32453</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <img src="{{ asset('site/img/core-img/paper-plane.png') }}" alt="">
                            </div>
                            <p>support@ifakaracatholicdiocese.com</p>
                        </div>

                        <!-- Contact Social Info -->
                        <div class="contact-social-info mt-50 mb-70">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i
                                    class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i
                                    class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i
                                    class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-70">
                            <h4 class="mb-50">Get In Touch</h4>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn newsbox-btn w-100 bg-dark text-white" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- ##### Google Maps ##### -->
                        <div class="map-area mb-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7809.465404387681!2d36.6844169071766!3d-8.09093028189693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1857ad8fbf043b99%3A0xe48c35ce0a33d4cf!2sCatholic%20Diocese%20of%20Ifakara%20land!5e0!3m2!1sen!2stz!4v1676485455871!5m2!1sen!2stz"
                                width="1070" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-9 col-md-6 col-lg-4">

                    <!-- Newsletter Widget -->
                    <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Quick links</h4>
                        
                        <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue
                            condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                    </div>

                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                        <a href="#">
                            <img src="img/bg-img/add3.png" alt="">
                        </a>
                    </div>

                    <!-- Latest News Widget -->
                    <div class="single-widget-area news-widget mb-30">
                        <h4>Latest News</h4>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million
                                    stolen</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million
                                    stolen</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Dow falls 287 points as trade war fears
                                    escalate</a>
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

{{-- 
<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7809.465404387681!2d36.6844169071766!3d-8.09093028189693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1857ad8fbf043b99%3A0xe48c35ce0a33d4cf!2sCatholic%20Diocese%20of%20Ifakara%20land!5e0!3m2!1sen!2stz!4v1676485455871!5m2!1sen!2stz"
width="1070" height="450" style="border:0;" allowfullscreen=""
loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
