@extends('layouts.admin')
@section('tittle','Edit User Page')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2 class=" mb-4">Users</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin_home')}}" class="mdi mdi-home"></a></li>
                            <li class="breadcrumb-item active">User Edit Page</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User Edit</h4>
                            <p class="card-description">
                                User
                            </p>
                            <form role="form" enctype="multipart/form-data" action="{{route('admin_user_update',['id'=>$data->id])}}" method="POST">
                                @csrf
                                <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail3">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$data->name}}" id="exampleInputEmail3" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{$data->email}}" id="exampleInputPassword4" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="{{$data->phone}}" id="exampleInputPassword4" placeholder="Phone">
                                    </div>

                                    <div class="form-group">
                                         <label for="exampleSelectGender">Address</label>
                                         <input type="text" name="address" class="form-control" value="{{$data->address}}" id="exampleInputPassword" placeholder="address">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Image</label>
                                        <input type="file" name="image" class="form-control" id="exampleInputPassword4" >
                                    </div>
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="100" alt="">

                                    @endif

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary mr-2">Submit Editing</button>
                                        <a class="btn btn-light" href="{{route('admin_users')}}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
