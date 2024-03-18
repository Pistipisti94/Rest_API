<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':       
        require_once 'ugyfel/getUgyfelek.php';
        break;

    case 'POST':
        # code...
        break;
    case 'PUT':
        # code...
        break;
    case 'DELETE':
        # code...
        break;

    default:
        # code...
        break;
}
