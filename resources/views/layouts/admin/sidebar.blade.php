  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

<div class="h-100" data-simplebar>

    <!-- User box -->
    <div class="user-box text-center">
        <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
            class="rounded-circle avatar-md">
        <div class="dropdown">
            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                data-bs-toggle="dropdown">Geneva Kennedy</a>
            <div class="dropdown-menu user-pro-dropdown">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user me-1"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings me-1"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock me-1"></i>
                    <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-log-out me-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </div>
        <p class="text-muted">Admin Head</p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul id="side-menu">

            <li class="menu-title">Navigation</li>

            <li>
                <a href="#sidebarDashboards">
                    <i data-feather="airplay"></i>
                   
                    <span> Dashboards </span>
                </a>
                
            </li>

            <li class="menu-title">App</li>
            <li>
                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <span> What's New</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('news') }}">News</a>
                        </li>
                        <li>
                            <a href="{{ route('events') }}">Events</a>
                        </li>
                       
                    </ul>
                </div>
            </li>


            <li>
                <a href="#sidebarProjects" data-bs-toggle="collapse">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span> Staff </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="nav-second-level">
                        <li>
                            <a href="project-list.html">Exacutive staff</a>
                        </li>
                        <li>
                            <a href="#">view Staff</a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarTasks" data-bs-toggle="collapse">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span> Parish </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="nav-second-level">
                        <li>
                            <a href="task-list.html">View Parish</a>
                        </li>
                        <li>
                            <a href="task-details.html">Updates Parish</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarContacts" data-bs-toggle="collapse">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span> Documents </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarContacts">
                    <ul class="nav-second-level">
                        <li>
                            <a href="contacts-list.html">Members List</a>
                        </li>
                        <li>
                            <a href="contacts-profile.html">Profile</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarTickets" data-bs-toggle="collapse">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span> About Us </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTickets">
                    <ul class="nav-second-level">
                        <li>
                            <a href="tickets-list.html">List</a>
                        </li>
                        <li>
                            <a href="tickets-detail.html">Detail</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li>
                <a href="#sidebarTickets">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Contact us </span>
                   
                </a>
              
            </li>
            <hr>

            <li>
                <a href="#">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                   
                    <span> Feedback </span>
                </a>
                
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                   
                    <span> Help </span>
                </a>
                
            </li>
         
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->