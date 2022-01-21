@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('title','User Profile')



@section('content')
    <body>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">

                        <div class="bt-option">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                @include('home.usermenu')
                <div class="col-lg-10 col-md-10">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
