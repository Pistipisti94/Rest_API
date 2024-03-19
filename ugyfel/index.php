<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'ugyfel/getUgyfelek.php';
        break;

    case 'POST':
        require_once 'ugyfel/postUgyfel.php';

        break;
    case 'PUT':
        # code...
        break;
    case 'DELETE':
        require_once 'ugyfel/deleteUgyfel.php';
        break;

    default:
        # code...
        break;
}
