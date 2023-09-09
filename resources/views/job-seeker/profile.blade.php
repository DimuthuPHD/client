@extends('layouts.app')
@section('content')

@extends('job-seeker.includes.sidebar')
@section('job-seeker-content')
@php
$userDetails = collect(authDetail());
@endphp

<div class="col-xl-8 col-lg-8 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
    <h5 class="mb-0 pb-2">Schedule Timing</h5>
    <div class="rounded shadow mt-4">

        <div class="p-4">
            <form action="{{route('jobSeeker.updateprofile')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="first_name">First Name</label>
                            <input name="first_name" id="first_name" type="text" class="form-control"
                                placeholder="First Name :" value="{{old('first_name', authDetail('user.first_name'))}}">
                            <span class="text-danger">{{$errors->first('first_name')}}</span>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input name="last_name" id="last_name" type="text" class="form-control"
                                placeholder="Last Name :" value="{{old('last_name', authDetail('user.last_name'))}}">
                            <span class="text-danger">{{$errors->first('last_name')}}</span>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">Your Email</label>
                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :"
                                value="{{old('email', authDetail('user.email'))}}">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="telephone">Phone no.</label>
                            <input name="telephone" id="telephone" type="text" class="form-control"
                                placeholder="Phone no. :" value="{{old('telephone', authDetail('user.telephone'))}}">
                            <span class="text-danger">{{$errors->first('telephone')}}</span>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label" for="adddress">Address</label>
                            <textarea id="adddress" name="adddress" rows="4" class="form-control"
                                placeholder="Bio :">{!!old('address', authDetail('user.address'))!!}</textarea>
                            <span class="text-danger">{{$errors->first('adddress')}}</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label" for="notes">Notes</label>
                            <textarea id="notes" name="notes" rows="4" class="form-control"
                                placeholder="Bio :">{!!old('address', authDetail('user.notes'))!!}</textarea>
                            <span class="text-danger">{{$errors->first('notes')}}</span>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label" for="password">New password :</label>
                            <input type="password" name="password" class="form-control" placeholder="New password" autocomplete="new-password">
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label" for="password">Confirm New password :</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="New password" autocomplete="new-password">
                            <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                        </div>
                    </div>
                </div>

        </div>
        <!--end row-->
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" id="submit" name="save" class="btn btn-primary" value="Save changes">
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        </form>
        <!--end form-->
    </div>
</div>
</div>

@endsection
@endsection
