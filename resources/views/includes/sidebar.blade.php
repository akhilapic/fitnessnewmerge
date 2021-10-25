<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: url({{ asset('assets/admin/images/background/user-info.jpg') }}) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"><img src="{{ asset('assets/admin/images/users/profile.png') }}" alt="user" class="w-100" /></div>
            <!-- User profile text-->
            <div class="profile-text pt-1 dropdown">
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{Session::get('name')}}</a>
                <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/my_profile') }}"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i> My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('signout') }}"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i> Logout</a>
                    <div class="dropdown-divider"></div>
                    <div class="pl-4 p-2"><a href="{{ url('/my_profile') }}" class="btn d-block w-100 btn-info rounded-pill">View Profile</a></div>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item" style="">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/user_list') }}" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">User</span>
                    </a>
                </li>
				<li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/workout_plans') }}" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">Manage Workout Plans</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/manager_firness_trainers') }}" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">Manage Trainers</span>
                    </a>
                </li>
				
                <li class="sidebar-item" style="display:none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/product') }}" aria-expanded="false">
                        <i class="mdi mdi-cart-outline"></i>
                        <span class="hide-menu">Product</span>
                    </a>
                </li>
				
                <li class="sidebar-item" style="display:none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/404') }}" target="_blank" aria-expanded="false">
                        <i class="mdi mdi-alert-box"></i>
                        <span class="hide-menu">404</span>
                    </a>
                </li>
				
                <li class="sidebar-item" style="display:none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/create') }}" aria-expanded="false">
                        <i class="mdi mdi-file"></i>
                        <span class="hide-menu">Create Page</span>
                    </a>
                </li>


                <li class="sidebar-item" style="display:none">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu">Master</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ url('/category') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Category</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item" style="display:none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/contact') }}" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu">Contact Us</span>
                    </a>
                </li>

                <li class="sidebar-item" style="display:none">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu">CMS Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level" style="display:none">
                        <li class="sidebar-item">
                            <a href="{{ url('/about') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">About Us</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="display:none">
                            <a href="{{ url('/faq') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="display:none">
                            <a href="{{ url('/privacy') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Privacy Policy</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="display:none">
                            <a href="{{ url('/terms') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Terms & Conditions</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="display:none">
                            <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i>
                                <span class="hide-menu">Blog</span>
                            </a>
                            <ul aria-expanded="false" class="collapse second-level" style="display:none">
                                <li class="sidebar-item">
                                    <a href="{{ url('/blog_category') }}" class="sidebar-link">
                                        <i lass="mdi mdi-octagram"></i>
                                        <span class="hide-menu">Blog Category</span>
                                    </a>
                                </li>
                                <li class="sidebar-item" style="display:none">
                                    <a href="{{ url('/blog_list') }}" class="sidebar-link">
                                        <i lass="mdi mdi-octagram"></i>
                                        <span class="hide-menu">Blog List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><!--
        <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings"><i class="ti-settings"></i></a>
        <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Email"><i class="mdi mdi-gmail"></i></a>-->
        <a href="{{ url('/login') }}" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
