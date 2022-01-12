@extends('layouts._admin')
@section('title','Contact Message')
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Admin Note</th>

                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td> {{$rs->email}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->message}}</td>
                                <td>{{$rs->note}}</td>
                                <td>{{$rs->status}}</td>
                               <td><a href="{{route('admin_message_edit', ['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50, left=100 ,widht=1100,height=700')"><img src="{{asset('admins/images')}}/edit.png" height="35"></a></td>
                                <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><span class="label gradient-1 rounded">Delete</span></a></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>









@endsection
