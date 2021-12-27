@php
$setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')
@section('title','References', $setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

<div class="row">

    <br>

    <div class="container">
        <h3>References</h3>
        {{$setting->references}}
    </div>
    <br>

</div>
@endsection
