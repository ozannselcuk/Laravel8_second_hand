@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
<footer id="Footer" class="clearfix">
    <!-- Footer - First area -->

    <div class="widgets_wrapper">
        <div class="container">
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-7" class="widget widget_text">
                    <div class="textwidget">

                        <strong>Company:</strong> {{$setting->company}}<br>
                        <strong>Address:</strong> {{$setting->address}}<br>
                        <strong>Phone:</strong>   {{$setting->phone}}<br>
                        <strong>fax:</strong>    {{$setting->fax}}<br>
                        <strong>Email:</strong>   {{$setting->email}}<br>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Recent Comments Area -->

            </div>
            <div class="one-fourth column">
                <!-- Recent posts -->
                <aside class="widget widget_mfn_recent_posts">
                    <h4>Latest posts</h4>
                    <div class="Recent_posts">
                        <ul>
                            <li class="post">
                                <a href="blog-single-content-builder.html">
                                    <div class="photo"><img width="80" height="80" src="images/beauty_80x80.jpg" class="scale-with-grid wp-post-image" /><span class="c">4</span>
                                    </div>
                                    <div class="desc">
                                        <h6>Content builder for posts</h6><span class="date"><i class="icon-clock"></i>May 13, 2015</span>
                                    </div>
                                </a>
                            </li>
                            <li class="post format-image">
                                <a href="blog-single-vertical-photo.html">
                                    <div class="photo"><img width="80" height="80" src="images/80x80.jpg" class="scale-with-grid wp-post-image" /><span class="c">0</span>
                                    </div>
                                    <div class="desc">
                                        <h6>Post with vertical photo</h6><span class="date"><i class="icon-clock"></i>May 13, 2015</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-8" class="widget widget_text">
                    <h4>Some features</h4>
                    <div class="textwidget">
                        <ul class="list_mixed">
                            <li class="list_check">
                                Suspendisse a pellentesque dui, non felis.
                            </li>
                            <li class="list_star">
                                Quisque lorem tortor fringilla sed.
                            </li>
                            <li class="list_idea">
                                Quisque cursus et, porttitor risus.
                            </li>
                            <li class="list_check">
                                Nulla ipsum dolor lacus, suscipit.
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Footer copyright-->
    <div class="footer_copy">
        <div class="container">
            <div class="column one">
                <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                <div class="copyright">
                    All rights reserved && {{$setting->company}}
                </div>


            </div>
        </div>
    </div>
</footer>
