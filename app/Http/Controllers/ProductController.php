<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datalist= Product::where('user_id', Auth::id())->get();
//        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_product', ['datalist'=>$datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist=Category::with('children')->where('staatus','=','True')->get();
//        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_product_create', ['datalist'=>$datalist]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->status = $request->input('status');
        $data->categories_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->stock = $request->input('stock');
        $data->tax = $request->input('tax');
        $data->detail = $request->input('detail');

        $data->save();
        return redirect()->route('user_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
//        $datalist = Shopcart::where('user_id',Auth::id())->get();
//        return view('home.user_shopcart',['datalist' => $datalist]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Product $product)
    {
        $data=Product::find($id);
        $datalist=Category::with('children')->where('staatus','=','True')->get();
//        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_product_edit', ['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Product $product)
    {
        $data=Product::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        if($request->file('image')!=null){
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->status = $request->input('status');
        $data->categories_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->stock = $request->input('stock');
        $data->tax = $request->input('tax');
        $data->detail = $request->input('detail');
        $data->save();

        return redirect()->route('user_product')->with('succes', 'Product Added Succesfuly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Product $product)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('user_product');

    }
}
