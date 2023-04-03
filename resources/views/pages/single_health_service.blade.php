@include('assets.css')
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    @include('layouts.header')


    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <div class="card">
                            <div class="card-header"  style="text-align:center;color:#ff7b00; font-weight:700; font-family:'Times New Roman', Times, serif;">
                                {{ $health_service->title }} 
                            </div>
                            <div class="card-body">
                                <p style="text-align:justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:black">{{ $health_service->description }}</p>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Comment Area Start -->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

   
    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')
</body>

</html>