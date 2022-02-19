<?php

if (isset($_POST['submit']))
{

    include_once('conecta.php');

    $nome = $_POST['nome'];
    $nomusu = $_POST['nomusu'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,nomUsuario,senha) 
    VALUES ('$nome','$nomusu','$senha')");

    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
   
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />

</head>
<body>
    <div class="box">
        <form action="formulario.php" method=POST>
            <fieldset>
                <legend>Formulário de Cadastro</legend>
                <br>
                <div class="inputBox2">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox2">
                    <input type="text" name="nomusu" id="nomeusu" class="inputUser" required>
                    <label for="email" class="labelInput">Nome de usuário</label>
                </div>
                <br><br>
                <div class="inputBox2">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Crie sua senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
