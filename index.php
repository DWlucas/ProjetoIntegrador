<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <section class="grid">
            <div class="centerpage">
                <div class="page">
                    <form action="" class="formLogin" method="POST">
                        <h1>Login</h1>
                        <label for="text">Usuário</label>
                        <input id="user" type="text" placeholder="Digite seu Usuário" autofocus="true" />
                        <label for="password">Senha</label>
                        <div class="divPass">
                            <input type="password" id="password" name="password" placeholder="Digite sua Senha"> 
                            <img class="olho" src="img/eye-on.png" alt="">
                        </div>
                        <input type="submit" value="ENTRAR" class="btn" onclick="logar(); return false">
                    </form>
                    <img class="imghp" src="img/hospital.jpg" alt="imagem do hospital">
                </div>
            </div>
        </section>
    </div>
    <script src="main.js"></script>
</body>
</html>