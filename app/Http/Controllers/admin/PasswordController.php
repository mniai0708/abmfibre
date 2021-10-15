<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function create(){
        return view('admin.pages.password');
    }
    public function update($id, Request $request){
        $admin = User::find($id);

        $oldmdp= $request->input('oldmdp');
        $newmdp= $request->input('newmdp');
        $confmdp = $request->input('confmdp');

        if ($admin->hash('password') == $oldmdp) {
            var_dump($admin->hash('password'));
        }


    }
}
