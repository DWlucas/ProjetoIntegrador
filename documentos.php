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
    <title>Documentos</title>
    <link rel="stylesheet" href="documentos_styles.css">
</head>

<body draggable="false">
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
            <li id="nav"><a href="siglario_Sig.php">Siglário</a></li>
            <hr>
            <li id="nav" class="pgatual"><a href="documentos.php">Documentos</a></li>
        </ul>
    </nav>
<!--Documentos Header-->
    <section name="boxHeaderDocumentos" id="" class="boxHeaderDocumentos">
        <p>DOCUMENTOS</p>
    </section>

<!--Documentos-->
    <section name="boxDocumentos" id="" class="boxCorpoDocumentos">

        <div name="documentosConsultas" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary class="docsConsulta">
                        Documentos para Consulta
                    </summary>
                    <ul class="uldocsConsulta">
                        <li><a href="/intranet/index/download?arquivo=PLI.GOV.0005-02_Politica_de_Seguranca_da_Informacao_e_Privacidade_de_Dados_Pessoais.pdf" title="Política de Segurança da Informação e Privacidade de Dados Pessoais" target="_new">Política de Segurança da Informação e Privacidade de Dados Pessoais</a></li>
                        
                        <li><a href="">CBHPM</a></li>
                        
                        <li><a href="">Descrição de Lançamentos do Ponto no Painel</a></li>

                        <li><a href="">Guia Médico</a></li>

                        <li><a href="">Gratificação Vale Alimentação</a></li>

                        <li><a href="">Lista de Presença - Padrão Unimed</a></li>

                        <li><a href="">Lista Exames com DUT</a></li>

                        <li><a href="">Instrução Técnica Localização de documentos padronizados</a></li>

                        <li><a href="">Manual de gestão e preparação para emergências e desastres</a></li>

                        <li><a href="">Norma interna nº 001_ 2014 - Cursos (alterada em 09.06.2021)</a></li>

                        <li><a href="">Plano de Cargos e Salários</a></li>

                        <li><a href="">Política de Comunicação</a></li>

                        <li><a href="">Política de Gestão de Pessoas</a></li>

                        <li><a href="">Politica de Medida Disciplinar</a></li>

                        <li><a href="">Política de Ouvidoria</a></li>

                        <li><a href="">Política de Recrutamento e Seleção</a></li>

                        <li><a href="">Política de Saúde Integral do colaborador</a></li>

                        <li><a href="">Política institucional para contratação e qualificação de fornecedores</a></li>

                        <li><a href="">PPR 2023</a></li>

                        <li><a href="">Procedimentos de resposta para emergências internas</a></li>

                        <li><a href="">Programa Ciclos de uma Trajetória</a></li>

                        <li><a href="">Programa de Desenvolvimento de Pessoas da Unimed Chapecó</a></li>

                        <li><a href="">Programa de Integração Unimed Chapecó</a></li>

                        <li><a href="">Programa de Sucessão da Unimed Chapecó</a></li>

                        <li><a href="">Relatório de Sustentabilidade 2020 e 2021 GRI</a></li>

                        <li><a href="">Regulamento Bolsa de Estudos</a></li>

                        <li><a href="">Regulamento Plano de Saúde</a></li>

                        <li><a href="">TER.GEA.0004-01 Obrigatoriedade do uso de máscara</a></li>

                        <li><a href="">Tutorial de Acesso ao RUBIWEB</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div name="programasDeGerenciamento" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Programas de Gerenciamento Medicina Preventiva
                    </summary>
                    <p>Complexos</p>
                    <ul>
                        <li><a href="">Política PGCC/SAD</a></li>
                        <li><a href="">Encaminhamento Médico/Multi Hospital PGCC</a></li>
                        <li><a href="">Encaminhamento Médico Consultório PGCC</a></li>
                        <li><a href="">Indicação ao PGCC</a></li>
                    </ul>
                        <p>Crônicos</p>
                    <ul>
                        <li><a href="">Manual PGS - Gerenciamento de Saúde</a></li>
                        <li><a href="">Encaminhamento médico PGDC</a></li>
                        <li><a href="">Indicação ao PGDC</a></li>
                        <li><a href="">Autoindicação ao PGDC</a></li>
                    </ul>    
                </details>
            </div>
        </div>

        <div name="programaMelhoriaDeQualidade" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Programa de Melhoria da Qualidade - PMQ
                    </summary>
                    <ul>
                        <li><a href="">Resultado Acreditação da Operadora do Plano de Saúde - RN 507</a></li>
                        <li><a href="">Resultado da 1ª Supervisão da Certificação em APS - RN 506</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div name="planejamentoEstrategico" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Planejamento Estratégico
                    </summary>
                    <ul>
                        <li><a href="">Cadeia de valor - Hospital Unimed Chapecó</a></li>
                        <li><a href="">Cadeia de valor - Operadora plano de saúde</a></li>
                        <li><a href="">Divulgação Identidade Organizacional</a></li>
                        <li><a href="">Identidade organizacional</a></li>
                        <li><a href="">Mapa estratégico 2023 - 2024</a></li>
                        <li><a href="">Planejamento estratégico</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div name="captacoesInstitutoUnimed" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Captações Instituto Unimed
                    </summary>
                    <ul>
                        <li><a href="">Vídeo Instituto Unimed</a></li>
                        <li><a href="">Vídeo Captação Movimento Saúde e Ação</a></li>
                        <li><a href="">Slide Movimento Saúde e Ação</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div name="nucleoDeGovernancaCorporativa" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Núcleo de Governança Corporativa (NGC)
                    </summary>
                    <ul>
                        <li><a href="">Política de Segurança da Informação e Privacidade de Dados Pessoais</a></li>
                        <li><a href="">Código de Ética e Conduta</a></li>
                        <li><a href="">Código de Ética e Conduta aos Fornecedores e Prestadores de Serviço</a></li>
                        <li><a href="">Termo de Adesão ao Código de Ética e Conduta aos Fornecedores e Prestadores de Serviço</a></li>
                        <li><a href="">Programa de Governança em Privacidade e Segurança</a></li>
                        <li><a href="">Diretrizes para classificação e acesso das informações da instituição</a></li>
                        <li><a href="">Manual de Controles de Segurança da Informação e de Privacidade de dados Pessoais</a></li>
                        <li><a href="">Programa de Integridade</a></li>
                        <li><a href="">Cartilha Gestão de Riscos Corporativos</a></li>
                        <li><a href="">Cartilha LGPD Unimed Chapecó</a></li>
                        <li><a href="">Canal de Denúncias</a></li>
                    </ul>
                </details>
            </div>
        </div>
        
        <div name="unimedPersonal" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Unimed Personal (NAPS)
                    </summary>
                    <ul>
                        <li><a href="">Cartilha Unimed Personal</a></li>
                        <li><a href="">Referência e Contra referência</a></li>
                        <li><a href="">ROL DE PROCEDIMENTOS SAÚDE BUCAL UNIMED PERSONAL</a></li>
                        <li><a href="">News Odonto Unimed Personal</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div name="comed" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        COMEDI
                    </summary>
                    <ul>
                        <li><a href="">Solicitação de padronização de Medicamentos</a></li>
                        <li><a href="">Solicitação de despadronização de Medicamentos</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div name="tecnologiaDaInformacao" id="aaaaa" class="boxDocumentos">
            <div name="" id="" class="conteudoBoxDocumentos">
                <details>
                    <summary>
                        Tecnologia da Informação
                    </summary>
                    <p>teste</p>
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
               
                </details>
            </div>
        </div>
        
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