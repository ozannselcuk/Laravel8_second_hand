@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('title', $data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)
@section('content')


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
                            <img width="500" height="500" src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="scale-with-grid wp-post-image" title="" />
                        </div>
                        @foreach($datalist as $rs)
                        <div class="images image_wrapper">
                             <img width="500" height="500" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" class="scale-with-grid wp-post-image" title="" />
                        </div>
                        @endforeach

                    </div>
                </div>
                                                <!-- One Second (1/2) Column -->
                <div class="column one-second summary entry-summary">
                    <h1 class="product_title entry-title">{{$data->title}}</h1>
                    <div class="woocommerce-product-rating" >
                        <div class="star-rating" title="Rated 4.00 out of 5">
                            <span style="width:80%"> <strong class="rating">4.00</strong> out of 5 </span>
                        </div>

                    </div>
                    <div itemscope itemtype="http://schema.org/Offer">
                        <p class="price">
                            <del><span class="amount">{{$data->price}}</span></del><ins><span class="amount">{{$data->price}}</span></ins>
                        </p>
                        <meta  content="12" />
                        <meta  content="USD" />
                        <link  href="http://schema.org/InStock" />
                    </div>
                                                    <br class="flv_style_25" />
                                                    <div>
                                                        <p>
                                                            {{$data->description}}  </p>
                                                    </div>
                                                    <form class="cart" method="post" enctype='multipart/form-data'>
                                                        <div class="quantity">
                                                            <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />
                                                        </div>
                                                        <input type="hidden" name="add-to-cart" value="70" />
                                                        <button  href="{{route('addtocart',['id'=>$rs->id])}}" type="submit" class="single_add_to_cart_button button alt">
                                                    Add to Cart

                                                        </button>
                                                    </form>
                    <div class="accordion">
                        <div class="mfn-acc accordion_wrapper open1st">
                            <div class="question">
                                <div class="title">
                                    <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Description
                                </div>
                                <div class="answer">
                                    <p>
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                    </p>
                                </div>
                            </div>
                            <div class="question">
                                <div class="title">
                                    <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Reviews (4)
                                </div>
                                <div class="answer">
                                    <div id="reviews">
                                        <div id="comments">
                                            <h2>4 reviews for Flying Ninja</h2>
                                            <ol class="commentlist">
                                                <li itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-36">
                                                    <div id="comment-36" class="comment_container"><img alt='Cobus Bester' src='http://1.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                        <div class="comment-text">
                                                            <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
                                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>Cobus Bester</strong> &ndash;
                                                                <time datetime="2013-06-07T11:52:25+00:00">
                                                                    June 7, 2013
                                                                </time>
                                                                :
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    Really happy with this print. The colors are great, and the paper quality is good too.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li itemscope itemtype="http://schema.org/Review" class="comment odd thread-odd thread-alt depth-1" id="li-comment-37">
                                                    <div id="comment-37" class="comment_container"><img alt='Andrew' src='http://0.gravatar.com/avatar/8026a390d28369f7a2befcaeb9557359?s=60&amp;d=&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                        <div class="comment-text">
                                                            <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 3 out of 5">
                                                                <span style="width:60%"><strong>3</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>Andrew</strong> &ndash;
                                                                <time datetime="2013-06-07T11:56:36+00:00">
                                                                    June 7, 2013
                                                                </time>
                                                                :
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    You only get the picture, not the person holding it, something they don&#8217;t mention in the description, now I&#8217;ve got to find my own person
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-38">
                                                    <div id="comment-38" class="comment_container"><img alt='Coen Jacobs' src='http://1.gravatar.com/avatar/3472757f6a3732d6470f98d7d7e9cece?s=60&amp;d=&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                        <div class="comment-text">
                                                            <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                                                <span style="width:100%"><strong>5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>Coen Jacobs</strong> &ndash;
                                                                <time datetime="2013-06-07T12:19:25+00:00">
                                                                    June 7, 2013
                                                                </time>
                                                                :
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    This is my favorite poster. In fact, I&#8217;ve ordered 5 of them!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li itemscope itemtype="http://schema.org/Review" class="comment odd thread-odd thread-alt depth-1" id="li-comment-39">
                                                    <div id="comment-39" class="comment_container"><img alt='Stuart' src='http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=60&amp;d=&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                        <div class="comment-text">
                                                            <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
                                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>Stuart</strong> &ndash;
                                                                <time datetime="2013-06-07T12:59:49+00:00">
                                                                    June 7, 2013
                                                                </time>
                                                                :
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    This is a fantastic quality print and is happily hanging framed on my wall now.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="product-page.html#respond" class="flv_disp_none">Cancel reply</a></small></h3>
                                                    <p class="must-log-in">
                                                        You must be <a href="#">logged in</a> to post a comment.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                    <div class="product_meta">
                                                        <span class="posted_in">Category: <a href="shop.html" rel="tag">Posters</a>.</span>
                                                    </div>
                                                    <div class="accordion">
                                                        <div class="mfn-acc accordion_wrapper open1st">
                                                            <div class="question">
                                                                <div class="title">
                                                                    <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Description
                                                                </div>
                                                                <div class="answer">
                                                                    <p>
                                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                                                    </p>
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

</div>
</div>
</div>
</div>






@endsection
