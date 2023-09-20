<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsyController extends Controller
{
    public function espace_psy(){
        return view('panel_specialiste/psy');
    }
}

