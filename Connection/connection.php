<?php

$_DBNAME = 'cadastro';
$_HOST   = 'localhost';
$_USER   =  'root';
$_PASS   = 'root';

try{
    $conn = new PDO("mysql:host=" . $_HOST . ";dbname=" . $_DBNAME, $_USER, $_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    die("Falha ao conectar: ". $e->getMessage());
}

?>