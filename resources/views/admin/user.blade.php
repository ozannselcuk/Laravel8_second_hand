@extends('layouts._admin')
@section('tittle','Users Page')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2 class=" mb-4">Users</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}" class="mdi mdi-home"></a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User Tables</h4>

                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Roles</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                @if($rs->profile_photo_path)
                                                    <img src="{{Storage::url($rs->profile_photo_path)}}"
                                                         style="border-radius: 10px; height:50px; width: 50px">
                                                @endif
                                            </td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->address}}</td>
                                            <td>@foreach($rs->roles as $row)
                                                    {{$row->name}},
                                                @endforeach
                                                <a href="{{route('admin_user_role', ['id' =>$rs->id])}}"
                                                   onclick="return !window.open(this.href, '', 'top=50 left=100 width=900, height=600')">
                                                    <i class="mdi mdi-plus-circle"> </i></a>
                                            </td>

                                            <td><a href="{{route('admin_user_edit', ['id'=>$rs->id])}}"
                                                   class="mdi mdi-pencil-box-outline"/></td>
                                            <td><a href="{{route('admin_user_delete', ['id'=>$rs->id])}}"
                                                   onclick="return confirm('Are you sure?')" class="mdi mdi-delete"/>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
