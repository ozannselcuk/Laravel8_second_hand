@extends('layouts._admin')
@section('title','Category')

@section('content')

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 >Category List</h3>
                <br><br>
                <a class="label gradient-1 rounded" href="{{route('admin_category_add')}}">Add Category</a>
                <div class="table-responsive">
                    <table class="table header-border">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Parent</th>
                            <th>Title(s)</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                               <td>{{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs,$rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td> {{$rs->staatus}}</td>
                                <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"><span class="label gradient-1 rounded">Edit</span></a></td>
                                <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><span class="label gradient-1 rounded">Delete</span></a></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>









@endsection
