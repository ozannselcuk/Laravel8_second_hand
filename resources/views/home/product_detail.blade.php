@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('title', $data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)
@section('content')
    <form method="post" class="cart"
          action="{{route('user_shopcart_store',['id'=>$data->id])}}">
        <div class="add-to-cart">
            @csrf
            <input type="hidden" class="input-text qty" title="Qty" value="1"
                   id="qty" name="stock">
            <button class="btn cart-btn" type="submit">Add to cart</button>

        </div>
    </form>

    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home/</a></li>
                <li class="active">Product Detail</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="product_wrapper clearfix">

                <!-- One Second (1/2) Column -->
                <div class="column one-second product_image_wrapper">
                    <div class="image_frame scale-with-grid">
                        <div class="images image_wrapper">
                            <img width="500" height="500"
                                 src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"
                                 class="scale-with-grid wp-post-image" title=""/>
                        </div>
                        @foreach($datalist as $rs)
                            <div class="images image_wrapper">
                                <img width="500" height="500"
                                     src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                     class="scale-with-grid wp-post-image" title=""/>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- One Second (1/2) Column -->
                <div class="column one-second summary entry-summary">
                    <h1 class="product_title entry-title">{{$data->title}}</h1>
                    <div class="woocommerce-product-rating">
                        <div class="star-rating" title="Rated 4.00 out of 5">
                            <span style="width:80%"> <strong class="rating">4.00</strong> out of 5 </span>
                        </div>

                    </div>
                    <div itemscope itemtype="http://schema.org/Offer">
                        <p class="price">
                            <del><span class="amount">{{$data->price}}</span></del>
                            <ins><span class="amount">{{$data->price}}</span></ins>
                        </p>
                        <meta content="12"/>
                        <meta content="USD"/>
                        <link href="http://schema.org/InStock"/>
                    </div>
                    <br class="flv_style_25"/>
                    <div>
                        <p>
                            {{$data->description}}  </p>
                    </div>


                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        Description
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    {!!$data->detail!!}  </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        Reviews
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    @foreach($reviews as $rs)

                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <div class="ti_pic">
                                                        <img src="{{Storage::url($rs->product->image)}}" style="width: 10%" alt="">
                                                    </div>
                                                    <div class="ti_text">
                                                        <h5>{{$rs->subject}}</h5>
                                                        <p>{{$rs->review}}</p>
                                                        <p>{{$rs->user->name}}<br>{{$rs->created_at}}</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            <form method="post" class="cart"
                  action="{{route('user_shopcart_store',['id'=>$data->id])}}">
                <div class="add-to-cart">
                    @csrf
                    <input type="hidden" class="input-text qty" title="Qty" value="1"
                           id="qty" name="stock">
                    <button class="btn cart-btn" type="submit">Add to cart</button>

                </div>
            </form>
            <div class="col-lg-12">


                <div class="section-title chart-calculate-title">
                    <h2>Share Your Reviews</h2>
                </div>
                <div class="chart-calculate-form">
                    <p>Ürün için görüşlerinizi belirtiniz.</p>

                    @livewire('review',['id'=>$data->id])

                </div>
            </div>
            </div>

        </div>

    </div>

    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>






@endsection
