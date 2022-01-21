@php
    $setting= \App\Http\Controllers\HomeController:: getsetting();
@endphp
@extends('layouts.homeLayout')

@section('tittle', 'User Product')
@section('content')

    <section class="contact-area gray-bg pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-30">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav>
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">My Profile</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-9">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product Create</h4>
                                <p class="card-description">
                                    Products
                                </p>
                                <form role="form" enctype="multipart/form-data" action="{{route('user_product_store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Parent</label>
                                            <select class="form-control" id="exampleSelectParent" name="category_id">


                                                    <option value="1">Bilgisayar</option>
                                                <option value="11">Laptop</option>
                                                <option value="15">Buzdolabı</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail3" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Keywords</label>
                                            <input type="text" name="keywords" class="form-control" id="exampleInputPassword4" placeholder="Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Description</label>
                                            <input type="text" name="description" class="form-control" id="exampleInputPassword4" placeholder="Description">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Price</label>
                                            <input type="number" name="price" class="form-control" id="exampleInputPassword4" placeholder="price">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Stock</label>
                                            <input type="number" name="stock" class="form-control" id="exampleInputPassword4" placeholder="stock">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Tax</label>
                                            <input type="number" name="tax" class="form-control" id="exampleInputPassword4" placeholder="tax">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Details</label>
                                            <textarea name="details" class="form-control" id="editor" placeholder="details"></textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#editor' ) )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Slug</label>
                                            <input type="text" name="slug" class="form-control" id="exampleInputPassword4" placeholder="Slug">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Image</label>
                                            <input type="file" name="image" class="form-control" id="exampleInputPassword4" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Status</label>
                                            <select class="form-control" id="exampleSelectGender" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2">Submit Creating</button>
                                            <a class="btn btn-light" href="{{route('user_product')}}">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
