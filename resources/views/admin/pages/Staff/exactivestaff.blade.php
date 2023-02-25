<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">


                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span class="pro-user-name ms-1">
                                Admin <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        @include('layouts.admin.sidebar')



        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">

                            <h4 class="page-title">Exactive Staff</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-8">
                                        <form class="d-flex flex-wrap align-items-center">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>
                                            <div class="me-3">
                                                <input type="search" class="form-control my-1 my-md-0"
                                                    id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <label for="status-select" class="me-2">Sort By</label>
                                            <div class="me-sm-3">
                                                <select class="form-select my-1 my-md-0" id="status-select">
                                                    <option>Select</option>
                                                    <option>Date</option>
                                                    <option selected>Name</option>
                                                    <option>Revenue</option>
                                                    <option>Employees</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-md-end mt-3 mt-md-0">

                                            <Span class="bg-info p-2 text-center" style="color:#fff"
                                                data-bs-toggle="modal" data-bs-target="#custom-modal"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#custom-modal"
                                                    style="color:#fff"><i class="mdi mdi-plus-circle me-1"></i> Add
                                                    Staff</a> </Span>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card bg-pattern">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('site/img/bg-img/bishop.jpg') }}" alt="logo"
                                        class="avatar-xl rounded-circle mb-3">
                                    <h4 class="mb-1 font-20">Hakimu Ndaba.</h4>
                                    <p class="text-muted  font-14">General Secretary</p>
                                </div>

                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>
                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>




                                <div class="row mt-4 text-center">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->

                    <div class="col-lg-3">
                        <div class="card bg-pattern">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('site/img/bg-img/bishop.jpg') }}" alt="logo"
                                        class="avatar-xl rounded-circle mb-3">
                                    <h4 class="mb-1 font-20">Hakimu Ndaba.</h4>
                                    <p class="text-muted  font-14">General Secretary</p>
                                </div>

                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>
                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>




                                <div class="row mt-4 text-center">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->


                    <div class="col-lg-3">
                        <div class="card bg-pattern">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('site/img/bg-img/bishop.jpg') }}" alt="logo"
                                        class="avatar-xl rounded-circle mb-3">
                                    <h4 class="mb-1 font-20">Hakimu Ndaba.</h4>
                                    <p class="text-muted  font-14">General Secretary</p>
                                </div>

                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>
                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>




                                <div class="row mt-4 text-center">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->

                    <div class="col-lg-3">
                        <div class="card bg-pattern">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('site/img/bg-img/bishop.jpg') }}" alt="logo"
                                        class="avatar-xl rounded-circle mb-3">
                                    <h4 class="mb-1 font-20">Hakimu Ndaba.</h4>
                                    <p class="text-muted  font-14">General Secretary</p>
                                </div>

                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>
                                <p class="font-14 text-justify text-muted">
                                    Amazon.com, Inc., doing business as Amazon, is an American electronic commerce
                                    and cloud computing company based in Seattle..
                                </p>




                                <div class="row mt-4 text-center">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->

                </div>
                <!-- end row -->



                {{-- <div class="row">
                        <div class="col-12">
                            <div class="text-end">
                                <ul class="pagination pagination-rounded justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link"
                                            href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
        <!-- Modal -->
        <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add Staff</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Initial description</label>
                                <textarea name="initial description" id="" cols="12" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">

                                <label for="status-select" class="me-2">Position</label>
                                <div class="me-sm-3">
                                    <select class="form-select my-1 my-md-0" id="status-select">
                                        <option>Select</option>
                                        <option>Accountant</option>
                                        <option selected>Prest</option>
                                        <option>shemsi</option>
                                        <option>others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="bg-info p-2">Publish </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <b>IFAKARA DIOCESE Ⓒ 2023</b>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
        <!-- end Footer -->

    </div>




    </div>
    <!-- END wrapper -->



    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>

</html>
