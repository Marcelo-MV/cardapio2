<?php
require_once "./conexao.php";
$consulta = "SELECT * FROM menus";
$consulta_cardapio = $conn->prepare($consulta);
$consulta_cardapio->execute();
// echo "<pre>";
$resultado = $consulta_cardapio->fetchAll(PDO::FETCH_ASSOC);
for($i=0, $tamanho= count($resultado); $i< $tamanho; ++$i ){
unset($resultado[$i]["id"]);
}

// var_dump($resultado);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   for($i=0, $tamanho= count($resultado); $i< $tamanho; ++$i ){
    unset($resultado[$i]["id"]);

    foreach ($resultado[$i] as $chave=> $valor ) {
     
            echo " $valor<br>";
        }       
    }
    
    ?>
    
</body>
</html>

