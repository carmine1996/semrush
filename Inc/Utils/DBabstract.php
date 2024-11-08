<?php

namespace Inc\Utils;

use Inc\Utils\DB;

abstract class DBabstract{
    
    public function table( array $params ){

        $colonne = '';

        $i = 1;
        foreach ($params as $campo => $attributi) {
            if( $i < count( $params ) ){
                $colonne .= "$campo $attributi,";
            }else{
                $colonne .= "$campo $attributi";
            }
            
            $i++;
        }

        $sql = "CREATE TABLE IF NOT EXISTS $this->tabella ( $colonne )";

        $db = DB::getInstance();
        $db->execute($sql);
    }
    public function create( array $params ){

        foreach ($params as $key => $value) {
            $colonne[] = $key;
            $parametri[] = $value;
        }

        $colonne = implode( ',', $this->colonne );
        $parametri = implode( "','", $params );

        $sql = "INSERT INTO $this->tabella ( $colonne ) VALUES ( '$parametri' )";

        $db = DB::getInstance();
        $db->execute($sql);
    }
    public function update( int $id, array $params ){

    }
    public function delete( int $id ){

    }
    public function show( int $id ){

    }
    public function selectAll(){
        $sql = "SELECT * FROM $this->tabella";

        $db = DB::getInstance();
        $select = $db->execute($sql);

        $results = [];

        if( $select->num_rows > 0 ){
            while ($record = $select->fetch_assoc() ) {
                $results[] = $record;
            }
        }

        return $results;
        
    }
}