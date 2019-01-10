<?php
$hostname = "localhost";
    $dbname = "proyecto_multimedia";
    $username = "root";
    $pw = "";
    try{
    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname; charset=utf8","$username","$pw");
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }
     

?>
