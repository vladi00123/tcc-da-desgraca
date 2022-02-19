<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i aluno</title>
    <style>
        body{
            font-family: arial, helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
       div{
           background-color: rgb(0, 0, 0, 0,6);
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50,-50);
           padding: 80px;
           border-radius: 15px;
           color: #fff;
       }
       input{
           padding: 15%;
           border: none;
           outline: none;
           font-size: 15px;

       }
       .inputsubmit{
           background-color: dodgerblue;
           border: none;
           padding: 15%;
           width: 100%;
           border-radius: 10px;
           color: white;
           font-size: 15px;
       }
       .inputsubmit:hover{
           background-color: deepskyblue;
           cursor: pointer;
       }
        
    </style>
</head>
<body>
    <a href="index.php">voltar</a>
    <div>
        <h1></h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder=""senha"">
        <br><br>
        <input type="submit" name="submit" value="enviar">
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="enviar">
     </div>
</body>
</html>
