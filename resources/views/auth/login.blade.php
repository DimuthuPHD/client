@extends('layouts.app', ['header' => false, 'footer' => false])
@section('content')

<!-- Hero Start -->
<section class="bg-home d-flex bg-light align-items-center"
    style="background: url('{{asset('assets/images/bg/bg-lines-one.png')}}') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">

                <h4 class="text-center">Jobs</h4>

                <div class="card login-page shadow mt-4 rounded border-0">
                    <div class="card-body">
                        <h4 class="text-center">Sign In</h4>
                        <form action="{{route('postLogin')}}" class="login-form mt-4" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            value="{{old('email')}}">
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input align-middle" type="radio"
                                                    name="user_type" value="job_seeker" id="job_seeker" checked>
                                                <label class="form-check-label" for="job_seeker">I am a Job
                                                    Seeeker</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input align-middle" type="radio"
                                                    name="user_type" value="consultant" id="consultant">
                                                <label class="form-check-label" for="consultant">I am a
                                                    Consultant</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Sign in</button>
                                    </div>
                                    <apsn class="text-danger">{{$errors->first('auth_fail')}}</apsn>
                                </div>

                                <div class="col-lg-12 mt-3 text-center">
                                    <h6 class="text-muted">Or</h6>
                                </div>

                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small>
                                        <a href="{{route('register')}}" class="text-dark fw-bold">Sign Up</a>
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
