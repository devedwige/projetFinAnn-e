<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class Parentcontroller extends Controller
{
    public function parent()
    {
        return view('parent');
    }

    // public function parentSave(Request $request)
    // {
    //     Validator::make($request->all(), [
    //         'nom' => 'required',
    //         'prenom' => 'required',
    //         'profession' => 'required',
    //         'ville' => 'required',
    //         'code' => 'required',
    //         'phone' => 'required',
    //          'password' => 'required'
    //     ])->validate();
    //     User::create([
    //         'nom' => $request->nom,
    //         'prenom' => $request->prenom,
    //         'profession' => $request->profession,
    //         'ville' => $request->ville,
    //          'code' => $request->code,
    //         'phone' => $request->phone,
    //         'password' => Hash::make($request->password),
    //         'role_id' => 3
    //     ]);
    //     return redirect()->route('parentlogin')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    // }


    public function parentSave(Request $request)
{
    Validator::make($request->all(), [
        'nom' => 'required',
        'prenom' => 'required',
        'profession' => 'required',
        'ville' => 'required',
        'code' => 'required',
        'phone' => 'required',
        'password' => 'required'
    ])->validate();

    // $code_saisi = $request->code;
    // $password = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

    // if ($code_saisi !== $password) {
    //     return redirect()->back()->with('error', 'Le code ne correspond pas au mot de passe généré.');
    // }

    User::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'profession' => $request->profession,
        'ville' => $request->ville,
        'code' => $request->code,
        'phone' => $request->phone,
        // 'password' => Hash::make($password),
        'password' => Hash::make($request->password),
        'role_id' => 3
    ]);

    return redirect()->route('parentlogin')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
}


 public function parentlogin()
    {
        return view('parentlogin');
    }

 public function parentAction(Request $request)
    {
        $credentials = $request->validate([
            'code' => ['required'],
            'password' => ['required'],
        ]);

         $recuperation = DB::select('select role_id  from users where code=?',[$request->input('code')]);

         if (Auth::attempt($credentials) && $recuperation[0]->role_id === 2) {
             $request->session()->regenerate();
             return redirect()->intended('service');
         } elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 3) {
             $request->session()->regenerate();
             return redirect()->intended('vaccination');
         }elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 4 ){
            $request->session()->regenerate();
             return'admin';
         }

        return back()->withErrors([
        'code' => 'Identifiants incorrects.',
    ])->onlyInput('code');
}

// public function logout(Request $request)
// {
//         Auth::guard('web')->logout();

//        $request->session()->invalidate();

//         return redirect('/');
// }
}
