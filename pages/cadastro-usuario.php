<!DOCTYPE html>
<html>
    <head>
        <title>AlterCook</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/style-cadastro.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poiret+One|Quicksand" rel="stylesheet">
    </head>
    
    <body>
        <header class="header-cadastro-login">
            <div class="fixed-topbar">
                <img src="img/logo.png" class="logo-img">
                <div class="social-icons">
                    <img class="social-topbar" src="icons/facebook-logo-button.svg">
                    <img class="social-topbar" src="icons/twitter-logo-button.svg">
                    <img class="social-topbar" src="icons/instagram-logo.svg">
                    <img class="social-topbar" src="icons/youtube-logotype.svg">
                    <img class="social-topbar" src="icons/google-plus-logo-button.svg">
                    <img class="social-topbar" src="icons/pinterest.svg">
                </div>
            </div>
        </header>
        <div class="body">
            <div class="form-wrapper">
                <h2>Cadastre-se</h2>
                <form action="server/cadastro-usuario.php">
                    <input type="text" name="nome" id="nome" placeholder="Nome"><br>
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome"><br>
                    <input type="text" id="email" name="email" placeholder="E-mail"><br>
                    <input type="password" name="senha" id="senha" maxlength="15" placeholder="Senha"><br>
                    
                    <input type="submit" id="cadastrar" onClick="Cadastrar()" value="Cadastrar"><br>
                    
                    <span>OU</span><br>
                    
                    <button class="botao-facebook-cadastro"><img src="icons/facebook.svg"> Cadastrar-se com o Facebook</button>
                    <button class="botao-google-cadastro"><img src="icons/search.svg"> Cadastrar-se com o Google</button>
                    
                    <a href="javascript:;" class="link-back-login">Já possui uma conta? Faça Login</a>
                </form>
            </div>
        </div>
        
        <section class="footer-bottom-section">
            <div class="footer-bottom-wrapper">
                <p class="direitos"> Todos os direitos reservados &#64; AlterCook - 2018</p>
            </div>
        </section>
    </body>
</html>