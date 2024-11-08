<?php

namespace Inc\Utils;

class DB{

    private static $instance = null;
    private $conn;

    private $host = '127.0.0.1'; // ip o localhost nel caso il db si trova sul server locale
    private $user = 'root';
    private $password = ''; //vuota-- xampp non la richiede
    private $db = 'semrush';

    private function __construct(){
        $this->conn = new \mysqli($this->host, $this->user, $this->password, $this->db);
    }

    public function __destruct(){
        $this->conn->close();
    }

    public static function getInstance(){
        if( self::$instance === null ){
            self::$instance = new DB;
        }

        return self::$instance;
    }

    public function connect(){
        return $this->conn;
    }

    public function execute($query){
        
        if( $this->conn->query($query) ){
            $query_return = $this->conn->query($query);
        }else{
            die( 'errore' );
        }
        return $query_return;
    }

}

