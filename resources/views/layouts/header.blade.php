<!-- Navbar STart -->
<header id="topnav" class="navigation sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="/">
                <span class="logo-light-mode">
                    <h3>Jobs</h3>
                </span>
                <img src="../assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
            </a>
        </div>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!-- Start Dropdown -->
        <ul class="dropdowns list-inline mb-0">


            @if (isLoggedIn())
            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{asset('assets/images/doctors/01.jpg')}}"
                            class="avatar avatar-ex-small rounded-circle" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                        style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark" href="">
                            <img src="{{asset('assets/images/doctors/01.jpg')}}"
                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                            <div class="flex-1 ms-2">
                                <span class="d-block mb-1">{{authDetail('user.full_name')}}</span>
                            </div>
                        </a>
                        <a class="dropdown-item text-dark"
                            href="{{JobseekerLogged() ? route('jobSeeker.profile') : route('consultant.profile')}}">
                            <span class="mb-0 d-inline-block me-1">
                                <i class="uil uil-dashboard align-middle h6"></i>
                            </span> Profile
                        </a>

                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="{{route('logout')}}">
                            <span class="mb-0 d-inline-block me-1">
                                <i class="uil uil-sign-out-alt align-middle h6"></i>
                            </span> Logout
                        </a>
                    </div>
                </div>
            </li>
            @endif



        </ul>
        <!-- Start Dropdown -->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-left nav-light">
                <li><a href="/" class="sub-menu-item">Home</a></li>


                <li><a href="" class="sub-menu-item">About</a></li>
                <li><a href="" class="sub-menu-item">Consultants</a></li>
                <li><a href="" class="sub-menu-item">Contact</a></li>

                @if (!isLoggedIn())
                <li><a href="{{route('login')}}" class="sub-menu-item">Login</a></li>
                @endif
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>
<!--end header-->
<!-- Navbar End -->