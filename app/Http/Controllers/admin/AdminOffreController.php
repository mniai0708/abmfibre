<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Offre;

class AdminOffreController extends Controller
{
    public function index(){

        $offres= Offre::all();
        $missions=Mission::all();

        return view('admin.pages.offres',
                     ["offres" => $offres,
                      "missions" => $missions]);
    }

    public function store(Request $request){
        $offres = new Offre();

        $offres->titre=$request->input('titre');
        $offres->description=$request->input('description');
        $offres->profil_recherche=$request->input('profil_recherche');
        $offres->contrat=$request->input('contrat');
        $offres->salaire=$request->input('salaire');
        $offres->infocompl=$request->input('infocompl');

        $offres->save();
        session()->flash('success','Offre enregistrée !');
        return redirect(route('admin.offre.store'));

    }
}
