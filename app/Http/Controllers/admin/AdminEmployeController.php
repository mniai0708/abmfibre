<?php

namespace App\Http\Controllers\admin;

use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\employeRequest;

class AdminEmployeController extends Controller
{
    public function index(){
        $employes = Employe::all();
        return view('admin.employes',[
            "employes"=>$employes
        ]
        );


    }

    public function store(employeRequest $request){
        $employe = new Employe();

        $employe->nom = $request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->telephone = $request->input('telephone');
        $employe->email = $request->input('email');
        $employe->adresse = $request->input('adresse');
        $employe->image = $request->input('image');


        $employe->save();
        session()->flash("success","Employé ajouté !");
        return redirect(route('admin.employe.index'));

    }
}
