@extends('layouts.app')
@section('content')

<!-- Start Hero -->
<section class="bg-half-150 bg-light d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="sub-title mb-4">Consultants</h3>
                    <p class="para-desc mx-auto text-muted">Excellent visa consultant if you require efficient, prompt
                        visa processing, emergency document assistance, or a straightforward consultation.</p>

                    <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                        <ul class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Consultants</a></li>
                        </ul>
                    </nav>
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
<section class="section">
    <div class="container">
        <div class="row align-items-center">

            <form method="get" action="{{route('cntList')}}" name="consultant-form" id="consultant-form">
                <p id="error-msg"></p>
                <div id="simple-msg"></div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <select name="country" class="form-control border rounded">
                                <option value="">Country</option>
                                @foreach ($countries as $country)
                                <option value="{{$country['slug']}}" {{request('country')==$country['slug'] ? 'selected'
                                    : null}}>{{$country['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <select name="job_type" class="form-control border rounded">
                                <option value="">Job Type</option>
                                @foreach ($jobTypes as $jobType)
                                <option value="{{$jobType['name']}}" {{request('job_type')==$jobType['name']
                                    ? 'selected' : null}}>{{$jobType['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <a href="{{route('cntList')}}" class="btn btn-warning">Reset Filters</a>
                    </div>
                </div>
                <!--end row-->
            </form>

            @foreach ($consultants as $consultant)
            @php
            $countryNames = array_column($consultant['countries'], 'name');
            $countries = implode(' /', $countryNames);
            @endphp
            <div class="col-lg-6 col-md-12">
                <div class="card team border-0 rounded shadow overflow-hidden">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="team-person position-relative overflow-hidden">
                                <img src="../assets/images/doctors/01.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled team-like">
                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                data-feather="heart" class="icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <a href="{{route('cntShow', $consultant['id'])}}"
                                    class="title text-dark h5 d-block mb-0">{{$consultant['full_name'] ??
                                    ''}}</a>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                </div>
                                <ul class="list-unstyled mt-2 mb-0">

                                    @foreach ($consultant['countries'] as $country)
                                    <li class="d-flex">
                                        <i class="ri-global-line text-primary align-middle"></i>
                                        <small class="text-muted ms-2"> {{$country['name']}}</small>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->


@endsection
