<?php
    session_start();
    unset($_SESSION['Nome de usuário'] = $Nome de usuário);
    unset($_SESSION['senha'] = $senha);
    header('location: index.php');
?>
