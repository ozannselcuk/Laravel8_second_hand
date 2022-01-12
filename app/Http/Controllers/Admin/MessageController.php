<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist =Message::all();
        return view('admin.adminMessage',['datalist' => $datalist]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messsage  $messsage
     * @return \Illuminate\Http\Response
     */
    public function show(Messsage $messsage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messsage  $messsage
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message , $id)
    {
        $data= Message::find($id);
        $data->status='Read';
        $data->save();
        return view('admin.adminMessageEdit',['data'=>$data ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messsage  $messsage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message,$id)
    {
        $data=Message::find($id);
   $data->note = $request->input('note');
        $data->save();
        return back()->with('succes','Message Updates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messsage  $messsage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message, $id)
    {
        $data=Message::find($id);
        $data->delete();
        return redirect()->route('admin_message')->with('Succes','Message Deleted');
    }
}
