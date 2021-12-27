@extends('layouts._admin')
@section('title','Category Edit')

@section('content')




    <div class="card-body">
        <h3>Edit Category</h3>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post" novalidate="novalidate">
             @csrf
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Parent</span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="parent_id">
                            <option value="{{$data->parent_id}}" selected="selected"></option>
                            <option value="0" >Main Category</option>
                            @foreach($datalist as $rs)
                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected"@endif >{{$rs->title}}
                            {{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs,$rs->title)}}
                            </option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Title</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{$data->title}}" class="form-control" id="val-email" name="title" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Keyword</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{$data->keyword}}" class="form-control" id="val-email" name="keyword" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Description</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{$data->description}}" class="form-control" id="val-email" name="description" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Slug</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{$data->slug}}" class="form-control" id="val-email" name="slug" >
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Status</span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="staatus">
                            <option selected="selected">{{$data->status}}</option>
                            <option >False</option>
                            <option >True</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Update Category</button>

                    </div>
                </div>
            </form>
        </div>
    </div>






@endsection
