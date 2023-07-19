@extends('layouts.layout')
@section('title', 'Landing Page')

@section('content')


<div class="container-fluid p-0 " style="height: 150vh;">
    @include('partials._header')

    <div class="container h-50 m-5 p-0 me-auto ms-auto d-flex flex-column " style="background: url(./img/landingpage.jpg);background-size: cover;background-position: center;">

        <div class="container bg-white h-50 w-75  bg-opacity-25 me-0 ms-5 mt-5 text-uppercase text-white d-flex  flex-column justify-content-evenly">
           <h4>We offer you </h3> 
            <h1 class="fw-bolder "><span style="color: #FF6000;"> trustworthy </span>auto refurbishing</h1>
           <h4>let us be your trusted partner in maintaining <br> <br>
            the health and reliability of your vehicle  </h3> 
        </div>
        <div class="container h-50 w-75 me-0 ms-5   d-flex align-items-start justify-content-start ">
            <div class="btn w-25 m-5 p-2" style="background-color: #FF6000;">Schedule Appointment</div>
            <div class="btn w-25 m-5 p-2" style="background-color: #FF6000;">Order Parts</div>
        </div>
        
    </div>
    

</div>


@include('partials._footer')
@endsection