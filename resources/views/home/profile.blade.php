@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('title','Second Hand E-Commerce')
@section('content')
<div class="" style="">

    <div   style="     margin-top: 6%;
    margin-left: 3%; float: left;" id="aside" class="col-md-2 col-lg-2">

        @include('home.usermenu')

    </div>
    <div id="main" class="col-md-10 col-lg-10">

        @include('profile.show')
    </div>



</div>








@endsection
