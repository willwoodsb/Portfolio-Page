<?php

// $password = "j3J8mbYeeF2FkqR";
// $username = "willwoodsba_wwoodsballard";
// $database = "wwoodsba_portfolio";
// $servername = "localhost:3306";

$password = "";
$username = "root";
$database = "portfolio";
$servername = "localhost";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database", 'root', '');
} catch (Exception $e) {
    echo "error connecting to database";
    echo $e->getMessage();
    exit;
}