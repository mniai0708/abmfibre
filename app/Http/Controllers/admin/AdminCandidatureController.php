<?php

namespace App\Http\Controllers\admin;

use App\Models\Offre;
use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidatAcceptMail;

class AdminCandidatureController extends Controller
{
    public function index()
    {

        $candidatures = Candidature::all();



        return view('admin.pages.candidature', [
            "candidatures" => $candidatures,
        ]);
    }
    public function destroy($id){
        $candidature = candidature::find($id);
        $candidature->delete();
        return back()->with('error','Candidature supprimé !');

    }

    public function sendAcceptMail(Candidature $candidature)
    {

        $email = $candidature['email'];

        Mail::to($email)->send(new CandidatAcceptMail($candidature));

        $candidature->etat = "accepte";
        $candidature->save();

        return back()->with('success', 'Email envoyé');
    }
}
