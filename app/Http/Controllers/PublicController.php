<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            
            $user=$req->input('user');
            $phone=$req->input('phone');
            $email=$req->input('email');

            $contact = compact('user' , 'phone');

            Mail::to($email)->send(new ContactMail($contact));

            return redirect(route('homepage'))->with('message' , 'Grazie! La tua richiesta è stata inoltrata e verrai contattato al più presto!');
    }

    // servizi

    public function servizi() {
        $services = [
    
            ['title' => 'Ortodonzia' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv1.jpg' , 'price' => '50$'],
            ['title' => 'Estetica Dentale' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv2.jpg' , 'price' => '150$'],
            ['title' => 'Protesi Dentali' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv3.jpg' , 'price' => '200$'],
            ['title' => 'Implantologia' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv4.jpg' , 'price' => '300$'],
            ['title' => 'Paradontologia' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv5.jpg' , 'price' => '300$'],
        ];
        return view('servizi' , ['services' => $services]);
    }

    public function detail($title) {

        $services = [
    
            ['title' => 'Ortodonzia' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv1.jpg' , 'price' => '50$'],
            ['title' => 'Estetica Dentale' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv2.jpg' , 'price' => '150$'],
            ['title' => 'Protesi Dentali' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv3.jpg' , 'price' => '200$'],
            ['title' => 'Implantologia' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv4.jpg' , 'price' => '300$'],
            ['title' => 'Paradontologia' , 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti libero sapiente eius, vel sunt placeat at architecto sint quidem enim nemo incidunt ipsa! Accusamus voluptates repellat laboriosam incidunt. Magnam, nemo?' , 'img' => '/img/serv5.jpg' , 'price' => '300$'],
        ];
    
        foreach ($services as $service) {
            if($service['title'] == $title) {
    
                return view('dettaglio' , ['service'=>$service]);
            }
        }
    }
    
}