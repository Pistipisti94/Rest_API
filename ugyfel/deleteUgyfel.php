<?php
$azon = $_POST["azon"];
require_once './database.php';
$SQL = "DELETE FROM `ugyfel` WHERE azon = ?" ;
$stmt = $connection->prepare($SQL);
$stmt->bind_param("i", $azon);
if ($stmt->execute()) {
http_response_code(201);
echo 'Sikeresen törölve';
}else {
http_response_code(404);
echo'Nope';
}
