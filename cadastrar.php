<?php
include_once "./conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <?php
   $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   if(!empty($dados["CadPrato"])){
       var_dump($dados);
       $query_usuario = "INSERT INTO menus (titulo, descricao, preco) VALUES (:titulo, :descricao, :preco)";
    $cad_usuario = $conn-> prepare ($query_usuario);
    $cad_usuario->bindParam(":titulo", $dados['titulo']);
    $cad_usuario->bindParam(":descricao", $dados['descricao']);
    $cad_usuario->bindParam(":preco", $dados['preco']);
    $cad_usuario ->execute();
    if($cad_usuario->rowCount()){
        echo "usuario cadastrado com sucesso!!<br>";
    }else{
        echo "Erro: Usuario não cadastrado!";
    }
   }
    ?>
    <form name="cad-prato" method="POST" action="">
        <label for="">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="Nome do novo prato"><br>
        <label for="">Descrição:</label>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição do prato"><br>
        <label for="">Preço:</label>
        <input type="text" name="preco" id="preco" placeholder="Valor do prato"><br>
        <input type="submit" value="Cadastrar" name="CadPrato">
        
    </form>
    
</body>
</html>