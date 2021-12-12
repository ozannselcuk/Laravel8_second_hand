<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
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
     $daily= Product::select('id','title','image','price','slug')->limit(12)->inRandomOrder()->get();
//     print_r($daily);
//     exit();
      return view('home.home',["setting"=>$setting,"datalist"=>$daily]);

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

    public function product($id,$slug){
       $data = Product::find($id);
        $datalist = Image::where('product_id',$id)-> get();
//       print_r($data);
//       exit();
        return view('home.product_detail',["data"=>$data,'datalist'=>$datalist]);
   }
    public function getproduct (Request $request){
        $data = Product::where('title',$request->input('search'))-> first();
        return redirect()->route('product',['id'=>$data->id , 'slug'=>$data->slug]);
   }

    public function addtocart($id){
       echo "Add to cart<br>";
       $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function categoryproducts ($id,$slug){
        $datalist = Product::where('categories_id',$id)-> get();
        $data = Category::find($id);
//        print_r($data);
//        exit();
        return view('home.categoryproducts',["data"=>$data,'datalist'=>$datalist]);

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
    public function  sendmessage(Request $request){
        $data= new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone =$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->note = $_SERVER['REMOTE_ADDR'];
        $data->save();

        return redirect()->route('contact')->with('success','Your message send successfuly');
    }
}
