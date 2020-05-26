<?php

namespace App\Http\Controllers;

use App\User;
use App\Calendrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\ForgotPasswordController;


class FirstController extends Controller
{

    public function index(){

        if(Auth::id()){
            $user=User::findOrFail(Auth::id());
            $calendrier=$user->calendrier;
            return view("firstcontroller.index", [ "utilisateur"=>$user , "calendrier"=>$calendrier]);
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
            $calendrier=$user->calendrier;
            return view("firstcontroller.utilisateur", ['utilisateurr' => $u, "utilisateur"=>$user,"calendrier"=>$calendrier]);
        }else{
            return view("firstcontroller.utilisateur", ['utilisateurr' => $u,"utilisateur"=>'anonyme',"calendrier"=>$calendrier]);

        }
    }

    public function proposition(){
            $user=User::findOrFail(Auth::id());
            $calendrier=$user->calendrier;
            return view("firstcontroller.proposition", ["utilisateur"=>$user,"calendrier"=>$calendrier] );
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

   public function addmood(Request $request){

            $c = new Calendrier();
            $c-> jour = $request->input('jour');
            $c-> mood = $request->input('mood');
            $c-> mois = $request->input('mois');
            $c-> user_id = Auth::id();
            $c->save();
            return redirect('/');

    }

    public function erreur() {
        $user=User::findOrFail(Auth::id());
        return view('errors.404', ["utilisateur"=>$user]);

    }
}
