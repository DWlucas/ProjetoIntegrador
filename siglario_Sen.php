<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon_unimed.png" type="image/x-icon">
    <title>Siglario por Sentenças</title>
    <link rel="stylesheet" href="siglario_Sen.css">
</head>

<body>
<!--HEADER-->
    <header>
        <div>
            <a href="https://www.unimed.coop.br/site/web/chapeco" title="unimed"><img draggable="false" name="" id="" class="headerImgLogo" src="img/logo_unimed.png" alt=""></a>
            <input name="barraDePesquisa" id="barradepesquisa" class="headerBarraDePesquisa" placeholder="🔍Faça a sua Pesquisa..." type="search">
            <div name="usuario" id="usuario" class="usuario">
                <h1 name="nomeUsuario" id="nomeusuario" class="headerNomeUsuario">
                    <?php
                        print $_SESSION["nome"] ." ". $_SESSION["sobrenome"];
                    ?>
                </h1>
                <hr class="linhaNomeUsuario">
                <img draggable="false" name="imgUsuario" id="imgusuario" class="headerImgUsuario" src="img/perfil.png" alt="">
                    <?php
                        print "<a href='logout.php' class='btn-danger'>Sair</a>";
                    ?>
            </div>  
        </div> 
    </header>
<!--CONTEUDO-->
<div name="conteudo" id="conteudo" class="conteudo">
<!--navegação-->
    <nav name="navegacao" id="" class="navegacao">
        <ul class="nav-list">
            <li id="nav"><a href="#" onmouseover="showModal()" onmouseout="hideModal()">Acessibilidade</a>
                <div id="modal" class="modal">
                    <h2>Modal com JavaScript</h2>
                    <p>Este é um exemplo de modal criado com JavaScript.</p>
                </div>
            </li>
            <hr>
            <li id="nav"><a href="intranet.php" class="pg">Intranet</a></li>
            <hr>
            <li id="nav"><a href="agendaTel_Int.php">Agenda Telefônica</a></li>
            <hr>
            <li id="nav" class="pgatual"><a href="siglario_Sig.php">Siglário</a></li>
            <hr>
            <li id="nav"><a href="documentos.php">Documentos</a></li>
        </ul>
    </nav>
<!--pesquisa siglario-->
    <section name="boxSiglas" id="" class="boxSiglas">
        <div name="boxTiposSigSen" id="" class="boxTiposSigSen">
            <div name="boxSiglas49" id="" class="boxSiglas49">
                <div name="" id="" class="paginaPesquisarPorSiglas">
                    <a href="siglario_Sig.php" title="Pesquisar por Siglas">
                        Pesquisar por Siglas
                    </a>
                </div>
            </div>
            <hr class="divisaoSiglasSentenças">
            <div name="boxSentenças49" id="" class="boxSentenças49">
                <div name="" id="" class="paginaPesquisarPorSentenças">
                    <a href="#" title="Pesquisar por Sentenças">
                        Pesquisar por Sentenças
                    </a>
                </div>
            </div>
        </div>
        <hr class="divisaoTiposProcurar">
        <div name="boxProcurarPor" id="" class="boxProcurarPor">
            <div name="pesquisarPorSentenças" id="" class="pesquisarPorSentenças">Pesquisar por Sentenças:</div>
            <input name="searchSentenças" id="searchSentenças" class="searchSentenças" type="search" placeholder="🔍Buscar">
        </div>
    </section>

    <section name="boxsiglario" id="" class="boxsiglario">
        <section name="headerSiglario" id="" class="headerSiglario">
            <div name="infoSiglarioHeader" id="" class="infoSiglarioHeader">SENTENÇAS</div>
            <hr class="divisaoHeaderSiglario">
            <div name="descricao" id="" class="descricaoHeader">DESCRIÇÂO</div>
            <hr class="divisaoHeaderSiglario">
            <div name="usar" id="" class="usarHeader">USAR</div>
        </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">TDAH</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">A coisa que o lucas tem</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">SIM</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">2</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">3</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">4</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">5</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">6</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">7</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">8</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">9</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

         <section name="linha1" id="" class="linhas">
            <div name="itemsSiglario" id="" class="itemsSiglario">10</div>
            <hr class="divisaoSiglario">
            <div name="descrição" id="" class="descrição">aaaaaa</div>
            <hr class="divisaoSiglario">
            <div name="usar" id="" class="usar">aaaaaa</div>
         </section>

    </section>

</div>
<!--FOOTER-->
    <footer>
        <div name="footercenter" id="" class="footercenter">
        <section name="localizacaoUnimed" id="" class="localizacaoUnimed">
                <div name="iconLocUnimed" id="" class="iconLocUnimed">
                    <img draggable="false" src="img/iconloc.png" alt="iconLoc">
                </div>
                <div name="txtLocalizacao" id="" class="txtLocalizacao">
                <a target="_blank" href="https://www.google.com/maps/dir//Estacionamento+UNIMED+-+Centro,+Chapec%C3%B3+-+SC,+89814-480/@-27.1038315,-52.6878714,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94e4b5c0993b2dc9:0x4c46fa0631db9e03!2m2!1d-52.6178311!2d-27.1038489?entry=ttu" rel="noopener">
                    <P>Unimed Chapecó Av. Porto Alegre 243E</P>
                    <p>Chapecó - SC</p>
                    <p>CEP: 89802-130</p>
                </a>
                </div>
        </section>
        <section name="boxContatos" id="" class="boxContatos">
                <p name="txtContatos" id="" class="txtContatos">Siga nossas redes sociais:</p>
                <section name="iconsContatos" id="" class="iconsContatos">
                        <div name="iconsredessociais" id="" class="iconsRedesSociais"><a href="https://www.facebook.com/unimed.chapeco" title="facebook" target="_new"><img draggable="false" src="img/facebook_logo.png" alt="iconfacebook"></a></div>
                        <div name="iconsRedesSociais" id="" class="iconsRedesSociais"><a href="https://www.instagram.com/unimed.chapeco/" title="instagram" target="_new"><img draggable="false" src="img/instagram_logo.png" alt="iconintagram"></a></div>
                        <div name="iconsredessociais" id="" class="iconsRedesSociais"><a href="https://www.youtube.com/channel/UCGeen4o2xuq4eAakeyv8LyA" title="youtube" target="_new"><img draggable="false" src="img/youtube_logo.png" alt="iconyoutube"></a></div>
                        <div name="iconsredessociais" id="" class="iconsRedesSociais"><a href="https://br.linkedin.com/company/unimed-chapeco" title="linkedin" target="_new"><img draggable="false" src="img/linkedin_logo.png" alt="iconlikedin"></a></div>
                </section>
        </section>
        </div>
        <section name="copyright" class="copyright">
            <a href="#" title="Política de utilização da rede" target="_new"><p name="politicaderede">Política de utilização da rede</p></a>
            <p>|</p>
            <p name="2023copyright">2023 Copyright - Todos os direitos reservados.</p>
        </section>
    </footer>
</body>

</html>