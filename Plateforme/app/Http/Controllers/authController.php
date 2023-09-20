<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\DB;
use App\Models\User;

class authController extends Controller
{
  public function panel_admin(){
    return view('Admin/admin');
 }
 public function registerPsy(){
    return view('Pages/inscription');
 }

 public function  storePsy(Request $request){  
  //  $request->validate([
  //       'nom' => "required|string",
  //       'prenom' => "required|string",
  //       'photo' => "image|mimes:jpeg,png,jpg",
  //       'ville' => "required|string",
  //       'age' => "required|integer|min:20",
  //       'profession' => "required|string",
  //       'email' => "required|email",
  //       'password'=> "required|string|min:8",
  //      //  'role_id' => 'required|string'
  //  ]);
    if($request->file('photo')){
      $photo=$request->file('photo')->store('public/Images');
      $nom= explode('/',$photo);
      $input['photo']=$nom;
    }
    User::create([
      'nom'=>$request->nom,
      'prenom'=>$request->prenom,
      'photo'=>'dede',
      'ville'=>$request->ville,
      'age'=>$request->age,
      'profession'=>$request->profession,
      'email'=>$request->email,
      'password'=>Hash::make($request->password),
      'role_id'=>2,
    ]);
    return redirect('connexion');
 }
 public function registerClient(){
  return view('Client/inscription');
}
public function  storeClient(Request $request){  
  // $request->validate([
  //      'nom' => "required|string",
  //      'prenom' => "required|string",
  //      'photo' => "image|mimes:jpeg,png,jpg",
  //      'ville' => "required|string",
  //      'age' => "required|integer|min:15",
  //      'profession' => "required|string",
  //      'email' => "required|email",
  //      'password'=> "required|string|min:8",
  //     //  'role_id' => 'required|string'
  // ]);
   if($request->file('photo')){
     $photo=$request->file('photo')->store('public/Images');
     $nom=explode('/',$photo);
     $input['photo']=$nom;
   }
   User::create([
     'nom'=>$request->nom,
     'prenom'=>$request->prenom,
     'photo'=>'nom',
     'ville'=>$request->ville,
     'age'=>$request->age,
     'profession'=>$request->profession,
     'email'=>$request->email,
     'password'=>Hash::make($request->password),
     'role_id'=>3,
   ]);
   return redirect('connexion');
}


 public function connexion(){
  return view('Pages/connexion');
}
 public function connexionClient(Request $request)
 {
       $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
       ]);
 $recuperation =DB::select('select role_id from users where email=?',[$request->input('email')]);
  
 if(Auth::attempt($credentials) && $recuperation[0]->role_id===1){
   $request->session()->regenerate();
   return redirect()->intended('admin');
 } elseif(Auth::attempt($credentials) && $recuperation[0]->role_id===2){
   $request->session()->regenerate();
   return redirect()->intended('..panel_specialiste/psy');
 }elseif(Auth::attempt($credentials) && $recuperation[0]->role_id===3){
   $request->session()->regenerate();
   return redirect()->intended('about');
 }
 
 return back()->withErrors([ 
   'email'=>'email invalide',
   'password'=>'password invalide'
 ]);
 
 }

 public function logout(Request $request){
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();
  return redirect('/connexion');
 }
}