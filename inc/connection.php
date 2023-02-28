<?php

$password = "j3J8mbYeeF2FkqR";
$username = "wwoodsba_wwoodsballard";
$database = "wwoodsba_portfolio";
$servername = "localhost";


try {
    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch (Exception $e) {
    echo "error connecting to database";
    echo $e->getMessage();
    exit;
}