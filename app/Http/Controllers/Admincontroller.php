<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller  extends Controller

{


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
             return redirect()->intended('vaccination');
         }elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 4 ){
            $request->session()->regenerate();
            return redirect()->intended('login');
         }

        return back()->withErrors([
        'matricule' => 'Identifiants incorrects.',
    ])->onlyInput('matricule');
 }

//  public function index()
//  {
//      $users = User::all();
//      return view('user.dashboard', compact('users'));
//  }
}
