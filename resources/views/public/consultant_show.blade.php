@extends('layouts.app')
@section('content')


<!-- Start Hero -->
<section class="bg-half-150 d-table w-100 bg-light">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="sub-title mb-4">Lockdowns lead to fewer people seeking visa consultancy services. </h3>
                    <p class="para-desc mx-auto text-muted">Great visa consultant if you need to get effective immediate
                        assistance, emergency visa processing, or a simple consultation for your visa needs.</p>

                    <ul class="list-unstyled mt-4">
                        <li class="list-inline-item user text-muted me-2">
                            <i class="mdi mdi-account"></i>{{$consultant['full_name']}}
                        </li>
                        <li class="list-inline-item date text-muted">
                            <i class="mdi mdi-calendar-check"></i>
                            Since {{\Carbon\Carbon::parse($consultant['created_at'])->format('F d Y')}}
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-7">
                <img src="../assets/images/blog/single.jpg" class="img-fluid rounded shadow" alt="">


                <p class="text-muted mt-4">{{$consultant['notes']}}</p>

                {{-- @if (JobseekerLogged()) --}}
                <h5 class="card-title mt-4 mb-0">Book an Appointment :</h5>

                <form class="mt-3" method="POST" action="{{route('jobSeeker.appointments.store')}}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <select name="slot_id" class="form-control border rounded">
                                    <option value="">Select A Time Slot</option>
                                    @foreach ($consultant['slots'] as $slot)
                                    <option value="{{$slot['id']}}" {{old('slot_id') == $slot['id'] ? 'selected' : null}}>
                                        {{$slot['date']}} From {{$slot['time_from']}} to {{$slot['time_to']}}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->first('slot_id')}}</span>
                            </div>
                        </div>

                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <textarea name="notes" id="notes" rows="4" class="form-control border rounded"
                                    placeholder="Your Message :">{{old('notes')}}</textarea>
                                <span class="text-danger">{{$errors->first('notes')}}</span>
                            </div>
                        </div>

                        <!--end col-->
                        <div class="col-md-4">
                            <input type="hidden" name="consultant_id" value=" {{$consultant['id']}}">
                            <button type="submit" class="btn btn-primary">Book</button>
                        </div>


                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->

                {{-- @endif --}}

            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 sidebar sticky-bar rounded shadow">
                    <div class="card-body">

                        <!-- TAG CLOUDS -->
                        <div class="widget mb-4 pb-2">
                            <h5 class="widget-title">Consulting Countries</h5>
                            <div class="tagcloud mt-4">
                                @foreach ($consultant['countries'] as $country)
                                <a href="jvascript:void(0)" class="rounded">{{$country['name']}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- TAG CLOUDS -->

                        <!-- TAG CLOUDS -->
                        <div class="widget mb-4 pb-2">
                            <h5 class="widget-title">JobTypes</h5>
                            <div class="tagcloud mt-4">
                                @foreach ($consultant['job_types'] as $job_type)
                                <a href="jvascript:void(0)" class="rounded">{{$job_type['name']}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- TAG CLOUDS -->


                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="title mb-0">Related Post:</h4>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="slider-range-three">
                    <div class="tiny-slide">
                        <div class="card blog blog-primary border-0 shadow rounded overflow-hidden m-1">
                            <img src="../assets/images/blog/03.jpg" class="img-fluid" alt="">
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="list-inline-item text-muted small me-3"><i
                                            class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                    <li class="list-inline-item text-muted small"><i
                                            class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                                </ul>
                                <a href="blog-detail.html" class="text-dark title h5">medicine research course for
                                    doctors</a>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i
                                                    class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                    class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="link">Read More <i
                                            class="mdi mdi-chevron-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card blog blog-primary border-0 shadow rounded overflow-hidden m-1">
                            <img src="../assets/images/blog/04.jpg" class="img-fluid" alt="">
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="list-inline-item text-muted small me-3"><i
                                            class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                    <li class="list-inline-item text-muted small"><i
                                            class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                                </ul>
                                <a href="blog-detail.html" class="text-dark title h5">Comparing Nitrogen And Mechanical
                                    Freezers</a>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i
                                                    class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                    class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="link">Read More <i
                                            class="mdi mdi-chevron-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card blog blog-primary border-0 shadow rounded overflow-hidden m-1">
                            <img src="../assets/images/blog/05.jpg" class="img-fluid" alt="">
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="list-inline-item text-muted small me-3"><i
                                            class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                    <li class="list-inline-item text-muted small"><i
                                            class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                                </ul>
                                <a href="blog-detail.html" class="text-dark title h5">It Is Very Important To Wear
                                    Proper Clothing</a>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i
                                                    class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                    class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="link">Read More <i
                                            class="mdi mdi-chevron-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card blog blog-primary border-0 shadow rounded overflow-hidden m-1">
                            <img src="../assets/images/blog/06.jpg" class="img-fluid" alt="">
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="list-inline-item text-muted small me-3"><i
                                            class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                    <li class="list-inline-item text-muted small"><i
                                            class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                                </ul>
                                <a href="blog-detail.html" class="text-dark title h5">Hollowed-Out Faces More Cuts Amid
                                    Virus</a>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i
                                                    class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                    class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="link">Read More <i
                                            class="mdi mdi-chevron-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card blog blog-primary border-0 shadow rounded overflow-hidden m-1">
                            <img src="../assets/images/blog/07.jpg" class="img-fluid" alt="">
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="list-inline-item text-muted small me-3"><i
                                            class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                    <li class="list-inline-item text-muted small"><i
                                            class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                                </ul>
                                <a href="blog-detail.html" class="text-dark title h5">A Researcher Is Research On
                                    Coronavirus In Lab</a>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i
                                                    class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                    class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                    </ul>
                                    <a href="blog-detail.html" class="link">Read More <i
                                            class="mdi mdi-chevron-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
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
