<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator; // Ajout de l'import pour Validator
use App\Models\User;
use App\Models\Vaccination;
use App\Models\Suivi;
use App\Models\Consultation;
use App\Models\Rende;
use App\Models\Code_user;

class Enfantcontroller extends Controller
{
    public function enfant()
    {
        return view('enfant');
    }
    public function enfantSave(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'date_naissance' => 'required',
            'nom_prenom_pere' => 'required',
            'nom_prenom_mere' => 'required',
            'centre' => 'required',
            'phone' => 'required|numeric|digits_between:8,16' // Ajout de la validation pour le téléphone
        ])->validate();

        if(strlen($request->phone) !== 8 && strlen($request->phone) !== 16) {
            return redirect()->back()->withErrors(['phone' => 'Le numéro de téléphone doit contenir 8 chiffres ou 16 chiffres']);
        }
        $password = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'nom_prenom_pere' => $request->nom_prenom_pere,
            'nom_prenom_mere' => $request->nom_prenom_mere,
            'phone' => $request->phone,
            'centre' => $request->centre,
            'password' => Hash::make($password), // Hasher le mot de passe
            // 'code'=> $password,
            'role_id' => 1
        ]);

        Code_user::create([
            'code'=> $password,
            'user_id' => $user->id
        ]);

        $successMessage = 'Inscription de ' . $request->prenom . ' réussie. Veuillez utiliser ce code unique pour faire une consultation, une vaccination,le suivi de croissance , ou les rendez vous: ' . $password;
        return redirect()->route('service')->with('success', $successMessage);
    }

    public function croissance()
    {
        return view('croissance');
    }

    // public function admin()
    // {
    //     $users = User::paginate(6); // Vous spécifiez ici que vous souhaitez paginer par groupes de 6 utilisateurs
    //     return view('admin', compact('users'));
    // }
    public function admin()
    { $users = User::all();
        $userCount = $users->count(); // Assurez-vous que $userCount est défini
        return view('admin', compact('users'));
    }

    public function adminvac()
    { $vaccinations = Vaccination::all();
        return view('adminvac',compact('vaccinations')
        );
    }

    public function adminagent()
    {
         $users = User::where('role_id', 2)->get();
        return view('adminagent',compact('users')
        );
    }

    public function adminparent()
    {
         $users = User::where('role_id', 3)->get();
        return view('adminparent',compact('users')
        );
    }

    public function adminsuivis()
    { $suivis = Suivi::all();
        return view('adminsuivis',compact('suivis')
        );
    }

    public function adminconsultation()
    { $consultations = Consultation::all();
        return view('adminconsultation',compact('consultations')
        );
    }

    public function adminrende()
    { $rendes = Rende::all();
        return view('adminrende',compact('rendes')
        );
    }

    public function statistique()
    {
        $totalEnfantsInscrits = User::where('role_id', 1)->count();
        $enfantsVaccines = Vaccination::count();
        $enfantsSuivis = Suivi::count();
        $enfantsConsultes = Consultation::count();
        $enfantsRendes = Rende::count();


        // dd($totalEnfantsInscrits); // Vérifiez la valeur

        return view('statistique', [
            'totalEnfantsInscrits' => $totalEnfantsInscrits,
            'enfantsVaccines' => $enfantsVaccines,
            'enfantsSuivis' => $enfantsSuivis,
            'enfantsConsultes' => $enfantsConsultes,
            'enfantsRendes' => $enfantsRendes,
        ]);
    }








}
