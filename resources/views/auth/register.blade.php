@extends('layouts.app' , ['header' => false, 'footer' => false])
@section('content')
<div class="back-to-home rounded d-none d-sm-block">
    <a href="index.html" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- Hero Start -->
<section class="bg-half-150 d-table w-100 bg-light"
    style="background: url('{{asset('assets/images/bg/bg-lines-one.png')}}') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <h4 class="text-center">Jobs</h4>
                <div class="card login-page shadow mt-4 rounded border-0">
                    <div class="card-body">
                        <h4 class="text-center">Sign Up</h4>
                        <form action="" class="login-form mt-4" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="First Name" name="s"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="s"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input align-middle" type="checkbox" value=""
                                                id="accept-tnc-check">
                                            <label class="form-check-label" for="accept-tnc-check">I Accept <a href="#"
                                                    class="text-primary">Terms And Condition</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Register</button>
                                    </div>
                                </div>



                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small>
                                        <a href="{{route('login')}}" class="text-dark fw-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!---->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->
@endsection
