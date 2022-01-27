@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
<div id="Header_wrapper">
    <!-- Header -->
    <div id="Header">
        <!-- Header Top -  Info Area -->
        <div id="Action_bar">
            <div class="container">
                <div class="column one">
                    <!-- Header - contact info area-->
                    <ul class="contact_details">
                        <li class="slogan">
                            Have any questions?
                        </li>
                        <li class="phone">
                            <i class="icon-phone"></i><a href="tel:+61383766284">+61 383 766 284</a>
                        </li>
                        <li class="mail">
                            <i class="icon-mail-line"></i><a href="mailto:noreply@envato.com">noreply@envato.com</a>
                        </li>
                    </ul>
                    <!--Social info area-->
                    <ul class="social">
                        @if($setting->facebook !=null)
                            <li class="facebook">
                                <a href="{{$setting->facebook}}" title="Facebook"><i class="icon-facebook"></i></a>
                            </li>
                        @endif
                        @if($setting->twitter !=null)
                            <li class="facebook">
                                <a href="{{$setting->twitter}}" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                        @endif
                        @if($setting->instagram !=null)
                            <li class="facebook">
                                <a href="{{$setting->instagram}}" title="Instagram"><i class="icon-instagram"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header -  Logo and Menu area -->
        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <!-- Logo-->
                        <div class="logo">
                            <a id="logo" href="{{route('home')}}" title="BeTheme - Best Html Theme Ever"><img
                                    class="scale-with-grid" src="{{asset('admins')}}/images/letgo.png"/>
                            </a>
                        </div>
                        <!-- Main menu-->
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-main-menu" class="menu">
                                    <li>
                                        <a href="{{route('home')}}"><span>Home</span></a>

                                    </li>

                                    @php($parentCategories= \App\Http\Controllers\HomeController::categorylist())
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Categories
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($parentCategories as $rs)
                                                <a href="{{route('categoryproducts' , ['id'=>$rs->id , 'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                <br>
                                                @if(count($rs->children))
                                                    @include('home.categorytree', ['children'=>$rs->children])
                                                @endif

                                            @endforeach
                                        </div>
                                    </li>

                                    <li>
                                        <a href="{{route('home')}}"><span>Campains</span></a>

                                    </li>


                                    <li>
                                        <a href="{{route('references')}}"><span>References</span></a>

                                    </li>
                                    <li>
                                        <a href="{{route('faq')}}"><span>FAQ</span></a>

                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}"><span>Contact</span></a>

                                    </li>
                                    <li>
                                        <a href="{{route('aboutus')}}"><span>About Us</span></a>

                                    </li>


                                </ul>
                            </nav>
                            <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                        </div>
                        <!-- Secondary menu area - only for certain pages -->
                        <div class="secondary_menu_wrapper">
                            <nav id="secondary-menu" class="menu-secondary-menu-container">
                                <ul id="menu-secondary-menu" class="secondary-menu">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="#">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="#">My Account</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <!-- Banner area - only for certain pages-->
                        <div class="banner_wrapper">
                            <a href="#" target="_blank"><img src="images/468x60.gif">
                            </a>
                        </div>

                        <div class="top_bar_right">
                            <div class="top_bar_right_wrapper">

                            @auth
                                @php($shopCount = \App\Models\Shopcart::where('user_id','=',\Illuminate\Support\Facades\Auth::id())->count())
                                <!-- Shopping cart icon-->
                                    <a id="header_cart" href="{{route('user_shopcart')}}"><i
                                            class="icon-basket"></i><span>{{$shopCount}}</span></a><a id="search_button"
                                                                                                      href="#">

                                        <!--wpml flags selector-->
                                        @endauth
                                        <div class="wpml-languages enabled">
                                            @auth
                                                <span>{{Auth::user()->name}}</span><br>
                                            @endauth
                                            @guest()
                                                <a href="/login">Login</a>/<a href="/register ">Join</a>
                                            @endguest
                                                <br><br>
                                            <ul class="wpml-lang-dropdown">

                                                <li>
                                                    <a href="{{route('myprofile')}}">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('user_shopcart')}}">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('logout')}}">Logout</a>
                                                </li>
                                            </ul>
                                        </div>

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</header>

</div>

