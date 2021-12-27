@foreach($children as $subcategory)
<ul>
    @if(count($subcategory->children))
        <li>{{$subcategory->title}}</li>
        <ul class="sub-menu">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>
        <hr>
    @else
        <li><a href="#">{{$subcategory->title}}</a></li>
    @endif
</ul>




@endforeach
