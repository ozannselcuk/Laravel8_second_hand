<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shopcart;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function countshopcart(){  //Her yerden çağırabiliyoruz

        return Shopcart::where('user_id',Auth::id())->count();
    }

    public static function shopcart(){  //Her yerden çağırabiliyoruz


        return Shopcart::where('user_id',Auth::id())->get();
    }


    public function index()
    {
        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_shopcart',['shopcartitem' => $shopcartitem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = Shopcart::where('product_id',$id)->where('user_id',Auth::id())->first();
        if ($data){
            $data->stock = $data->stock + $request->input('stock');
        }else{

            $data=new Shopcart;
            $data->user_id =Auth::id();
            $data->product_id =$id;
            $data->stock = $request->input('stock');
        }

        $data->save();
        return redirect()->back()->with('success','Product add to shopcart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopcart $shopcart, $id)
    {
        $data = Shopcart::find($id);
        $data->stock = $request->input('stock');

        $data->save();

        return redirect()->back()->with('success','Change the quantity Succesfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        $data = Shopcart::find($id);
        $data->delete();
        return redirect()->back()->with('success','Deleted Product from Shopcart');
    }
}
