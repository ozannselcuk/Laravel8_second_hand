@extends('layouts._admin')
@section('title','Message Edit')
@section('javascript')
    @include('home.messages')
@endsection
@section('content')




    <div class="card-body">
        <h3>Edit Message</h3>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
                <table class="table header-border">
                    <tr>
                        <th>Id</th><td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th><td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th><td> {{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th><td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                        <th>Subject</th> <td>{{$data->subject}}</td>
                    </tr>
                    <tr>
                        <th>Message</th><td>{{$data->message}}</td>
                    </tr>
                    <tr>
                        <th>Admin Note</th>
                        <td>
                            <textarea id="summernote" name="note">{{$data->note}}</textarea>
                        </td>
                    </tr>
                    <tr>
                      <td></td><td>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Edit Message</button>

                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>






@endsection
