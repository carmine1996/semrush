<?php

namespace Inc\Controller;

use Inc\Model\Recensioni;

class RecensioniController{
    public static function index(){
        $users = new Recensioni();
        return $users->allReviews();
    }

    public function createRecensione(){
        $utente = new Recensioni;

        $params = array(
            'nome'=>'Carmine',
            'cognome'=> 'Rossi',
            'email' => 'info@carmine.it',
            'descrizione' => 'questo è un sito bellissimo');

        $utente->create( $params );
    }
}