@extends('layouts.app')
@section('content')
@extends('consultant.includes.sidebar')
@section('consultant-content')
@php
$userDetails = collect(authDetail());
@endphp

<style>
    .slot-label {
        background: #8080807a;
        border-radius: 6px;
        padding: 7px;
        cursor: pointer;
    }

    .slot-label span {
        font-size: 12px;
        display: block;
        color: #91184e;
    }
</style>


<div class="col-xl-8 col-lg-8 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
    <h5 class="mb-0 pb-2">Create Appointment</h5>
    <div class="rounded shadow mt-4">
        <div class="p-4">
            <form action="{{route('consultant.appointments.store')}}" method="POST">
                @method('patch')
                @csrf
                @include('consultant.appointments.form', ['model' => null])
            </form>
            <!--end form-->

        </div>
    </div>
</div>
@endsection

@endsection