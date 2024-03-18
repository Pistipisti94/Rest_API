<?php
$SQL = '';
echo '<h1>ÜGYFELEK</h1>';
//Összes ügyfél adatai JSON-ben
if (count($keresSzoveg) > 1) {
    if(is_int(intval($keresSzoveg[1])))
    {
        echo 'Ügyfél: ' . $keresSzoveg[1];
        $SQL = 'SELECT * FROM ugyfel WHERE azon = ' .  $keresSzoveg[1];
    }
    else
    {
        echo 'Ügyfél: ' . $keresSzoveg[1];
        echo '<br>';
        http_response_code(404);
        echo 'Nem létező ügyfél';
    }

} else {
    echo '<pre>';
    $SQL = 'SELECT * FROM ugyfel where 1';
    echo '</pre>';
}
require_once './database.php';
$result = $connection->query($SQL);
if ($result->num_rows > 0) {
    $ugyfelek = array();
    while ($row = $result->fetch_assoc()) {
        $ugyfelek[] = $row;
    }
    http_response_code(200);
    echo json_encode($ugyfelek);
} else {
    http_response_code(404);
    echo 'Nincs egy ügyfél sem';
}