@extends('layouts.app')
@section('content')
@extends('consultant.includes.sidebar')
@section('consultant-content')
<div class="col-xl-9 col-lg-9 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
    <div class="row">
        <div class="col-xl-9 col-lg-6 col-md-4">
            <h5 class="mb-0">Appointment</h5>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
            <div class="justify-content-md-end">
                <form>
                    <div class="row justify-content-between align-items-center">

                        <div class="col-sm-12 col-md-7 mt-4 mt-sm-0">
                            <div class="d-grid">
                                <a href="{{route('jobSeeker.appointments.create')}}" class="btn btn-primary">Create
                                    New</a>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 50px;">#</th>
                            <th class="border-bottom p-3" style="min-width: 180px;">Consultant</th>
                            <th class="border-bottom p-3" style="min-width: 150px;">Date</th>
                            <th class="border-bottom p-3">Time from</th>
                            <th class="border-bottom p-3">Time to</th>
                            <th class="border-bottom p-3">Status</th>
                            <th class="border-bottom p-3">Action</th>
                            <th class="border-bottom p-3" style="min-width: 150px;"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @foreach ($appointments['data'] as $appointment)
                        <tr>
                            <td class="p-3">{{$count}}</td>
                            <td class="p-3">{{$appointment['consultant']}}</td>
                            <td class="p-3">{{$appointment['date']}}</td>
                            <td class="p-3">{{$appointment['from']}}</td>
                            <td class="p-3">{{$appointment['to']}}</td>
                            <td class="p-3">{{$appointment['status']}}</td>
                            <td class="p-3"><a
                                    href="{{route('jobSeeker.appointments.edit', $appointment['id'])}}">edit</a></td>
                        </tr>
                        @php
                        $count++;
                        @endphp
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="row text-center">
        <!-- PAGINATION START -->
        <div class="col-12 mt-4">
            <div class="d-md-flex align-items-center text-center justify-content-between">
                <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                    <li class="page-item">
                        <a class="page-link"
                            href="{{route('consultant.appointments', ['page' => getUrlParameters($appointments['links']['prev'], 'page', 1)])}}"
                            aria-label="Previous">Prev</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link"
                            href="{{route('consultant.appointments', ['page' => getUrlParameters($appointments['links']['next'], 'page', 1)])}}"
                            aria-label="Next">Next</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--end col-->
        <!-- PAGINATION END -->
    </div>
    <!--end row-->
</div>
<!--end col-->
@endsection
@endsection