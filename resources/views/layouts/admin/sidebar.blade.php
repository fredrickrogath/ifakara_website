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

            <li class="menu-title mt-2">Apps</li>

            <li>
                <a href="apps-calendar.html">
                    <i data-feather="calendar"></i>
                    <span> Calendar </span>
                </a>
            </li>

            <li>
                <a href="apps-chat.html">
                    <i data-feather="message-square"></i>
                    <span> Chat </span>
                </a>
            </li>

            <li>
                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                    <i data-feather="shopping-cart"></i>
                    <span> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="nav-second-level">
                        <li>
                            <a href="ecommerce-dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="ecommerce-products.html">Products</a>
                        </li>
                        <li>
                            <a href="ecommerce-product-detail.html">Product Detail</a>
                        </li>
                        <li>
                            <a href="ecommerce-product-edit.html">Add Product</a>
                        </li>
                        <li>
                            <a href="ecommerce-customers.html">Customers</a>
                        </li>
                        <li>
                            <a href="ecommerce-orders.html">Orders</a>
                        </li>
                        <li>
                            <a href="ecommerce-order-detail.html">Order Detail</a>
                        </li>
                        <li>
                            <a href="ecommerce-sellers.html">Sellers</a>
                        </li>
                        <li>
                            <a href="ecommerce-cart.html">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li>
                <a href="#sidebarProjects" data-bs-toggle="collapse">
                    <i data-feather="briefcase"></i>
                    <span> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="nav-second-level">
                        <li>
                            <a href="project-list.html">List</a>
                        </li>
                        <li>
                            <a href="project-detail.html">Detail</a>
                        </li>
                        <li>
                            <a href="project-create.html">Create Project</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarTasks" data-bs-toggle="collapse">
                    <i data-feather="clipboard"></i>
                    <span> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="nav-second-level">
                        <li>
                            <a href="task-list.html">List</a>
                        </li>
                        <li>
                            <a href="task-details.html">Details</a>
                        </li>
                        <li>
                            <a href="task-kanban-board.html">Kanban Board</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarContacts" data-bs-toggle="collapse">
                    <i data-feather="book"></i>
                    <span> Contacts </span>
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
                    <i data-feather="aperture"></i>
                    <span> Tickets </span>
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
                <a href="apps-file-manager.html">
                    <i data-feather="folder-plus"></i>
                    <span> File Manager </span>
                </a>
            </li>

            <li class="menu-title mt-2">Custom</li>

            <li>
                <a href="#sidebarAuth" data-bs-toggle="collapse">
                    <i data-feather="file-text"></i>
                    <span> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAuth">
                    <ul class="nav-second-level">
                        <li>
                            <a href="auth-login.html">Log In</a>
                        </li>
                        <li>
                            <a href="auth-login-2.html">Log In 2</a>
                        </li>
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        <li>
                            <a href="auth-register-2.html">Register 2</a>
                        </li>
                        <li>
                            <a href="auth-signin-signup.html">Signin - Signup</a>
                        </li>
                        <li>
                            <a href="auth-signin-signup-2.html">Signin - Signup 2</a>
                        </li>
                        <li>
                            <a href="auth-recoverpw.html">Recover Password</a>
                        </li>
                        <li>
                            <a href="auth-recoverpw-2.html">Recover Password 2</a>
                        </li>
                        <li>
                            <a href="auth-lock-screen.html">Lock Screen</a>
                        </li>
                        <li>
                            <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                        </li>
                        <li>
                            <a href="auth-logout.html">Logout</a>
                        </li>
                        <li>
                            <a href="auth-logout-2.html">Logout 2</a>
                        </li>
                        <li>
                            <a href="auth-confirm-mail.html">Confirm Mail</a>
                        </li>
                        <li>
                            <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarExpages" data-bs-toggle="collapse">
                    <i data-feather="package"></i>
                    <span> Extra Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExpages">
                    <ul class="nav-second-level">
                        <li>
                            <a href="pages-starter.html">Starter</a>
                        </li>
                        <li>
                            <a href="pages-timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="pages-sitemap.html">Sitemap</a>
                        </li>
                        <li>
                            <a href="pages-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="pages-faqs.html">FAQs</a>
                        </li>
                        <li>
                            <a href="pages-search-results.html">Search Results</a>
                        </li>
                        <li>
                            <a href="pages-pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="pages-maintenance.html">Maintenance</a>
                        </li>
                        <li>
                            <a href="pages-coming-soon.html">Coming Soon</a>
                        </li>
                        <li>
                            <a href="pages-gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="pages-404.html">Error 404</a>
                        </li>
                        <li>
                            <a href="pages-404-two.html">Error 404 Two</a>
                        </li>
                        <li>
                            <a href="pages-404-alt.html">Error 404-alt</a>
                        </li>
                        <li>
                            <a href="pages-500.html">Error 500</a>
                        </li>
                        <li>
                            <a href="pages-500-two.html">Error 500 Two</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarLayouts" data-bs-toggle="collapse">
                    <i data-feather="layout"></i>
                    <span class="badge bg-blue float-end">New</span>
                    <span> Layouts </span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="nav-second-level">
                        <li>
                            <a href="layouts-horizontal.html">Horizontal</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html">Detached</a>
                        </li>
                        <li>
                            <a href="layouts-two-column.html">Two Column Menu</a>
                        </li>
                        <li>
                            <a href="layouts-two-tone-icons.html">Two Tones Icons</a>
                        </li>
                        <li>
                            <a href="layouts-preloader.html">Preloader</a>
                        </li>
                    </ul>
                </div>
            </li>

     
       

            

         
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->