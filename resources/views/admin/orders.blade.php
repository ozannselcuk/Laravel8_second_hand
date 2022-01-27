@extends('layouts._admin')
@section('title','Orders')
@include('home.messages')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h3 >Order List</h3>
                <br><br>

                <div class="table-responsive">
                    <table class="table header-border">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>IP</th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->user->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->address}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->IP}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a onclick="return !window.open(this.href,'','top=50, left=100 ,widht=1100,height=700')" href="{{route('admin_order_show',['id'=>$rs->id])}}"><span class="label gradient-1 rounded">Edit</span></a></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>









@endsection
