

<html>
<head>
    <link href="{{asset('admins')}}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('admins')}}/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('admins')}}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admins')}}/css/style.css" rel="stylesheet">
   <title>Order Son DURUM</title>
</head>
<body>




<div class="card-body">
        <h3>Orders Situaiton</h3><br>
        <h4>User:{{$data->user->name}}</h4>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
             @csrf

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Address</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-email" value="{{$data->address}}" name="address" >
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Note</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="note" >
                    </div>
                </div>

                <div class="form-group">
                    <label>Durum</label>
                    <select value="status" id="status" name="status" class="form-control">
                        <option selected>{{$data->status}}</option>
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Güncelle</button>

                    </div>
                </div>
            </form>
            <table class="table header-border">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title(s)</th>
                    <th>Image</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->product->title}}</td>
                        <td>
                        </td>

                        <td>
                    </tr>
                @endforeach
            </tbody>
                </table>
        </div>
    </div>

</body>
</html>


