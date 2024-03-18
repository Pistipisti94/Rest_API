<!DOCTYPE html>
<!--
tagdij Database
GET http://localhost/Rest_API/index.php?ugyfel -> minden ugyfel
GET http://localhost/Rest_API/index.php?ugyfel/(id) -> adott id ugyfel
POST http://localhost/Rest_API/index.php?ugyfel -> letrehoz ugyfel
PUT http://localhost/Rest_API/index.php?ugyfel/(id) -> adott id ugyfel valtoztatas
DELETE http://localhost/Rest_API/index.php?ugyfel/(id) -> adott id ugyfel torles
-->
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest API Backend</title>
</head>
<body>
    <pre>
    <?php 
    //var_dump($_SERVER['REQUEST_METHOD']);
    //var_dump($_SERVER['QUERY_STRING']);
    $keresSzoveg = explode('/',$_SERVER['QUERY_STRING']);
    if ($keresSzoveg[0] ==='ugyfel') {
        require_once 'ugyfel/index.php';
    }else
    {
        http_response_code(404);
        echo '404 Not Found';
        echo '<br>';
        echo 'Nincs ilyen API';
    }
    ?>
    </pre>
</body>
</html>