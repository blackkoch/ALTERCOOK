<!DOCTYPE html>
<html>
<head>
    <title>AlterCook</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-receitas.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Poiret+One|Quicksand" rel="stylesheet">
</head>
<body>
        <script src='js/jquery.min.js'></script>
        <script src='js/slick.min.js'></script>
        <script src='js/tweenmax.min.js'></script>
        <script  src="js/index.js"></script>
    
        <div class="page">
            <!-- MENU -->
            <div id="menu">
                <a href="index.html"><img class="logo" src="img/AC.png" alt="Logo AlterCook"></a>
                
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Pesquisar..." name="pesquisar" class="search">
                        
                        <button type="submit"><img src="img/icons/search.svg" id="img-search" alt="Pesquisar"/></button>
                    </form>
                </div>
                
                <div class="menu-icons">
                    <a href="#">
                        <img src="img/icons/contract.svg" class="icon">
                    </a>
                    <a href="#">
                        <img src="img/icons/login.svg" class="icon">
                    </a>
                    <a href="#">
                        <img src="img/icons/new-user.svg" class="icon">
                    </a>
                    <a href="#">
                        <img src="img/icons/menu.svg" class="drop-icon">
                    </a>
                </div>
                
			</div>
            <nav class="top-navbar">
                    <a href="#" class="nav-links">Vegana</a>
                    <a href="#" class="nav-links">Vegetariana</a>
                    <a href="#" class="nav-links">Alergias</a>
                    <a href="#" class="nav-links">Intolerâncias</a>
                    <a href="#" class="nav-links">Zero Açúcar</a>
                    <a href="#" class="nav-links">***</a>
                </nav>
            
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
            
            <!--- FOOTER --->
            <footer style="background-color: #2b402b;" class="flex-rw">
  <section class="footer-social-section flex-rw">
      <span class="footer-social-overlap footer-social-connect">
      AlterCook
      </span>
  </section>
  <ul class="footer-list-top">
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
        </div>
</body>