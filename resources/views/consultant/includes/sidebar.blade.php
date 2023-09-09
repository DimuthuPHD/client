<!-- Start -->
<section class="bg-dashboard">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-5 col-12">
                <div class="rounded shadow overflow-hidden sticky-bar">
                    <div class="card border-0">
                        <img src="../assets/images/doctors/profile-bg.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
                        <img src="../assets/images/doctors/01.jpg" class="rounded-circle shadow-md avatar avatar-md-md"
                            alt="">
                        <h5 class="mt-3 mb-1"> Calvin Carlo</h5>
                        <p class="text-muted mb-0">Consultant</p>
                    </div>

                    <ul class="list-unstyled sidebar-nav mb-0">
                        <li class="navbar-item">
                            <a href="{{route('consultant.dashboard')}}" class="navbar-link"><i
                                    class="ri-airplay-line align-middle navbar-icon"></i> Dashboard
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="{{route('consultant.appointments')}}" class="navbar-link">
                                <i class="ri-calendar-check-line align-middle navbar-icon"></i> Appointment
                            </a>
                        </li>

                        <li class="navbar-item">
                            <a href="{{route('consultant.profile')}}" class="navbar-link">
                                <i class="ri-user-line align-middle navbar-icon"></i> Profile
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="#" class="navbar-link">
                                <i class="ri-timer-line align-middle navbar-icon"></i> Schedule Timing
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="#" class="navbar-link">
                                <i class="ri-pages-line align-middle navbar-icon"></i> Invoices
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="#" class="navbar-link">
                                <i class="ri-mail-unread-line align-middle navbar-icon"></i> Messages
                            </a>
                        </li>

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">
                                <i class="ri-user-settings-line align-middle navbar-icon"></i> Profile Set ting s
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="#" class="navbar-link">
                                <i class="ri-device-recover-line align-middle navbar-icon"></i> Forgot Pas sword
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->

            @yield('consultant-content')
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->
