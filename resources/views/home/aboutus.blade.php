@php
$setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')
@section('title','About Us', $setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

<div class="row">

    <br>

    <div class="container">
        <br>
        <h3>About Us</h3>
        <hr>
        <br>
        <p style="font-size: 15px">
            {{$setting->aboutus}}
        </p>
        <br>
    </div>
    <br>

</div>
@endsection
