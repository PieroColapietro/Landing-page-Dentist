<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {

        return view('welcome');
    }

    public function chisiamo(){
        
        return view('chisiamo');
    }

    public function contacts(){

        return view('contatti');
    }

        public function submit(Request $req){
            
            $user = $req->input('user');
            $phone = $req->input('phone');
            $email = $req->input('email');

            $contact = compact('user' , 'phone');

            Mail::to($email)->send(new ContactMail($contact));

            return redirect(route('homepage'))->with('message' , 'Grazie! La tua richiesta è stata inoltrata e verrai contattato al più presto!');
    }
}