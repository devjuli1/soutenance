<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fontController extends Controller
{
    public function indexRegister(){
        return view('index');
    }
    public function aboutRegister(){
        return view('about');
    }
    public function serviceRegister(){
        return view('service');
    }
    public function priceRegister(){
        return view('prix');
    }
    public function contactRegister(){
        return view('contact');
    }
    public function proposRegister(){
        return view('A_propos');
    }


    public function temoignageRegister(){
        return view('..Offres/temoignages');
    }
    public function specialiteRegister(){
        return view('..Offres/specialite_infos');
    }
    public function rechercheRegister(){
        return view('..Offres/recherche');
    }
    public function RDVRegister(){
        return view('..Offres/RDV');
    }
    public function categorieRegister(){
        return view('..Offres/categorie');
    }
}
