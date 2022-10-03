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
   if(!empty($dados["CadUsuario"])){
       var_dump($dados);
       $query_usuario = "INSERT INTO usuarios (nome,email) VALUES ('".$dados['nome']."', '".$dados['email']."')";
    $cad_usuario = $conn-> prepare ($query_usuario);
    $cad_usuario ->execute();
   }
    ?>
    <form name="cad-usuario" method="POST" action="">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo"><br>
        <label for="">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail"><br>

        <input type="submit" value="Cadastrar" name="CadUsuario">
        
    </form>
    
</body>
</html>