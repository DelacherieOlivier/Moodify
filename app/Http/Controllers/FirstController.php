<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\ForgotPasswordController;


class FirstController extends Controller
{

    public function index(){

        if(Auth::id()){
            $user=User::findOrFail(Auth::id());
            return view("firstcontroller.index", [ "utilisateur"=>$user ]);
        }else{
            return view("firstcontroller.index",  [ "active"=> "accueil" ]);
        }



    }

    public function connexion(){
        return view("auth.login");
    }

    public function inscription(){
        return view("auth.register");
    }

    public function resetmdp(){
        return view("auth.passwords.reset");
    }

    public function showLinkRequestForm(){
        return view('auth.passwords.email');
        $this->validate($request, ['email' => 'required|email']);
    }

    public function utilisateur($id){
        $u = User::findOrFail($id);

        if(Auth::id()){
            $user=User::findOrFail(Auth::id());
            return view("firstcontroller.utilisateur", ['utilisateurr' => $u, "utilisateur"=>$user]);
        }else{
            return view("firstcontroller.utilisateur", ['utilisateurr' => $u,"utilisateur"=>'anonyme']);

        }
    }

    public function updateutilisateur(Request $request){
        $request->validate([
            'email' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:255',
        ]);

        if($request->file('avatar')){
            $name= $request->file('avatar')->hashName();
            $request->file('avatar')->move("uploads/".Auth::id(), $name);
        }


        Auth::user()->email=$request->input('email');
        Auth::user()->password=bcrypt($request->input('password'));
        if($request->file('avatar')){
            Auth::user()->url_avatar="/uploads/".Auth::id()."/".$name;
        }
        Auth::user()->save();

        return back();
    }


    public function erreur() {
        $user=User::findOrFail(Auth::id());
        return view('errors.404', ["utilisateur"=>$user]);

    }
}
