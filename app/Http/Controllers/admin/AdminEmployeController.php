<?php

namespace App\Http\Controllers\admin;

use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\employeRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
        $employe->poste = $request->input('poste');
        $employe->telephone = $request->input('telephone');
        $employe->email = $request->input('email');
        $employe->adresse = $request->input('adresse');

           // $employe->image = $request->file('image')->store('photos');
           //$employe->image = Storage::putFile('photos', $request->file('image'));

            if ($request->hasFile('image')) {
                //Alors on le stocke
                $employe->image= $request->image->store('images');
            }



        $employe->save();
        session()->flash("success","Employé ajouté !");
        return redirect(route('admin.employe.index'));
    }

    public function update(employeRequest $request, $id){
        $employe= Employe::find($id);
        $employe->nom=$request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->poste = $request->input('poste');
        $employe->telephone = $request->input('telephone');
        $employe->email = $request->input('email');
        $employe->adresse = $request->input('adresse');
        if ($request->hasFile('image')) {
            $employe->image = $request->image->store('image');
        }

        $employe->save();
        return redirect(route(''));
    }

    public function destroy($id){
        $employe= Employe::find($id);
        $employe->delete();
        return redirect(route('admin.employe.index'));
    }
}
