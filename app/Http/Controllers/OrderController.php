<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Order::where('user_id',Auth::id())->get();
        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_order',['datalist' => $datalist, 'shopcartitem' => $shopcartitem ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $total=$request->input('total');
        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return  view('home.user_order_add',['total'=>$total, 'shopcartitem'=>$shopcartitem]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #kredi kartı bilgileri bankaya gönderildikten sonraki aşama
        $data=new Order();
        $data->total = $request->input('total');
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->user_id =Auth::id();

        $data->IP = $_SERVER['REMOTE_ADDR'];

        $data->save();

        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        foreach ($shopcartitem as $rs){

            $data2= new Orderitem();
            $data2->user_id=Auth::id();
            $data2->product_id= $rs->product_id;
            $data2->order_id= $data->id;
            $data2->price= $rs->product->price;
            $data2->total= $request->input('total');
            $data2->amount= $rs->product->price * $rs->stock;
            $data2->save();

        }
        $data = Shopcart::where('user_id',Auth::id());
        $data->delete();

        return redirect()->route('user_orders')->with('success',' Order successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, $id)
    {
        $datalist= Orderitem::where('user_id',Auth::id())->where('order_id',$id)->get();
        $shopcartitem = Shopcart::where('user_id',Auth::id())->get();
        return  view('home.user_order_products',['datalist'=>$datalist, 'shopcartitem'=>$shopcartitem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, $id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->back()->with('success','Deleted the order');
    }
}
