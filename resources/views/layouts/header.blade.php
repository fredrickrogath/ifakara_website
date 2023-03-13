<header class="header-area" style="background-color: 	#F9F6EE">
    <!-- Navbar Area -->
  

    <div class="fixed-nav-bar" style="position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 70px; background-color:#F9F6EE">
        {{-- <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color:#F9F6EE">
            <div class="container" style="background-color:#F9F6EE">
                <a class="navbar-brand" href="#" style="color:black">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link" style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Home</a></li>
                        <li class="nav-item"><a href="{{route('catholic_diocese')}}" class="nav-link"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Catholic Diocese</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('schools')}}"   style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Schools</a></li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('healths')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Health
                                Institute</a>
                           
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link" href="{{route('research_institute')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Research Institute</a>
                           
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link" href="{{route('departiment')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Departiments</a>
                            
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link" href="{{route('contact')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Contact us</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav> --}}

        <nav class="navbar navbar-expand-lg navbar-light ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color:#F9F6EE">
            <div class="container">
            <a class="navbar-brand" href="#" style="color:rgb(255, 170, 0)">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <a class="navbar-brand" href="#" style="color:rgb(255, 170, 0)">LOGO</a>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> --}}
                    <li class="nav-item"><a href="/" class="nav-link" style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Home</a></li>
                        <li class="nav-item"><a href="{{route('catholic_diocese')}}" class="nav-link"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Catholic Diocese</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('schools')}}"   style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Schools</a></li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('healths')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Health
                                Institute</a>
                           
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link" href="{{route('research_institute')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Research Institute</a>
                           
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link" href="{{route('departiment')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Departiments</a>
                            
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link" href="{{route('contact')}}"  style="font-weight:600; color:rgb(255, 170, 0); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Contact us</a>
                            
                        </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- END nav -->
    </div>


</header>

{{--=--------------------------------------------------------------------------- otherss schools------------------------------------------------------------------------------ --}}
{{-- <div class="col-md-3 d-none d-md-block">
    <a class="dropdown-item" href="#">Mchombe Parish Kindergarten</a>
    <a class="dropdown-item" href="#">Kindergarten of St. Teresa of Child
        Jesus</a>
    <a class="dropdown-item" href="#"> Sole Secondary School</a>
    <a class="dropdown-item" href="#">Compassion Secondary School</a>
    <a class="dropdown-item" href="#">Assumption Primary School</a>
    <a class="dropdown-item" href="#">Assumption Pre-Primary School</a>
    <a class="dropdown-item" href="#">Devine Mercy Minor Seminary</a>
    <a class="dropdown-item" href="#">St. Theresa Nursery school</a>
    <a class="dropdown-item" href="#">Good news secondary school</a>
</div> --}}