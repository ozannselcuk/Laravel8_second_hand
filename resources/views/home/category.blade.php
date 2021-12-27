@php

$parentCategories= \App\Http\Controllers\HomeController::categorylist()
@endphp

    <li  class="@if(!isset($page))show-on-click @endif">
        <a href="home-modern-header.html"><span>Categories</span></a>

        <ul class="sub-menu">
            @foreach($parentCategories as $rs)
                <li>
                    <a href="home-modern-header.html"><span>{{$rs->title}}</span></a>

                    @if(count($rs->children))

                        @include('home.categorytree',['children'=>$rs->children])

                    @endif

                </li>
            @endforeach
        </ul>
    </li>


