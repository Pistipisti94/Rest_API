<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Content-Type: application/json; charset=utf-8');

    //var_dump($_SERVER['REQUEST_METHOD']);
    //var_dump($_SERVER['QUERY_STRING']);
    $keresSzoveg = explode('/',$_SERVER['QUERY_STRING']);
    if ($keresSzoveg[0] ==='ugyfel') {
        require_once 'ugyfel/index.php';
    }else
    {
        http_response_code(404);
        echo '404 Not Found';
        echo 'Nincs ilyen API';
    }