<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
        $request->validate([
           'username'=>'required',
           'password'=>'required'
        ]);
        //login success
        if(Auth::attempt([
            'username'=>$request->username,
            'password'=>$request->password
        ])){
            return redirect(route('admin.dashboard'));
        }

        //lgout from the app
//        Auth::logout();
        $request->flash();
        return back()->with([
            'error'=>"Nom d'utilisateur ou mot de passe est invalide."
        ]);
    }
}
