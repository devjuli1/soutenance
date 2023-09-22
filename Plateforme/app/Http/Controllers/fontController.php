<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fontController extends Controller
{
    // component menu/ start menu
    public function indexRegister(){
        return view('index');
    }
    public function serviceRegister(){
        return view('..services/service');
    }
    // component services
    public function RDVRegister(){
        return view('..services/RDV');
    }
    public function temoignageRegister(){
        return view('..services/temoignages');
    }
    public function offreRegister(){
        return ('Offre');
    }

// component offre
    public function categorieRegister(){
        return view('..Offre/categorie');
    }
    public function specialisteRegister(){
        return view('..Offre/specialiste');
    }
    public function themeRegister(){
        return view('..Offre/theme_psy');
    }

// end menu
    public function aboutRegister(){
        return view('/propos');
    }
    public function blogRegister(){
        return view('/blog');
    }
    public function contactRegister(){
        return view('/contact');
    }
    public function rechercheRegister(){
        return view('/recherche');
    }
    
// dashbords
    public function homeClient(){
        return view('..dashbord/espaceClient');
    }
    public function homePsy(){
        return view('..dashbord/espacePsy');
    }
    public function homeAdmin(){
        return view('..dashbord/espaceAdmin');
    }

// component admin
    public function listPsychologue(){
        return view('..admin/list_psy');
    }
    public function listClient(){
        return view('..admin/list_client');
    }
    
   
   
}
