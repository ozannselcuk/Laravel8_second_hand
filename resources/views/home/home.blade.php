@extends('layouts.homeLayout')

@section('title','Second Hand E-Commerce')
@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="section">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one woocommerce-content">
                                <div class="shop-filters">
                                    <p class="woocommerce-result-count">
                                        Showing 1–12 of 15 results
                                    </p>
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected='selected'>Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="products_wrapper isotope_wrapper">
                                    <ul class="products grid">
                                        <li class="product isotope-item sale">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="70" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <span class="onsale"><i class="icon-star"></i></span><a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Flying Ninja</a></h4>
                                                <div class="star-rating" title="Rated 4.00 out of 5">
                                                    <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><del><span class="amount">&#36;15.00</span>
                                                    </del> <ins><span class="amount">&#36;12.00</span></ins>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts outofstock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links">
                                                        <a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Happy Ninja</a></h4>
                                                <div class="star-rating" title="Rated 5.00 out of 5">
                                                    <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;18.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item featured shipping-taxable product-type-external product-cat-clothing product-cat-hoodies instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links">
                                                        <a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Happy Ninja 2</a></h4>
                                                <div class="star-rating" title="Rated 3.00 out of 5">
                                                    <span style="width:60%"><strong class="rating">3.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;35.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="282" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Ninja Silhouette</a></h4>
                                                <div class="star-rating" title="Rated 5.00 out of 5">
                                                    <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;20.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="289" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Ninja Silhouette</a></h4>
                                                <div class="star-rating" title="Rated 4.00 out of 5">
                                                    <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;35.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="287" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Patient Ninja</a></h4>
                                                <div class="star-rating" title="Rated 4.67 out of 5">
                                                    <span style="width:93.4%"><strong class="rating">4.67</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;35.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="280" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Premium Quality</a></h4>
                                                <div class="star-rating" title="Rated 4.50 out of 5">
                                                    <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;20.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="291" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <span class="onsale"><i class="icon-star"></i></span><a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Premium Quality</a></h4>
                                                <div class="star-rating" title="Rated 2.00 out of 5">
                                                    <span style="width:40%"><strong class="rating">2.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><del><span class="amount">&#36;15.00</span>
                                                    </del> <ins><span class="amount">&#36;12.00</span></ins>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-variable product-cat-clothing product-cat-t-shirts instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links">
                                                        <a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Ship Your Idea</a></h4>
                                                <div class="star-rating" title="Rated 4.33 out of 5">
                                                    <span style="width:86.6%"><strong class="rating">4.33</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;20.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item sale shipping-taxable purchasable product-type-variable product-cat-clothing product-cat-hoodies instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links">
                                                        <a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <span class="onsale"><i class="icon-star"></i></span><a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Ship Your Idea</a></h4>
                                                <div class="star-rating" title="Rated 4.00 out of 5">
                                                    <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><del><span class="amount">&#36;35.00</span>
                                                    </del> <ins><span class="amount">&#36;30.00</span>&ndash;<span class="amount">&#36;35.00</span></ins>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-posters instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="290" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Ship Your Idea</a></h4><span class="price"><span class="amount">&#36;15.00</span></span>
                                            </div>
                                        </li>
                                        <li class="product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">
                                            <div class="image_frame scale-with-grid product-loop-thumb">
                                                <div class="image_wrapper">
                                                    <a href="product-page.html">
                                                        <div class="mask"></div> <img width="500" height="500" src="images/500x500.jpg" class="scale-with-grid wp-post-image" /> </a>
                                                    <div class="image_links double">
                                                        <a href="#" rel="nofollow" data-product_id="1171" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product-page.html"><i class="icon-link"></i></a>
                                                    </div>
                                                </div>
                                                <a href="product-page.html"><span class="product-loading-icon added-cart"></span></a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="product-page.html">Woo Logo</a></h4>
                                                <div class="star-rating" title="Rated 4.00 out of 5">
                                                    <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                                </div>
                                                <span class="price"><span class="amount">&#36;35.00</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- One full width row-->
                                <div class="column one pager_wrapper">
                                    <!-- Navigation Area -->
                                    <div class="pager">
                                        <div class="pages">
                                            <span class='page-numbers current'>1</span><a class='page-numbers' href='#'>2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="widget-area clearfix">
                    <aside class="widget woocommerce widget_shopping_cart">
                        <h3>Shopping Cart</h3>
                        <div class="widget_shopping_cart_content"></div>
                    </aside>
                    <aside id="woocommerce_layered_nav-2" class="widget woocommerce widget_layered_nav">
                        <h3>Filter by</h3>
                        <ul>
                            <li>
                                <a href="#">Black</a><small class="count">2</small>
                            </li>
                            <li>
                                <a href="#">Blue</a><small class="count">1</small>
                            </li>
                            <li>
                                <a href="#">Green</a><small class="count">1</small>
                            </li>
                        </ul>
                    </aside>

                    <aside class="widget woocommerce widget_product_categories">
                        <h3>Product Categories</h3>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-35">
                                <a href="shop.html">Clothing</a>
                            </li>
                            <li class="cat-item cat-item-36">
                                <a href="shop.html">Hoodies</a>
                            </li>
                            <li class="cat-item cat-item-45">
                                <a href="shop.html">Posters</a>
                            </li>
                            <li class="cat-item cat-item-41">
                                <a href="shop.html">T-shirts</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget woocommerce widget_products">
                        <h3>Products</h3>
                        <ul class="product_list_widget">
                            <li>
                                <a href="product-page.html" title="Woo Logo"> <img width="200" height="200" src="images/200x200.jpg" class="attachment-shop_thumbnail wp-post-image" /> Woo Logo </a><span class="amount">&#36;15.00</span>
                            </li>
                            <li>
                                <a href="product-page.html" title="Premium Quality"> <img width="200" height="200" src="images/200x200.jpg" class="attachment-shop_thumbnail wp-post-image" /> Premium Quality </a><del><span class="amount">&#36;15.00</span></del><ins><span class="amount">&#36;12.00</span></ins>
                            </li>
                            <li>
                                <a href="product-page.html" title="Flying Ninja"> <img width="200" height="200" src="images/200x200.jpg" class="attachment-shop_thumbnail wp-post-image" /> Flying Ninja </a><del><span class="amount">&#36;15.00</span></del><ins><span class="amount">&#36;12.00</span></ins>
                            </li>
                            <li>
                                <a href="product-page.html" title="Ship Your Idea"> <img width="200" height="200" src="images/200x200.jpg" class="attachment-shop_thumbnail wp-post-image" /> Ship Your Idea </a><span class="amount">&#36;15.00</span>
                            </li>
                            <li>
                                <a href="product-page.html" title="Woo Logo"> <img width="200" height="200" src="images/200x200.jpg" class="attachment-shop_thumbnail wp-post-image" /> Woo Logo </a><span class="amount">&#36;35.00</span>
                            </li>
                        </ul>
                    </aside>

                </div>
            </div>
        </div>
    </div>









@endsection
