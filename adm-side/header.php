<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manager.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../IMGS/icone.png" type="image/x-icon">
    <title>Header</title>
</head>

<style>

        #logo{
        width: 380px;
        }


</style>

<body>

    <div class="conteiner-top">
        <header>
            <div class="head">
                <img id="logo" src="../IMGS/logo2.png" alt="logo">
            </div>
            <!-- <img  id="menu" src="../IMGS/menu-icon.svg" alt="icone-hamburg"> -->
        </header>

        <div class="button-container">
            <a href="manager.php">
                <button class="button op-menu">
                    <svg class="icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z">
                        </path>
                    </svg>
                </button>
            </a>

            <a href="">
                <button class="button">
                    <svg fill="#ffffff" viewBox="0 0 32 32"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="Layer1">
                                <path
                                    d="M26.882,7.528c-0.036,-0.067 -0.081,-0.132 -0.134,-0.191l-0.018,-0.021l-0.014,
                             -0.014c-0.003,-0.003 -0.006,-0.006 -0.009,-0.009c0,-0 -5,-5 -5,-5l-0.018,-0.018l-0.019,-0.018l-0.007,-0.005c-0.059,-0.053 -0.124,-0.098 -0.191,-0.134c-0.141,-0.075 -0.301,-0.118 -0.472,-0.118l-15,-0c-0.552,-0 -1,0.448 -1,1l0,26c0,0.552 0.448,1 1,1l20,-0c0.552,-0 1,-0.448 1,-1l0,-21c0,-0.171 -0.043,-0.331 -0.118,-0.472Zm-13.882,13.972l6,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-6,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm-2,-4.5l10,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-10,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm11,-10l1.586,-0l-1.586,-1.586l0,1.586Z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </button>
            </a>

            <a href="listar_usuarios.php">
                <button class="button">
                    <svg class="icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                        </path>
                    </svg>
                </button>
            </a>

            <button class="button">
                <svg fill="#ffffff" width="800px" height="800px" viewBox="0 0 32 32"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                    xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="Layer1">
                            <path
                                d="M27,3c-0,-0.552 -0.448,-1 -1,-1l-20,0c-0.552,0 -1,0.448 -1,1l-0,26c0,0.552 0.448,1 1,1l20,0c0.552,0 1,-0.448 1,-1l-0,-26Zm-2,1l-0,24c-0,0 -18,0 -18,0c-0,-0 -0,-24 -0,-24l18,0Zm-9,10c-3.311,0 -6,2.689 -6,6c-0,3.311 2.689,6 6,6c3.311,0 6,-2.689 6,-6c-0,-3.311 -2.689,-6 -6,-6Zm-1,2.126c-1.724,0.445 -3,2.012 -3,3.874c-0,2.208 1.792,4 4,4c1.862,0 3.429,-1.276 3.874,-3l-3.874,0c-0.552,0 -1,-0.448 -1,-1l0,-3.874Zm-2,-4.126l6,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-6,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm-2,-4l10,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-10,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Z">
                            </path>
                        </g>
                    </g>
                </svg>
            </button>

            <a href="logout.php">
                <button class="button " id="sair">
                    <svg class="icon" viewBox="0 0 24 24" name="sair" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 7.63636L14 4.5C14 
                    4.22386 13.7761 4 13.5 4L4.5 
                    4C4.22386 4 4 4.22386 4
                     4.5L4 19.5C4 19.7761
                      4.22386 20 4.5 20L13.5 
                      20C13.7761 20 14 19.7761 
                      14 19.5L14 16.3636" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                        </path>
                        <path d="M10 12L21 12M21 12L18.0004 8.5M21 12L18 15.5" stroke="#ffffff" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
            </a>
        </div>

        <main>
            <div class="block-right pesquisar">
                <input id="pesquisa" type="text" placeholder="Pesquise aqui">
                <select name="Filtro" id="filtro">
                    <option value="selecione">Selecione</option>
                    <option value="nome">Nome</option>
                    <option value="instituicao">Instituição</option>
                    <option value="CPF">CPF</option>
                    <option value="inscricao">Inscrição</option>
                    <option value="protocolo">Protocolo</option>
                </select>
                <button class="btn-pesquisa">
                    <img id="btn-pesquisa" src="../IMGS/search-icon.svg" alt="" srcset="">
                </button>
            </div>
        </main> <!-- main -->
    </div><!-- Conteiner Top -->

</body>

</html>
