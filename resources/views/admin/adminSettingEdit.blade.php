@extends('layouts._admin')
@section('title','Setting Edit')


@section('js')

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('content')




    <div class="card-body">
        <h3>Update Settings</h3>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_setting_update')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#general">General</a>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social">Social</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#smtp">SMTP</a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#aboutus">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#contact">Contact</a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#references">References</a>
                                    </li>
                                </ul>
                                <div class="tab-content" >
                                    <div class="tab-pane active show fade" id="general" role="tabpanel">
                                        <div class="p-t-15">
                                            <div class="form-group row">

                                                <input type="text" class="form-control"  value="{{$data->id}}" id="id" name="id" >
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
                                                <label class="col-lg-4 col-form-label">Company</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-email" name="company" value="{{$data->company}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Address</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-email" name="address" value="{{$data->address}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Phone</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-email" name="phone" value="{{$data->phone}}" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Fax</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  value="{{$data->fax}}" id="val-email" name="fax" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Status</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="staatus">
                                                        <option selected="selected">{{$data->staatus}}</option>
                                                        <option >True</option>
                                                        <option>False</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="social">
                                        <div class="p-t-15">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Facebook</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  value="{{$data->facebook}}" id="val-email" name="facebook" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Instagram</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  value="{{$data->instagram}}" id="val-email" name="instagram" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Twitter</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  value="{{$data->twitter}}" id="val-email" name="twitter" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smtp">
                                        <div class="p-t-15">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Smtp server</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  value="{{$data->smtpserver}}" id="val-email" name="smtpserver" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Smtp email</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"  value="{{$data->smtpemail}}" id="val-email" name="smtpemail" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Smtp password</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control"  value="{{$data->smtppassword}}" id="val-email" name="smtppassword" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Smtp port</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="number" class="form-control"  value="{{$data->smtpport}}" id="val-email" name="smtpport" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="aboutus">
                                        <div class="p-t-15">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Aboutus</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact">
                                        <div class="p-t-15">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Contact</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="references">

                                        <div class="p-t-15">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">References</span>
                                                </label>
                                                <div class="col-lg-6">

                                                    <textarea name="reference"></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'reference' );
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Setting</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>







@endsection


