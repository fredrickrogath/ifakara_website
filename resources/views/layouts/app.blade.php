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

    <!-- ##### Header Area Start ##### -->
    @include('layouts.header')
    <!-- ##### Header Area End ##### -->


    @include('layouts.slider')

    <!-- ##### Intro News Area End ##### -->
    @include('layouts.ifakara')

    @include('layouts.maubiri')
    <!-- ##### Intro News Area Start ##### -->
    @include('layouts.newsite')

   @include('layouts.service')

    @include('layouts.summary')
    <!-- ##### Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')
</body>

</html>
