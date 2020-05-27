<?php

namespace App\Http\Controllers;

use App\User;
use App\Calendrier;
use App\Happy;
use App\Angry;
use App\Bored;
use App\Stressed;
use App\Sad;
use App\Neutre;
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
            $happy=$user->happy;
            return view("firstcontroller.index", [ "utilisateur"=>$user , "calendrier"=>$calendrier ,"happy"=>$happy ]);
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
            $stressed = Stressed::all();
            return view("firstcontroller.proposition", ["utilisateur"=>$user,"calendrier"=>$calendrier,"stressed"=>$stressed] );
    }
    public function propositionhappy(){
            $user=User::findOrFail(Auth::id());
            $calendrier=$user->calendrier;
            $happy = Happy::all();
            return view("firstcontroller.propositionhappy", ["utilisateur"=>$user,"calendrier"=>$calendrier,"happy"=>$happy] );
    }
    public function propositionsad(){
            $user=User::findOrFail(Auth::id());
            $calendrier=$user->calendrier;
            $sad = Sad::all();
            return view("firstcontroller.propositionsad", ["utilisateur"=>$user,"calendrier"=>$calendrier,"sad"=>$sad] );
    }
    public function propositionangry(){
            $user=User::findOrFail(Auth::id());
            $calendrier=$user->calendrier;
            $angry = Angry::all();
            return view("firstcontroller.propositionangry", ["utilisateur"=>$user,"calendrier"=>$calendrier,"angry"=>$angry] );
    }
    public function propositionneutre(){
            $user=User::findOrFail(Auth::id());
            $calendrier=$user->calendrier;
            $neutre = Neutre::all();
            return view("firstcontroller.propositionneutre", ["utilisateur"=>$user,"calendrier"=>$calendrier,"neutre"=>$neutre] );
    }
    public function propositionbored(){
             $user=User::findOrFail(Auth::id());
             $calendrier=$user->calendrier;
             $bored = Bored::all();
             return view("firstcontroller.propositionbored", ["utilisateur"=>$user,"calendrier"=>$calendrier ,"bored"=>$bored] );
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

        $user=User::findOrFail(Auth::id());
        $calendrier=$user->calendrier;
        if($calendrier ?? ''){
            foreach($calendrier as $c){
                if(Auth::user()->Calendrier->sortByDesc('id')->take(1)->contains($c->id)){
                    $lemood = $c->mood;
                    if( $lemood == "happy" ){
                         return redirect('/propositionhappy');
                    }
                    if( $lemood == "bored" ){
                         return redirect('/propositionbored');
                    }
                    if( $lemood == "angry" ){
                         return redirect('/propositionangry');
                    }
                    if( $lemood == "sad" ){
                         return redirect('/propositionsad');
                    }
                    if( $lemood == "neutral" ){
                         return redirect('/propositionneutre');
                    }
                    if( $lemood == "stressed" ){
                          return redirect('/propositionstressed');
                     }
                }
            }
        }
    }

    public function erreur() {
        $user=User::findOrFail(Auth::id());
        $calendrier=$user->calendrier;
        return view('errors.404', ["utilisateur"=>$user,"calendrier"=>$calendrier]);

    }
}
