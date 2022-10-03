<?php

$host = "localhost";
$user = "root";
$pass = "12345678";
$dbname = "cardapio";
$port = 3306;

//CONEXAO COM BANCO DE DADOS
$conn = new PDO("mysql:host=$host;dbname=".$dbname,$user, $pass);
// var_dump($conn);
?>