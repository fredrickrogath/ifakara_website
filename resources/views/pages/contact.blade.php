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


    <!-- ##### Intro News Area End ##### -->
    <section class="intro-news-area  mb-70 mt-4">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="intro-news-tab mt-4">


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7809.465404387681!2d36.6844169071766!3d-8.09093028189693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1857ad8fbf043b99%3A0xe48c35ce0a33d4cf!2sCatholic%20Diocese%20of%20Ifakara%20land!5e0!3m2!1sen!2stz!4v1676485455871!5m2!1sen!2stz"
                                            width="1070" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    </div>
                                    
                                </div>

                                <div class="row mt-3">

                                    <div class="col-lg-6 mt-5">
                                        <form>
                                            <H2 class="text-center"
                                                style="color:rgb(3, 3, 3); font-size: 30PX; font-weight:700; text-align:center">
                                                CONNECT WITH US</H2>

                                            <div class="mb-3">
                                                <label for="example-email" class="form-label">Email</label>
                                                <input type="email" id="example-email" name="example-email"
                                                    class="form-control" placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">subject</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-password" class="form-label">Comment</label>
                                                <textarea name="" id="" cols="30" class="form-control"rows="10"></textarea>

                                            </div>

                                            <button class="btn btn-block btn-primary">send here</button>



                                        </form>
                                    </div>
                               <div class="col-lg-6 mt-5">
                                <H4 class="text-center"
                                                style="color:rgb(3, 3, 3); font-size: 30PX; font-weight:700; text-align:center">
                                                Contact infomation</H4>

                                                <div class="text-center mt-5">
                                                    <div><span class="mt-2" style="font-size:25px"> <i class="fa fa-phone"></i> +255 7864 84734 </span></div>
                                                    <div><span class="mt-2" style="font-size:25px"><i class="fa fa-map-pin"></i>  Ifakara Morogoro , Tanzania</span></div>
                                                    <div><span class="mt-2" style="font-size:25px"> <i class="fa fa-envelope"></i> support@ifakaradiocese.com</span></div>
                                                    
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
    </section>



    <!-- ##### Add Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')



</body>

</html>
