<?php

namespace App\Http\Controllers\admin;

use App\Models\Offre;
use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCandidatureController extends Controller
{
    public function index(){

        $candidatures = Candidature::with("offres")->get();




        return view('admin.pages.candidature',[
                    "candidatures"=>$candidatures,
                    ]);

    }
}
