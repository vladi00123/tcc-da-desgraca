<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['Nome de usuário'])) && !empty($_POST['senha'])
    {
        //Acessa
        include_once('conectar.php')
        $Nome de usuário = $_POST['Nome de usuário'];
        $senha = $_POST['senha'];

       // print_r('Nome de usuário: ' . $Nome de usuário);
       // print_r('<br>');
       // print_r('senha: ' . $senha);

       $sql="SELECT * FROM usuarios WHERE email = '$Nome de usuário' and senha = '$senha'";

       $result = $conexão->query($sql);

       // print_r($sql);
       // print_r($result);

       if(mysqli_num_rows($result)< 1)
       {
          unset($_SESSION['Nome de usuário'] = $Nome de usuário);
          unset($_SESSION['senha'] = $senha);
          header('location: index.php'); 
       }
       else
       {
           $_SESSION['Nome de usuário'] = $Nome de usuário;
           $_SESSION['senha'] = $senha;
          header('location: sistema.php');
       }
    }
    else
    {
        //Não acessa
        header('location:index.php');
    }

?>
