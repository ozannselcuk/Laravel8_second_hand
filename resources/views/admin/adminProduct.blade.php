@extends('layouts._admin')
@section('title','Product')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 >Product List</h3>
                <br><br>
                <a class="label gradient-1 rounded" href="{{route('admin_product_add')}}">Add Product</a>
                <div class="table-responsive">
                    <table class="table header-border">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title(s)</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td> {{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs->categories,$rs->categories['title'])}}</td>
                                <td>{{$rs->title}}</td>
                                <td> {{$rs->quantity}}</td>
                                <td>{{$rs->price}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="150" alt="">
                                    @endif
                                    </td>
                                <td><a href="{{route('admin_image_add', ['product_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50, left=100 ,widht=1100,height=700')"><img src="{{asset('admins/images')}}/gallery.png" height="35"></a></td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"><span class="label gradient-1 rounded">Edit</span></a></td>
                                <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><span class="label gradient-1 rounded">Delete</span></a></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>









@endsection
