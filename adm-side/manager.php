<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="\Sistema RT\IMGS\icone.png" type="image/x-icon">
  
    <title>Gerenciamento</title>
</head>


<style>

    body{
        background:#005EA1;
        overflow-x:hidden;




    }

        .conteiner{

            display:block;

        }


    header{
        width:100%;
        display:flex;
        justify-content:space-around;
        padding-top:5%;
        padding-left:2%;
        text-align:center;
    
    }

    h2{
        font-size:20pt;
    }

    h1{
        color:white;
    }


    button{
        
        padding:0;
        width: 270px;
        height: 100px;
        font-size:15pt;
        text-align:center;
        border-radius:15pt;

    }

    main{
        display:flex;
        justify-content:space-around;
    }

    label{

        color:white;
    }

    .logout{

        width:5%;


    }

</style>
<body>

<?php


?>


<div class="conteiner manager" style="width:100%">
   <header>

   <div >
                <H2>
                    Gerenciamento
                </H2>
   </div>

   <div >
            <H1>Registro de Responsavel Técnico</H1>

   </div>

   </header>

    <main>


    <div class="block-left">
                <h2>Olá o que deseja fazer?</h2>

                <button>
                    Gerenciar  Requerimentos
                </button>
                <br>

                <button>
                    Relatórios
                </button>

    </div>

    <div class="block-right">       

        <label for="pesquisa">Pesquisa</label>
        <input id="pesquisa" type="text">

        <select name="Filtro" id="filtro">

        <option value="nome">nome</option>
        <option value="Instituição">instituição</option>
        <option value="cpf">cpf</option>
        <option value="inscricao">inscricao</option>
        <option value="protocolo">protocolo</option>


        </select>



    </div>

   



    </main> <!-- main -->


</div> <!-- conteiner -->


<div class="logout">
    <a href="Sistema RT\adm-side\logout.php"> <input type="button" value="Sair" href="" >
 </a>

    
</div>
 
</body>
</html>
