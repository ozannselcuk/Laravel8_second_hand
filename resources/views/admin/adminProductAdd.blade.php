@extends('layouts._admin')
@section('title','Product Add')
@section('javascript')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection
@section('content')


    <div class="card-body">
        <h3>Add Product</h3>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_product_store')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Category</span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="category_id">
                            <option value="0" selected="selected">Main Porduct</option>
                            @foreach($datalist as $rs)
                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Title</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-email" name="title" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Keyword</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-email" name="keyword" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Description</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-email" name="description" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Price</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="price" value="0">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Quantity</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="quantity" value="1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Minquantity</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="minquantity" value="5" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Tax</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-email" name="tax" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Detail</span>
                    </label>
                    <div class="col-lg-6">
                        <textarea name="detail"> </textarea>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Slug</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-email" name="slug" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Image</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="file" class="form-control" id="val-email" name="image" >
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Status</span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="staatus">
                            <option selected="selected">False</option>
                            <option >True</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Add Product</button>

                    </div>
                </div>
            </form>
        </div>
    </div>




    <script>
        CKEDITOR.replace( 'detail' );
    </script>

@endsection
