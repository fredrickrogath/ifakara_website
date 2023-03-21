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
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <span><h4 style="font-weight:700; font-family:'Times New Roman', Times, serif;">{{ $news->news_title }} </h4><p style="text-align: end;">{{ $news->news_date }}</p></span>
                        <hr>
                        <h5 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">{{ $news->initial_description }}</h5>
                            <img
                            src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                            alt="" style="height: 300px; width: 100%; border-radius: 10px;">
                        <h5 style="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">{{ $news->news_description }}</h5>
                    </div>

                    <!-- Comment Area Start -->
                    
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                       

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4 style="font-weight:700; font-family:'Times New Roman', Times, serif;">Latest News</h4>

                            <!-- Single News Area -->
                            @foreach ($latest as $news)
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                        src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                                        alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">{{ $news->news_date }}</span>
                                    <a href="{{url('single_news/'. $news->id)}}" class="post-title" style="white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden; max-height: 80px; font-size:14px; font-family:Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;"
                                        >{{ $news->initial_description }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                       

                    </div>
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