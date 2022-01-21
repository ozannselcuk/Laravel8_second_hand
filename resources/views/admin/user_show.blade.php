<html>
<body><!-- plugins:js -->
<script src="{{asset('assets')}}/admin/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('assets')}}/admin/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/admin/js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets')}}/admin/js/dashboard.js"></script>
<script src="{{asset('assets')}}/admin/js/data-table.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/admin/js/dataTables.bootstrap4.js"></script>

<!-- Single Product Detail -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/single-product-detail.css">

<!-- Price Slider.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/price-slider-1.12.1.css">
<!-- Nivo Slider.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/nivo-slider-3.2.css">
<!-- Nice.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/nice-select.css">
<!-- Slick Nav.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/slicknav-1.0.10.min.css">
<!-- Animated.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/animate.min.css">
<!-- Owl.carousel.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/owl.carousel-2.3.4.min.css">
<!-- Fontawesome.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/fontawesome-free-5.12.0.min.css">

<!-- Fontawesome.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/font-awesome.min.css">

<!-- Bootstrap.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/bootstrap-4.3.1.min.css">

<!-- Default.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/default.css">
<!-- Style.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/main.css">
<!-- Responsive.css -->
<link rel="stylesheet" href="{{asset('assets')}}/Home/css/responsive.css">


<!-- Jquery -->
<script src="{{asset('assets')}}/Home/js/jquery-1.12.4.min.js"></script>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2></h2>

                <div class="x_content">
                    @include('home.message')

                    <table id="datatable" class="table table-striped table-bordered"
                           style="width:100%">

                        <tr>

                            <th rowspan="8" >
                                @if($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}"
                                         style="border-radius: 10px; height:250px; width:250px">
                                @endif
                            </td>

                            </th> <th>ID</th><td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>

                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id])}}"
                                                   onclick="return confirm('Are you sure?')"><img
                                                        style="height: 35px; width: 35px"
                                                        src="{{asset('assets')}}/Home/img/delete.png"> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form action="{{route('admin_user_role_add', ['id' => $data->id])}}" method="post">
                                    @csrf
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"> {{$rs->name}} </option>
                                        @endforeach
                                    </select>
                                    <button type="submit"> Add Role</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
