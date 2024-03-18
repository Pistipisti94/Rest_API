<?php
//$azon = $_POST["azon"];
//$nev = $_POST["nev"];
//$szulev = $_POST["szulev"];
//$irszam = $_POST["irszam"];
//$orsz = $_POST["orsz"];
$azon = 2008;
$nev = "PalMa";
$szulev = 1888;
$irszam = 4004;
$orsz = "Ro";
require_once './database.php';
$SQL = "Insert into ugyfel (azon, nev, szulev, irszam, orsz) values ($azon, $nev, $szulev, $irszam, $orsz)";
$stmt = $connection->prepare($SQL);
$stmt->bind_param("isiis", $azon,$nev,$szulev,$irszam,$orsz);
if ($stmt->execute()) {
http_response_code(201);
echo 'Sikeresen hozzáadva';
}else {
http_response_code(404);
echo'Nope';
}
echo '<center><h1>post ÜGYFELEK</h1></center>';
