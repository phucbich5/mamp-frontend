<?php
define('THEME','themes/');
define('PHP', '.php');
$url = $_SERVER['REQUEST_URI'];
$path_url = explode('/',$url);
define('BASE_URL','http://'.$_SERVER['HTTP_HOST'].'/'.$path_url[1]) . '/';  

$page = !empty($_GET['lp']) ? $_GET['lp'] : 'home';
$header = THEME . 'partials/header' . PHP;
$footer = THEME . 'partials/footer' . PHP;

if(file_exists($path = THEME . $page . PHP)) {
    include_once $header;
    include_once $path;
    include_once $footer;
    die;
}