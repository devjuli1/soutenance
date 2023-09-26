<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function storeTemoignages(Request $request){
      
          User::create([
            'comment'=>$request->commentaire,
            'user_id'=>Auth::user()->id,
          ]);
          return redirect('espaceAdmin');
        }
    
}

