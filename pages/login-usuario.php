<!DOCTYPE html>
<html>
    <head>
        <title>AlterCook</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/style-login.css">
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
                <h2>Login</h2>
                <form action="server/login-usuario.php">
                    <input type="text" id="email" name="email" placeholder="E-mail"><br>
                    <input type="password" name="senha" id="senha" maxlength="15" placeholder="Senha"><br>
                    
                    <input type="submit" id="entrar" onClick="Entrar()" value="Entrar"><br>
                    
                    <span>OU</span><br>
                    
                    <button class="botao-facebook-cadastro"><img src="icons/facebook.svg"> Entrar com o Facebook</button>
                    <button class="botao-google-cadastro"><img src="icons/search.svg"> Entrar com o Google</button>
                    
                    <a href="javascript:;" class="link-back-login">Ainda não possui uma conta? Cadastre-se</a>
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