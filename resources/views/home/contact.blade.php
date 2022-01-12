@php
$setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')
@section('title','Contact', $setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')
    @include('home.messages')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class=" col-md-6" >
                    <br>
                    <h3> Iletişim Bilgileri</h3>
                    {{$setting->contact}}
                </div>
                <div class="col-md-6">
                    <br>
                               <h5 class="flv_style_4">Forms</h5>
                                <div class="column one-second column_column">
                                    <div class="column_attr">

                                        <div id="contactWrapper_popup">
                                            <form id="contactform_popup" class="flv_fullwidth" action="{{route('send_message')}}" method="post">
                                                @csrf
                                                <p>
                                                    <span>
                                                        <input type="text" name="name" id="name_popup" aria-required="true" aria-invalid="false" placeholder="Name&Surname">
                                                    </span>
                                                    <span>
                                                        <input type="email" name="email" id="email_popup" aria-required="true" aria-invalid="false" placeholder="Your email">
                                                    </span>
                                                    <span>
                                                        <input class="input" type="text" name="phone" id="subject_popup" aria-required="true" aria-invalid="false" placeholder="Your Phone Number">
                                                    </span>

                                                    <span>
                                                        <input class="input" type="text" name="subject" id="subject_popup" aria-required="true" aria-invalid="false" placeholder="Subject is Here">
                                                    </span>
                                                    <span>
                                                        <textarea  class="input" name="message" id="body_popup" rows="6" aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
                                                    </span>

                                                    <button type="submit" class="primary-btn">Send Message</button>
                                                </p>
                                            </form>
                                            <div id="confirmation_popup"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->




                </div>
            </div>
        </div>
    </div>
@endsection
