@extends('layouts.app')
@section('content')

<!-- Start Hero -->
<section class="bg-half-170 d-table w-100" id="home">
    <div class="bg-overlay bg-overlay-dark"></div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-10">
                <div class="heading-title text-center">
                    <img src="{{asset('assets/images/logo-icon.png')}}" height="50" alt="">
                    <h4 class="heading fw-bold text-white title-dark mt-3 mb-4">Booking Your Appointments</h4>
                    <p class="para-desc mx-auto text-white-50 mb-0">Great doctor if you need your family member to get
                        effective immediate assistance, emergency treatment or a simple consultation.</p>

                    <div class="mt-4 pt-2">
                        <form class="rounded text-start shadow p-4 bg-white-50">
                            <div class="row align-items-center">
                                <div class="col-md">
                                    <div class="input-group bg-white border rounded" style="opacity: 0.7;">
                                        <span class="input-group-text border-0"><i
                                                class="ri-map-pin-line text-primary h5 fw-normal mb-0"></i></span>
                                        <input name="name" id="location" type="text" class="form-control border-0"
                                            placeholder="Location:">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-md mt-4 mt-sm-0">
                                    <div class="input-group bg-white border rounded" style="opacity: 0.7;">
                                        <span class="input-group-text border-0"><i
                                                class="ri-user-2-line text-primary h5 fw-normal mb-0"></i></span>
                                        <input name="name" id="name" type="text" class="form-control border-0"
                                            placeholder="Doctor Name:">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-md-auto mt-4 mt-sm-0">
                                    <div class="d-grid d-md-block">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                        <!--end form-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex">
                    <i class="uil uil-briefcase h1 mb-0 text-primary"></i>
                    <div class="ms-3 ms-lg-4">
                        <h5>Our Mission</h5>
                        <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the
                            16th century.</p>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="d-flex">
                    <i class="uil uil-airplay h1 mb-0 text-primary"></i>
                    <div class="ms-3 ms-lg-4">
                        <h5>Our Vision</h5>
                        <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the
                            16th century.</p>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="d-flex">
                    <i class="uil uil-flip-v h1 mb-0 text-primary"></i>
                    <div class="ms-3 ms-lg-4">
                        <h5>Who We Are ?</h5>
                        <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the
                            16th century.</p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->

@endsection
