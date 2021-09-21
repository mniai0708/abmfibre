<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\serviceRequest;

class AdminServiceController extends Controller
{
    public function index(){
        $services = Service::all();

        return view('admin.pages.services',
        ["services" =>$services]);
    }

    public function store(serviceRequest $request){

        $services= New Service();

        $services->titre= $request->input('titre');
        $services->contenu= $request->input('contenu');
        $services->image= $request->input('image');

        $services->save();
        session()->flash('success','Service enregistré !');
        return redirect(route('admin.service.index'));


    }
}
