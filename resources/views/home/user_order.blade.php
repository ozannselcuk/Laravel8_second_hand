@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('tittle', 'Product')
@section('content')
    <section class="contact-area gray-bg pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-30">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav>
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">My Products</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-9">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">User Shopcart Tables</h4>
                                @include('home.messages')
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category ID</th>
                                            <th>Title</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>@if(!empty($rs->product->categories->title)){{$rs->product->categories->title}}@endif</td>
                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->total}}</td>
                                                <td>{{$rs->email}}</td>
                                                <td>{{$rs->address}}</td>
                                                <td>{{$rs->phone}}</td>
                                                <td>{{$rs->note}}</td>
{{--                                                <td><a href="{{route('user_image_create', ['product_id' =>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=900, height=600')">--}}
{{--                                                        <img src="{{asset('assets/admin/images')}}/gallery.png" style="width: 50px; height: 50px"> </a></td>--}}
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('user_shopcart_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" class="fa fa-trash"/></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
