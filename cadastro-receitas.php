<!DOCTYPE html>
<html>
    <head>
        <title>AlterCook</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-perfil-usuario.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js">
    </script>
        <script language="javascript">
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "25%";
            document.getElementById("mySidenav").style.color = "#262826";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.color = "white";
        }
    </script>
    </head>
    
    <body>
        <div class="page">
            <!-- #### MENU #### -->
            <header class="menu">
            <a src="index.html"><img class="img-logo-menu menu-itens" src="img/AC.png" alt="AlterCook"></a>
            
            <div class="search-container menu-itens">
                <form action="/action_page.php">
                    <input type="text" placeholder="Pesquisar..." name="pesquisar" class="search-form">
                        
                    <button type="submit"><img src="img/icons/search.svg" class="img-search" alt="Pesquisar"/></button>
                </form>
            </div>
            
            <div class="menu-icon-container menu-itens">
                    <a href="cadastro-receitas.php">
                        <img src="img/icons/contract.svg" class="menu-icon">
                    </a>
                    <span onclick="openNav()" style="margin-left: 150px; margin-right: 5px; cursor: pointer;">
                        <img src="img/icons/menu.svg" class="drop-menu-icon">
                    </span>
            </div>
            
            <nav class="navbar-top">
                <a href="">Vegana</a>
                <a href="">Vegetariana</a>
                <a href="">Alergias</a>
                <a href="">Intolerâncias</a>
                <a href="">Zero Açúcar</a>
            </nav>
        </header>
            
            <!-- #### SLIDER #### -->
            <div class="slider-wrapper">
            <div class="slider">
                <div class="slider--item" style="background-image: url(img/slider-img-6.jpg)">
                </div>
                
                <div class="slider--item" style="background-image: url(img/slider-img-2.jpg)">
                </div>
                
                <div class="slider--item" style="background-image: url(img/slider-img-3.jpg)">
                </div>
                
                <div class="slider--item" style="background-image: url(img/slider-img-4.jpg)">
                </div>
                
                <div class="slider--item" style="background-image: url(img/slider-img-7.jpeg)">
                </div>
              </div>
            </div>
            
            
            <!--- RECEITAS --->
            <form id="cadastroReceita" action="#" method="GET">
                <p>Cadastrar Receitas</p>
                <label>Foto da receita:</label><br>
                <input class="imagem" type="file"><br>
                <label>Nome da receita:</label>
                <input class="titulo" type="text"><br>
                <label>Ingredientes:</label><br>
                    <label class="ingri">Quantos ingredientes tem na receita?</label>
                    <input class="ingriQuantos" type="number">
                <input class="ingredientes" type="text"><br>
                <label>Modo de preparo:</label><br>
                    <label class="ingri">Quantos passos tem o preparo da receita?</label>
                    <input class="ingriQuantos" type="number">
                <input class="preparo" type="text"><br>
            
            </form>
            
            
        </div>
    <!-- <script src='js/jquery.min.js'></script> -->
        <script src='js/slick.min.js'></script>
        <script src='js/tweenmax.min.js'></script>
        <script  src="js/index.js"></script>

    </body>
    
        <footer style="background-color: #2b402b; font-size: 12px;" class="flex-rw">
          <section class="footer-social-section flex-rw">
              <span class="footer-social-overlap footer-social-connect">
              AlterCook
              </span>
          </section>
          <ul class="footer-list-top" style="padding-bottom: 30px; padding-top: 10px;">
            <li>
              <h4 class="footer-list-header">Sobre Nós</h4></li>
            <li><a href='/shop/about-mission' class="generic-anchor footer-list-anchor" itemprop="significantLink">TERMOS DE USO</a></li> 
              <li><a href='/shop/about-mission' class="generic-anchor footer-list-anchor" itemprop="significantLink">POLÍTICA DE PRIVACIDADE</a></li>
              <li><a href='/shop/about-mission' class="generic-anchor footer-list-anchor" itemprop="significantLink">COMO NOS ENCONTRAR?</a></li>
            <li><a href='/promos.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">ANUNCIE CONOSCO</a></li>
            <li><a href='/retailers/new-retailers.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTATO</a></li>


          </ul>
          <ul class="footer-list-top">
            <li>
              <h4 class="footer-list-header">Receitas</h4></li>


            <li><a href='/Angels/cat/id/70' class="generic-anchor footer-list-anchor">VEGANAS</a></li>
            <li><a href='/Home-Decor/cat/id/64' class="generic-anchor footer-list-anchor">VEGETARIANAS</a></li>
            <li><a href='/Mugs/cat/id/32' class="generic-anchor footer-list-anchor">ALERGIAS</a></li>
            <li><a href='/Pet-Lover/cat/id/108' class="generic-anchor footer-list-anchor">INTOLERÂNCIAS</a></li>
            <li><a href='/Ladies-Accessories/cat/id/117' class="generic-anchor footer-list-anchor" target="_blank">ZERO AÇÚCAR</a></li>
          </ul>
          <ul class="footer-list-top">
            <li id='help'>
                <h4 class="footer-list-header">Redes Sociais</h4>
            </li>
              <div class="conjunto-icons">
            <li class="li"><a href="https://www.facebook.com/Cook.Alter/" class="social-icon" target="_blank"><img src="img/icons/facebook-logo-button.svg" style="border-radius: 50%; width: 25px;">
            </a></li>
            <li class="li"><a href="https://twitter.com/_AlterCook" class="social-icon" target="_blank"><img src="img/icons/twitter-logo-button.svg" style="border-radius: 50%; width: 25px;">
            </a></li>
            <li class="li"><a href="https://www.instagram.com/alter_cook/?hl=pt-br" class="social-icon" target="_blank"><img src="img/icons/instagram-logo.svg" style="border-radius: 50%; width: 25px;">
            </a></li>
              <li class="li"><a href="https://br.pinterest.com/altercook/" class="social-icon" target="_blank"><img src="img/icons/pinterest.svg" style="border-radius: 50%; width: 25px;">
            </a></li>
              <li class="li"><a href="https://plus.google.com/u/1/" class="social-icon" target="_blank"><img src="img/icons//google-plus-logo-button.svg" style="border-radius: 50%; width: 25px;">
            </a></li>
              <li class="li"><a href="https://www.youtube.com/channel/UC18rw8acvoY9gS9-L_r17uA?view_as=subscriber" class="social-icon" target="_blank"><img src="img/icons/youtube-logotype.svg" style="border-radius: 50%; width: 25px;">
            </a></li>
                </div>
            </ul>
          <section class="footer-bottom-section">
        <div class="footer-bottom-wrapper">
            <p class="direitos"> Todos os direitos reservados &#64; AlterCook - 2018</p>
            </div>
          </section>
        </footer>
    
        <div id="mySidenav" class="sidenav"  style="max-width: 40%; background-color: white;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="imgcontainer">
                <img src="img/icons/woman.svg" alt="Avatar" class="avatar" style="width: 35%; border-radius: 50%; margin-left: 32.5%; margin-right: 32.5%; margin-bottom: 10px;">
            </div>

            <div class="container_log">
                <p class="nome-usuario">Nome da Pessoa</p>
                <a class="editar-perfil">Editar Perfil</a><br>

                <div class="align"><a href="javascript:;" class="links-perfil-user"><img src="img/icons/list.svg" style="width: 25px; margin-right: 10px;">Minhas Receitas</a></div>
                <hr size="1">
                <a href="javascript:;" class="links-perfil-user"><img src="img/icons/star-p.svg" style="width: 25px; margin-right: 10px;">Favoritos</a>
                <hr size="1">
                <a href="javascript:;" class="links-perfil-user"><img src="img/icons/funnel.svg" style="width: 25px; margin-right: 10px;">Filtros</a>
                <hr size="1">
                <a href="javascript:;" class="links-perfil-user"><img src="img/icons/logout.svg" style="width: 20px; margin-right: 10px;">Sair</a>
            </div>
        </div>
</html>