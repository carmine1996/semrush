<?php

namespace Inc\Controller;

use Inc\Model\User;

class UserController{
    public static function index(){
        $users = new User();
        return $users->allUsers();
    }

    public function creaUtente(){
        $utente = new User;

        $params = array('Carmine', 'Rossi', 'pass_test', 'dasifmsjms');

        $utente->create( $params );
    }
}