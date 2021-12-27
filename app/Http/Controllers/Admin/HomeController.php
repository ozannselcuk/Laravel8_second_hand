<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\default_ca_bundle;
use function MongoDB\BSON\toCanonicalExtendedJSON;

class HomeController extends Controller
{
    //
    public function index(){
        return view('admin.adminHome');

    }
    public function adminLogin(){
        return view('admin.adminLogin');

    }

    public function loginCheck(Request $request){


        if ($request->isMethod( 'post')){
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided crendentials do not match our records',
            ]);
        }
        else{
            return view('admin.login');
        }

    }
    public function adminLogout(Request $request){
        Auth::logout();
        $request -> session()->invalidate();
        $request -> session()->regenerateToken();
        return redirect('/');

    }


}
