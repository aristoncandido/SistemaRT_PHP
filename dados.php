<?php

    session_start();


    if (isset($_SESSION['user_id'])) {
        header("Location: pagina_restrita.php");
        exit();
    }
    
    if($_SERVER[REQUEST_METHOD]=="POST"){

        //valida os campos do formulario


                
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $senha = $_POST['senha'];
            
        


    }






    include 'conexao.php';


    $sql="SELECT*FROM USER WHERE EMAIL='$email' AND SENHA ='$senha' ";
    




    $result = $conn->query($sql);         //pega o retorno da requisição}
    $nome_sql = "SELECT NOME FROM USER WHERE EMAIL='$email' AND SENHA ='$senha' ";
    $result_nome = $conn ->query($nome_sql);
 


    if ($result) {
        // Verifica se há um registro correspondente
        if ($result->num_rows > 0) {
            // Login bem-sucedido
            echo "Logado com $result_nome";
            // Você pode redirecionar o usuário ou realizar outras ações aqui
        } else {
            // Credenciais inválidas
            echo "Credenciais inválidas. Tente novamente.";
        }
    } else {
        // Erro na consulta
        echo "Erro na consulta: " . $conn->error;
    }
    





?>