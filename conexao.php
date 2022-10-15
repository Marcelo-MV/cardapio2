<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cardapio";
$port = 3306;

//CONEXAO COM BANCO DE DADOS
$conn = new PDO("mysql:host=$host;dbname=".$dbname,$user, $pass);
// print_r($conn);
?>