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
                <h2>Editar Perfil</h2>
                <form method='post' enctype='multipart/form-data' action="server/editar-usuario.php">
                    <p class="titulo-form-edicao" style="margin-top: 40px;">Imagem de perfil: </p>
                    <input type='file' name='foto' value='Cadastrar-foto' style="width: 50%;">
                    <p class="titulo-form-edicao">Data de Nascimento: </p>
                    <input type="date" name="data-aniversario" value="Data-de-Aniversário" style="width: 50%;">
                    <p class="titulo-form-edicao">Gênero: </p>
                    <select name="genero" value="Selecionar..." style="width: 53%;">
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                        <option value="nao-binario">Não-Binário</option>
                        <option value="outro-genero">Outro</option>
                    </select><br>
                    <p class="titulo-form-edicao">Nome:</p>
                    <input type="text" name="nome" id="nome"><br>
                    <p class="titulo-form-edicao">Sobrenome</p>
                    <input type="text" name="sobrenome" id="sobrenome"><br>
                    <p class="titulo-form-edicao">E-mail:</p>
                    <input type="text" id="email" name="email"><br>
                    <p class="titulo-form-edicao">Senha:</p>
                    <input type="password" name="senha" id="senha" maxlength="15"><br>
                    
                    <input type="submit" id="salvar" onClick="Salvar()" value="Salvar">
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