<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="\Sistema RT\IMGS\icone.png" type="image/x-icon">
   <title>Login Gerencial</title>
</head>

<body>
 
<iframe id="fundo" src="anima.html" frameborder="0"></iframe> 


    <div class="conteiner"> 
  
<img id="logo"  src="../IMGS/logo2.png" alt="logo" srcset="">


      <div class="logar">
    
            <div class="login">  

      
            <h2> Acesse com suas credenciais </h2> 


                                
                <form action="dados.php" method="POST">



                    <p>Email</p>
                    <input type="email" name="email" id="email" placeholder="email@exemplo.com">
                    <p>Senha</p>
                    <input  type="password" name="senha" id="senha"  placeholder="*******">
                    <button  id="login" class="btn" >Entrar</button>
             



                </form>

        


            </div>



       


        </div>







    </div>

    <script src="login.js"></script>




</body>

</html>