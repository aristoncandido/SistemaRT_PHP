<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="\Sistema RT\IMGS\icone.png" type="image/x-icon">
   <title>Login Gerencial</title>
</head>

<body>


    <div class="conteiner"> 
        <div class="block1">   

                <div >
                       <img src="IMGS\wave.png" alt="">
                            
                          <h1>Login Gerencial</h1>
                </div>
                
<!-- 
                <h2>
                    Acesse aqui o sistema gerenciador do RT
                </h2>
 -->

                <img src="IMGS\logo2.png" alt="">

            



        </div>
       


        <div class="logar">
    
            <div class="login">  
           

                <form action="dados.php" method="post">

             

                    <p>Email</p>
                    <input type="email" name="email" id="email" placeholder="email@exemplo.com">
                    <p>Senha</p>
                    <input  type="password" name="senha" id="senha"  placeholder="*******">
                    <button  class="btn" >Entrar</button>
                    <button  class="btn" ><a href="cadastrar.php">Cadastrar</a></button>



                </form>

        


            </div>



       


        </div>







    </div>



</body>

</html>