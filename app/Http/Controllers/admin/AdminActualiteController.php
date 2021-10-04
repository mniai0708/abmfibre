<?php

namespace App\Http\Controllers\admin;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\actualiteRequest;

class AdminActualiteController extends Controller
{
    public function index(){
        $actualites = Actualite::all();
        return view("admin.pages.actualites",
                    ["actualites"=>$actualites]);

    }
    public function store(actualiteRequest $request){
        $actualite= new Actualite();

        $actualite->titre=$request->input('titre');
        $actualite->description=$request->input('description');
        $actualite->image=$request->input('image');

        $actualite->save();
        session()->flash('success','Actualité enregistrée !');
        return redirect(route('admin.actualites.store'));

    }
}