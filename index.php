<?php
/**
 * This is the root file of Project
 */

define('ROOT_PATH', '/home');

$address = parse_url($_SERVER['REQUEST_URI']);

$page_requested = ($address['path'] == '/') ? ROOT_PATH : substr($address['path'],0  ); 

if ( !empty($page_requested) ) {
    if (file_exists('pages' . $page_requested . '.php')) {
        include('pages' . $page_requested . '.php');
    } else {
        include('pages/404.php');
    }
} 