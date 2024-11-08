<?php

namespace Inc\Model;

use Inc\Utils\DBabstract;

class User extends DBabstract{

    public $tabella = 'utenti';
    public $colonne = [
        'nome', 'cognome', 'email', 'password'
    ];

    public function __construct(){
        $params = array( 
            'id' => 'int(255) auto_increment PRIMARY KEY',
            'nome' => 'varchar(30)',
            'cognome' => 'varchar(30)',
            'password' => 'varchar(255)',
            'email' => 'varchar(30)',
            'created_at' => 'timestamp default current_timestamp()',
            'updated_at' => 'timestamp default current_timestamp() on update current_timestamp()',
        );
        return $this->table($params);
    }

    public function allUsers(){
        return $this->selectAll();        
    }

}