<?php

/**
 * 
 */

$address = $_SERVER['REQUEST_URI'];

if ( !empty($address) ) {
    if (file_exists('pages' . $address . '.php')) {
        include('pages' . $address . '.php');
    } else if( $address === '/' ){
        include('pages/home.php');
    } else {
        include('pages/404.php');
    }
} 