<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina 1</title>
</head>
<body>  
    <form method="post" action="">
        <input type="text" id="name" placeholder="Digite um nome:">
        <button>Entrar</button>
</form>
</body>

<?php

echo $_POST['name'];  
setcookie ('cookie',"Guilherme", time()+3);

?>
</html>


