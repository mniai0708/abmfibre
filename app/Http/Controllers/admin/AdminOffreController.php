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
        //$offre = new Offre();
        $offree= new Offre();
        $mission = new Mission();

        $offree->titre=$request->input('titre');
        $offree->description=$request->input('description');
        $offree->profil_recherche=$request->input('profil_recherche');
        $offree->contrat=$request->input('contrat');
        $offree->salaire=$request->input('salaire');
        $offree->infocompl=$request->input('infocompl');
        $offree->save();

        $mission->parent_id = $offree->id;
        $mission->contenu=$request->input('contenu1');
        $mission->contenu=$request->input('contenu2');
        $mission->contenu=$request->input('contenu3');
        $mission->contenu=$request->input('contenu4');
        $mission->contenu=$request->input('contenu5');
        $mission->contenu=$request->input('contenu6');


        $mission->save();

        session()->flash('success','Offre enregistrée !');
        return redirect(route('admin.offre.store'));

    }
}
