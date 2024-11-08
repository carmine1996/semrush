<?php

use Inc\Model\User;
use Inc\Controller\UserController;

/* $token = bin2hex(openssl_random_pseudo_bytes(64));
var_dump($token); */

/* if ( $_SERVER['PHP_AUTH_USER'] == 'carmine' && $_SERVER['PHP_AUTH_PW'] == 'test' ) {
    //echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    //echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
} else {
    
    header('HTTP/1.0 403 Unauthorized');
    exit;
} */

spl_autoload_register(function( $class ){
    require_once( __DIR__ . DIRECTORY_SEPARATOR . $class . '.php' );
});

$user = new User;

/* Qui gestisco tramite il GET in php le interfaccie da mostrare */

if( $stpos_uri = strpos( $_SERVER['REQUEST_URI'], '?' ) ){
    $request_uri = substr( $_SERVER['REQUEST_URI'], 0, $stpos_uri );
}else{
    $request_uri = $_SERVER['REQUEST_URI'];
}
define('SITE_URL', 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
define('ASSETS_PATH', 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'/resources/assets/');
define('MEDIA_PATH', 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'/resources/media/');


    switch ( $request_uri ) {
        /* case '/semrush/admin/prodotti':
            require 'resources/views/admin/prodotti/prodotti.php';
            break;
        case '/semrush/admin/prodotti-edit':
            require 'resources/views/admin/prodotti/prodotti.edit.php';
            break;
        case '/semrush/admin/prodotti-crea':
            require 'resources/views/admin/prodotti/prodotti.crea.php';
            break;
        case '/semrush/admin/ordini':
            require 'resources/views/admin/ordini/ordini.php';
            break;
        case '/semrush/admin/ordini-crea':
            require 'resources/views/admin/ordini/ordini.crea.php';
            break;
        case '/semrush/admin/ordini-edit':
            require 'resources/views/admin/ordini/ordini.edit.php';
            break; */
        case '/semrush/admin/utenti':
            $utenti = new UserController();
            $utenti->creaUtente();
            $utenti = UserController::index();
            require 'resources/views/admin/utenti/utenti.php';
            break;
        case '/semrush/admin/utenti-crea':
            require 'resources/views/admin/utenti/utenti.crea.php';
            break;
        case '/semrush/admin/utenti-edit':
            require 'resources/views/admin/utenti/utenti.edit.php';
            break;
        case '/semrush/admin':
            require 'resources/views/admin/index.php';
            break;
        case '/semrush/admin/login':
            require 'resources/views/admin/login.php';
            break;
        default:
            require 'resources/views/layout/home.php';
            break;
    }