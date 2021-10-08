<?php

namespace App\Http\Controllers\admin;

use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\employeRequest;
class AdminEmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();
        return view('admin.employes',[
            "employes"=>$employes
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(employeRequest $request)
    {
        $employe = new Employe();

        $employe->nom = $request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->poste = $request->input('poste');
        $employe->telephone = $request->input('telephone');
        $employe->email = $request->input('email');
        $employe->adresse = $request->input('adresse');
        $employe->image = $request->input('image');


        $employe->save();
        session()->flash("success","Employé ajouté !");
        return redirect(route('admin.employe.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(employeRequest $request, $id)
    {
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
            return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
