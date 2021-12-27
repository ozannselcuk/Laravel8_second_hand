

<html>
<head>
    <link href="{{asset('admins')}}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('admins')}}/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('admins')}}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admins')}}/css/style.css" rel="stylesheet">
   <title>Image Add</title>
</head>
<body>




<div class="card-body">
        <h3>Add Image</h3><br>
        <h4>Product:{{$data->title}}</h4>

        <div class="form-validation">
            <form role="form" class="form-valide" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
             @csrf

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Title</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-email" name="title" >
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-4 col-form-label">Image</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="file" class="form-control" id="val-email" name="image" >
                    </div>
                </div>



                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Add Image</button>

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
                @foreach($images as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="150" alt="">
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure?')"><span class="label gradient-1 rounded">Delete</span></a></td>
                    </tr>
                @endforeach
            </tbody>
                </table>
        </div>
    </div>

</body>
</html>


