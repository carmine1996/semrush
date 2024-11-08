<?php

namespace Inc\Model;

use Inc\Utils\DBabstract;

class Recensioni extends DBabstract{

    public $tabella = 'recensioni';
    public $colonne = [
        'nome', 'cognome', 'email', 'descrizione'
    ];

    public function __construct(){
        $params = array( 
            'id' => 'int(255) auto_increment PRIMARY KEY',
            'nome' => 'varchar(30)',
            'cognome' => 'varchar(30)',
            'descrizione' => 'varchar(255)',
            'email' => 'varchar(30)',
            'created_at' => 'timestamp default current_timestamp()',
            'updated_at' => 'timestamp default current_timestamp() on update current_timestamp()',
        );
        return $this->table($params);
    }

    public function allReviews(){
        return $this->selectAll();        
    }

}