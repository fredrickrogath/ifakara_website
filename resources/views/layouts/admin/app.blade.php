<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.admin.head')
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
         @include('layouts.admin.topbar')
            <!-- end Topbar -->

        @include('layouts.admin.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-blue rounded">
                                                    <i class="fe-layers avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">12,008</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Staff Registered</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-award avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">7,410</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-lg-6 col-xl-3">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-danger rounded">
                                                    <i class="fe-delete avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">2,125</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Deals</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-lg-6 col-xl-3">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-warning rounded">
                                                    <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">256</span>k</h3>
                                                    <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Recent Feedback</h4>
                                          <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Date|Time</th>
                                                  
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach ($feedback as $feedback)
                                                <tr>
                                                    <td>{{ $feedback->name }}</td>
                                                    <td>{{ $feedback->email }}</td>
                                                    <td>{{ $feedback->subject }}</td>
                                                    <td>{{ $feedback->created_at }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div> 
                                </div> 
                            </div>
                            <div class="col-md-3">
                                <div class="card project-box">
                                    <div class="card-body">
                                        <!-- end dropdown -->
                                        <!-- Title-->
                                        <h4 class="mt-0"><a href="project-detail.html" class="text-dark">New Admin Design</a></h4>
                                      
                                       
                                        <p class="text-muted font-13 mb-3 sp-line-2">With supporting text below as a natural lead-in to additional contenposuere erat a
                                            ante...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                                        </p>
                                        <!-- Task info-->
                                        <p class="mb-1">
                                            <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>78</b> Tasks
                                            </span>
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>214</b> Comments
                                            </span>
                                        </p>
                                        <!-- Team-->
                                        <div class="avatar-group mb-3" id="tooltips-container">
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mat Helme" />
                                            </a>
    
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Michael Zenaty" />
                                            </a>
    
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-3.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="James Anderson" />
                                            </a>
    
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mat Helme" />
                                            </a>
    
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Username" />
                                            </a>
                                        </div>
                                        <!-- Progress-->
                                        <p class="mb-2 fw-semibold">Task completed: <span class="float-end">28/78</span></p>
                                        <div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 34%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card project-box">
                                    <div class="card-body">
                                       
                                        <!-- Title-->
                                        <h4 class="mt-0"><a href="project-detail.html" class="text-dark">App Design and Development</a></h4>
                                 
                                        <!-- Desc-->
                                        <p class="text-muted font-13 mb-3 sp-line-2">A handful of model sentence structures, to generate Lorem Ipsum which looks reasonable...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                                        </p>
                                        <!-- Task info-->
                                        <p class="mb-1">
                                            <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>81</b> Tasks
                                            </span>
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>103</b> Comments
                                            </span>
                                        </p>
                                        <!-- Team-->
                                        <div class="avatar-group mb-3" id="tooltips-container1">
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mat Helme" />
                                            </a>
    
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Michael Zenaty" />
                                            </a>
    
                                            <a href="javascript: void(0);" class="avatar-group-item">
                                                <img src="../assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="James Anderson" />
                                            </a>
                                        </div>
                                        <!-- Progress-->
                                        <p class="mb-2 fw-semibold">Task completed: <span class="float-end">55/85</span></p>
                                        <div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 80%;">
                                            </div>
                                        </div><!-- /.progress .no-rounded -->
                                    </div>
                                </div> 
                            </div>
                         
                            <!-- end col-->
                        </div>
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.admin.footer')
                <!-- end Footer -->

            </div>


        </div>
     
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

        
        <script src="{{asset('admin/assets/js/pages/crm-dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
                <!-- Datatables init -->
         <script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>
        
    </body>
</html>


{{-- #fcc015 --}}