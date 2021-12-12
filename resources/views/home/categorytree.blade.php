@foreach($children as $subcategory)
<ul>
    @if(count($subcategory->children))
        <li>{{$subcategory->title}}</li>
        <ul class="sub-menu">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>
        <hr>
    @else
        <li><a href="{{route('categoryproducts' , ['id'=>$subcategory->id , 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
    @endif
</ul>




@endforeach
