<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manager.css">

    <!--     <link rel="stylesheet" href="login.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../ IMGS/icone.png" type="image/x-icon">

    <title>Gerenciamento</title>
</head>




<style>

</style>

<body>

    <?php


        session_start();
                            
        // Verifique se o usuário está autenticado
        if (!isset($_SESSION['usuario_id'])) {
            // Se não estiver autenticado, redirecione para a página de login
            header("Location: dados.php");
            exit();
        }



        include "header.php";



        //Checar Listagem de Usuário





?>



    <div class="conteiner manager" style="width:100%">





   

    <section>
        <h1>


            Olá, seja bem vindo!




        </h1>
    </section>


    </div> <!-- conteiner -->












    <div class="bg-fundo">

        <!--      <img style=" "src="../IMGS/blue.png" alt="" srcset=""> -->

    </div>




    <script src="pesquisa.js"></script>
    <script src="menu.js"></script>







    <?php
    
                        

                        

    
    ?>










</body>


</html>