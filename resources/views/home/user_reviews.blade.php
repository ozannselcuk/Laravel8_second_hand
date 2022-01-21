@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('title','My Reviews')

@section('content')
    <body>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>User Profile</h2>
                        <div class="bt-option">

                            <span>My Reviews</span>
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
                <div class="col-lg-12">
                    <div class="section-title chart-title">
                        <span>User Panel</span>
                        <div class="chart-table table-responsive">
                            <table>
                                <thead>
                                <tr>

                                    <th><a href="{{route('myreviews')}}">My Reviews </a></th>

                                    <th>



                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <br>
                        <h2>My Reviews</h2>
                        <br>
                    </div>


                    <div class="chart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            @foreach($datalist as $rs)
                                <tbody>
                                 <td>{{$rs->id}}</td>
                                 <td>{{$rs->product_id}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}"
                                       onclick="return confirm('Delete ! Are you sure ?')"> <img src="{{ asset('assets')}}/img/click.png" alt="" height="40px"></a></td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </body>
@endsection
