<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public static function categorylist(){
       return Category::where('parent_id','=',0)->with('children')->get();

   }
    public static function getsetting(){
        return Setting::first();

    }
 public function index(){

     $setting = Setting::first();
     return view('home.home',["setting"=>$setting]);
 }

    public function login(){
        return view('admin.login');
    }



    public function logout(Request $request){
        Auth::logout();
        $request -> session()->invalidate();
        $request -> session()->regenerateToken();
        return redirect('/');

    }
    public function aboutus(){
        $setting = Setting::first();
        return view('home.aboutus',["setting"=>$setting]);
    }
    public function references(){
        $setting = Setting::first();
        return view('home.references',["setting"=>$setting]);
    }
    public function faq(){
        $setting = Setting::first();
        return view('home.faq',["setting"=>$setting]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact');
    }
    public function send_message(Request $request){
       $data= new Message();
        $data->name=$request->input('name' );
        $data->email=$request->input('email' );
        $data->phone=$request->input('phone' );
        $data->subject=$request->input('subject' );
        $data->message=$request->input('message' );
        $data->save();
        return redirect()->route('contact');

    }
}
