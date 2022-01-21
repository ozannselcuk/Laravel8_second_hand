@extends('layouts._admin')
@section('title','Reviews')
@include('home.messages')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h3 >Message List</h3>
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
                                <td>{{$rs->user_id}}</td>
                                <td>{{$rs->product_id}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->IP}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><span class="label gradient-1 rounded">Delete</span></a></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>









@endsection
