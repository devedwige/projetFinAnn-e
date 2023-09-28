<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Consultation;
use App\Models\Vaccination;
use App\Models\Suivi;
use App\Models\Rende;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerSave(Request $request)
    {
    $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'centre' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
          User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'matricule' => $request->matricule,
            'centre' => $request->centre,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => 2
        ]);

        return redirect()->route('login')->with('succes', 'Inscription réussie ! Veuillez vous connecter.');
    }
    public function login()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'matricule' => ['required'],
            'password' => ['required'],
        ]);


         $recuperation = DB::select('select role_id  from users where matricule=?',[$request->input('matricule')]);

         if (Auth::attempt($credentials) && $recuperation[0]->role_id === 2) {
             $request->session()->regenerate();
             return redirect()->intended('service');
         } elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 3) {
             $request->session()->regenerate();
             return redirect()->intended('service');
         }elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 4 ){
            $request->session()->regenerate();
            return redirect()->intended('admin');
         }

        return back()->withErrors([
        'matricule' => 'Identifiants incorrects.',
    ])->onlyInput('matricule');
}
    public function service()
    {
        return view('service');
    }

// pour la fiche de consultation
public function consultation()
{
    $success = session('success'); // Récupère le message de succès de la session

    return view('consultation', compact('success'));
}
// pour la consultation

public function consultationSave(Request $request)
{
    Validator::make($request->all(), [
        'code' => 'required',
        'centre' => 'required',
        'phone' => 'required',
        'description' => 'required'
    ])->validate();

    Consultation::create([
        'code' => $request->code,
        'centre' => $request->centre,
        'phone' => $request->phone,
        'description' => $request->description,
        // 'user_id' => $request->user_id
    ]);

    return redirect()->route('consultation')->with('success', 'Consultation enregistrée avec succès !');
}

// pour la vaccination
    public function vaccination()
     {
          return view('vaccination');
      }
      public function vaccin()
      {
           return view('vaccin');
       }
        public function polio()
      {
           return view('polio');
       }
       public function agent()
       {
            return view('agent');
    }
// pour se deconnecter
    public function logout(Request $request)
 {
         Auth::guard('web')->logout();

        $request->session()->invalidate();

         return redirect('/');
 }
    // pour les vaccins
 public function vac()
    {
         return view('vac');
     }
     public function vaccinationSave(Request $request)
{
    // Validator::make($request->all(), [
    //     'code' => 'required',
    //     'centre' => 'required',
    //     'phone' => 'required',
    //     'vaccin' => 'required',
    //     'description' => 'required',
    //     'autre' => 'required'
    //  ])->validate();

    Vaccination::create([
        'code' => $request->code,
         'centre' => $request->centre,
         'phone' => $request->phone,
         'vaccin' => $request->vaccin,
         'description' => $request->description,
         'autre' => $request->autre

        // 'description' => $request->description,
        // 'autre' => $request->autre

        // 'user_id' => $request->user_id
    ]);

    return redirect()->route('vac')->with('success', 'Vaccination enregistrée avec succès !');
}

public function suivi()
{
     return view('suivi');
 }

 public function suiviSave(Request $request)
 {
     // Validator::make($request->all(), [
     //     'code' => 'required',
     //     'centre' => 'required',
     //     'phone' => 'required',
     //     'vaccin' => 'required',
     //     'description' => 'required',
     //     'autre' => 'required'
     //  ])->validate();

     Suivi::create([

        'code' => $request->code,
        'centre' => $request->centre,
        'niveau' => $request->niveau,
        'poids' => $request->poids,
        'appreciation' => $request->appreciation,
        'taille' => $request->taille,
        'appreciation1' => $request->appreciation1,
        'autre' => $request->autre,
        'appreciation2' => $request->appreciation2,
         // 'user_id' => $request->user_id
     ]);

     return redirect()->route('suivi')->with('success', 'Formulaire de suivi de croissance soumis avec succès!');
 }

 public function rende()
{
     return view('rende');
 }
 public function rendeSave(Request $request)
 {
     // Validator::make($request->all(), [
     //     'code' => 'required',
     //     'centre' => 'required',
     //     'phone' => 'required',
     //     'vaccin' => 'required',
     //     'description' => 'required',
     //     'autre' => 'required'
     //  ])->validate();

     Rende::create([

        'code' => $request->code,
        'centre' => $request->centre,
        'description' => $request->description,

         // 'user_id' => $request->user_id
     ]);

     return redirect()->route('rende')->with('success', 'Rendez-vous enregistrée avec succès !');
 }









}
