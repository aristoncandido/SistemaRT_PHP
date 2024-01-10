<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento</title>
</head>
<body>

<?php
    session_start();

 ;

    if(isset($_SESSION['usuario_id']))

    echo '<p>Bem-vindo ' . $NOME . '</p>';
?>

<div class="conteiner">
    <div>
        <p>
            
        </p>
    </div>
</div>

</body>
</html>
