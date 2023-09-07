@extends('layouts.app')
@section('content')
@extends('consultant.includes.sidebar')
@section('consultant-content')
<div class="col-xl-8 col-lg-8 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
    <div class="row">
        <div class="col-xl-9 col-lg-6 col-md-4">
            <h5 class="mb-0">Appointment</h5>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
            <div class="justify-content-md-end">
                <form>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 col-md-5">
                            <div class="mb-0 position-relative">
                                <select class="form-select form-control">
                                    <option value="EY">Today</option>
                                    <option value="GY">Tomorrow</option>
                                    <option value="PS">Yesterday</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-sm-12 col-md-7 mt-4 mt-sm-0">
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#appointmentform">Appointment</a>
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
                            <th class="border-bottom p-3">Gender</th>
                            <th class="border-bottom p-3" style="min-width: 150px;">Date</th>
                            <th class="border-bottom p-3">Time</th>
                            <th class="border-bottom p-3" style="min-width: 150px;"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="p-3">1</th>
                            <td class="p-3">Male</td>
                            <td class="p-3">Cardiology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">2</th>
                            <td class="p-3">Female</td>
                            <td class="p-3">Gynecology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">3</th>
                            <td class="p-3">Female</td>
                            <td class="p-3">Psychotherapy</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">4</th>
                            <td class="p-3">Male</td>
                            <td class="p-3">Orthopedic</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">5</th>
                            <td class="p-3">Female</td>
                            <td class="p-3">Dental</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">6</th>
                            <td class="p-3">Male</td>
                            <td class="p-3">Orthopedic</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">7</th>
                            <td class="p-3">Male</td>
                            <td class="p-3">Dentist</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">8</th>
                            <td class="p-3">Male</td>
                            <td class="p-3">Gastrology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">9</th>
                            <td class="p-3">Female</td>
                            <td class="p-3">Urology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">10</th>
                            <td class="p-3">Female</td>
                            <td class="p-3">Neurology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>
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
                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
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
