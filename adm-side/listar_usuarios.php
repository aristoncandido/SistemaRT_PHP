<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Gestão de RT / COREN-PE</title>
    <style type="text/css">
        <!--
        .style18 {
            font-size: 24px;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
            color: #FFFFFF;
        }

        .style23 {
            font-size: 19px
        }

        body {
            background-color: #0667B3;
        }

        .style24 {
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
        }

        .style25 {
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .style17 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
        }

        .style19 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
        }

        -->
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <table width="60%" height="50%" border="0" align="center" valign="middle" bgcolor="#FFFFFF">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center" valign="top"><div align="center"></div></td>
        </tr>
        <tr>
            <td height="237" align="center" valign="top" bgcolor="#F4F4F4"><div align="center">
                    <table width="90%" border="1" cellspacing="0" cellpadding="0">
                        <tr>
                            <td bgcolor="#0667B3"><div align="center" class="style18">Lista de Usuários </div></td>
                        </tr>
                        <tr></tr>
                    </table>

                    <?php
                    // Inicie a sessão no início do arquivo
                    session_start();
                    
                    // Verifique se o usuário está autenticado
                    if (!isset($_SESSION['usuario_id'])) {
                        // Se não estiver autenticado, redirecione para a página de login
                        header("Location: dados.php");
                        exit();
                    }
                    
                    // Agora você pode usar as informações do usuário (por exemplo, exibir o nome do usuário)
                    $nome_usuario = $_SESSION['usuario_nome'];
                    
                    echo "<p>&nbsp;</p>";
                    echo "Olá, $nome_usuario";
                    echo '<p><a href="cadastrar.php">Cadastrar Novo Usuário </a></p>';
                    echo "<p>&nbsp;</p>";
                    echo "<h2>Resultados da Consulta</h2>";
                    echo "<p class='result-info'>Clique no requerimento desejado para visualizar os detalhes.</p>";
               

                    try {
                        
                        include('conexao.php');

                        if ($conn->connect_error) {
                            echo "Erro na conexão com o banco de dados: " . $conn->connect_error;
                            throw new Exception("Erro na conexão com o banco de dados: " . $conn->connect_error);
                        }

                        $sql1 = "SELECT ID, NOME, EMAIL, DEPARTAMENTO, TIPO_DE_PERFIL FROM user order by NOME asc";
     
                        $conn = new mysqli($servername, $username, $password, $database);
                        if ($conn->connect_error) {
                            die("Falha na conexão: " . $conn->connect_error);
                        }
                
                        $resultado = $conn->query($sql1);
                       
                        $stmt = $conn->prepare($sql1);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            $registros = $result->fetch_all(MYSQLI_ASSOC);

                            echo '<table width="90%" border="1" cellspacing="0" cellpadding="2">';
                            echo '<td class="table-header"><div align="center">Nome</div></td>';
                            echo '<td class="table-header"><div align="center">E-mail</div></td>';
                            echo '<td class="table-header"><div align="center">Departamento</div></td>';
                            echo '<td class="table-header"><div align="center">Tipo de Perfil</div></td>';
                            echo '<td class="table-header"><div align="center">*</div></td>';
                            echo '<td class="table-header"><div align="center">*</div></td>';
                            echo '<td class="table-header"><div align="center">*</div></td>';
                            

                            foreach ($registros as $registro) {
                                echo "<tr>";
                                echo "<td class='table-data'>{$registro['NOME']}</td>";
                                echo "<td class='table-data'>{$registro['EMAIL']}</td>";
                                $departamento = $registro['DEPARTAMENTO'];
                                $ID = $registro['ID'];
                                echo "<td class='table-data'>{$departamento}</td>";
                                echo "<td class='table-data'>{$registro['TIPO_DE_PERFIL']}</td>";
                                echo "<td class='table-data'><div align='center'><a href='alterar_usuario.php?ID=$ID'>Alterar</a></div></td>";
                                echo "<td class='table-data'><div align='center'><a href='alterar_usuario.php?ID=$ID'>Inativar</a></div></td>";
                                echo "<td class='table-data'><div align='center'><a href='deletar_usuario.php?ID=$ID'>Excluir</a></div></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "Nenhum usuário cadastrado.";
                        }

                        $stmt->close();
                        $conn->close();
                        
                    } catch (Exception $e) {
                        echo "Erro: " . $e->getMessage();
                    }
                    ?>

                </div>
            </td>
        </tr>
        <tr>
                <td align="center" valign="top" bgcolor="#F4F4F4">
                    <span class="style19">Versão 1.0.0 / 2024<br>
                    Conselho Regional de Enfermagem de Pernambuco<br>
                    Departamento de Tecnologia da Informação<br>
                    Todos os Direitos Reservados</span></td>
                    <p><a href="manager.php">Voltar</a></p>
        </tr>
    </table>
</body>

</html>
