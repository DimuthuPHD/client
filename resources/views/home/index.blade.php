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
                    <h4 class="heading fw-bold text-white title-dark mt-3 mb-4">Welcome to Our Visa Consulting Services
                    </h4>
                    <p class="para-desc mx-auto text-white-50 mb-0">We provide expert guidance and assistance for all your visa application needsconsultation.</p>
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
