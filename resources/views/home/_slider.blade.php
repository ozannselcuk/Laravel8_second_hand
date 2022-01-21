<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="featured-carousel owl-carousel">
                @foreach($last as $la)
                    <div class="item">
                        <div class="work-wrap d-md-flex">
                            <div class="img order-md-last" >
                                <img src="{{\Illuminate\Support\Facades\Storage::url($la->image)}}" height="100%" style="height: 100% !important;" alt="{{$la->id}}">
                            </div>
                            <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center ">
                                <div class="desc w-100">
                                    <h2 class="mb-4">{{$la->title}}</h2>


                                    <div class="row justify-content-end">
                                        <div class="col-xl-8">
                                            <p> {{$la->description}}</p>
                                        </div>
                                    </div>
                                    <p>
                                      <a href="{{route('product',['id'=>$la->id, 'slug'=>$la->slug])}}"><button type="button" class="btn btn-dark mb-2 py-3 px-4">Product Detail</button></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
