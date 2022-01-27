@extends('layouts._admin')
@section('title','Product Add')
@section('javascript')

@endsection
@section('content')




    <div class="card-body">
        <h3>Edit Product</h3>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Category</span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="category_id">
                            <option value="0" selected="selected">Main Porduct</option>
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected"@endif >
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Title</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control"  value="{{$data->title}}" id="val-email" name="title" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Keyword</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" value="{{$data->keywords}}" id="val-email" name="keywords" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Description</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" value="{{$data->description}}" id="val-email" name="description" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Price</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="price" value="{{$data->price}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Quantity</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="quantity" value="{{$data->quantity}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Minquantity</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="minquantity" value="{{$data->minquantity}}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Tax</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control"  value="{{$data->tax}}" id="val-email" name="tax" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Detail</span>
                    </label>
                    <div class="col-lg-6">
                        <textarea id="summernote" name="detail"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Slug</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control"  value="{{$data->slug }}" id="val-email" name="slug" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Image</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="file" class="form-control" value="{{$data->image}}" id="val-email" name="image" >
                        @if($data->image)
                            <img src="{{Storage::url($data->image)}}" height="150" alt="">
                        @endif

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Status</span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="status">
                            <option selected="selected">{{$data->status}}</option>
                            <option >True</option>
                            <option>False</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Edit Product</button>

                    </div>
                </div>
            </form>
        </div>
    </div>






@endsection
