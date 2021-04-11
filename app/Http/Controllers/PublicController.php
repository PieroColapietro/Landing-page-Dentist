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
    
            ['title' => 'Ortodonzia' , 'description' => "Ortodonzia è la disciplina odontoiatrica che si occupa dello studio, della diagnosi e della terapia della posizione anomala di uno o più elementi dentali, per il danno che questa alterazione porta sulla estetica del volto e sulle funzioni della respirazione, masticazione e fonazione." , 'img' => '/img/serv1.jpg' , 'price' => '50$'],
            ['title' => 'Estetica Dentale' , 'description' => "La odontoiatria estetica è generalmente utilizzata per riferirsi a qualsiasi lavoro dentale che migliora ogni aspetto (anche se non la funzionalità) di denti, gengive o morso. Si concentra sul miglioramento della estetica dentale e aspetto generale del sorriso" , 'img' => '/img/serv2.jpg' , 'price' => '150$'],
            ['title' => 'Protesi Dentali' , 'description' => "Una protesi dentaria è un manufatto, realizzato da un odontotecnico abilitato, sotto la guida di un odontoiatra, utilizzata per aggiustare la dentatura originaria persa o compromessa per motivi funzionali e/o estetici. Gli impianti sono usati per supportare le protesi dentali." , 'img' => '/img/serv3.jpg' , 'price' => '200$'],
            ['title' => 'Implantologia' , 'description' => 'Per implantologia (dentale) si intende un insieme di tecniche chirurgiche atte a riabilitare funzionalmente un paziente affetto da edentulismo totale o parziale mediante per utilizzo di impianti dentali ovverosia dispositivi, metallici e non, inseriti chirurgicamente nell osso.' , 'img' => '/img/serv4.jpg' , 'price' => '300$'],
            ['title' => 'Paradontologia' , 'description' => 'La parodontologia è una branca della odontoiatria che studia i tessuti del parodonto e le patologie ad esso correlate. Il parodonto è costituito da gengiva, osso alveolare, cemento radicolare (tessuto che ricopre la radice del dente) e legamento parodontale' , 'img' => '/img/serv5.jpg' , 'price' => '300$'],
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