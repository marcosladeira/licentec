<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"> <!-- tag para o navegador identificar vários caracteres diferentes -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">  
<link rel="stylesheet" href="https://getbootstrap.com.br/docs/3.3/components/"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
  crossorigin="anonymous" />
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<title>Início</title>
    </head>
    <body>
    <?php
    include "reutilizaveis/cabecalho.html";
    if (isset($_GET['r'])) {
        echo ("<script>alert('" . $_GET['r'] . "');</script>");
    }
    ?>
    <script>
        document.getElementById("inicio").classList.add("active")
    </script>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/image/001-f0701b08.jpg"width="1920" height="700" alt="Primeiro slide">
                  <div >
                  <div class="carousel-caption d-none d-md-block">
                    <h1><b>COMBATE A INCÊNCIO</b></h1><br>
                    <h5><b>Instalação de sistema e equipamentos</b></h5>
                    <a href="servicos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>               
                  </div>
                </div>
              </div>         
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/image/002-2a12c9e5.jpg" width="1920" height="700" alt="Segundo slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>ARQUITETURA E ENGENHARIA</b></h1><br>
                  <a href="servicos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/image/news_interna_IMG_0093.jpg" width="1920" height="700" alt="Terceiro slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>BOMBEIROS</b></h1><br>
                  <h5><b>Formação de brigada para combater a incêncios</b></h5>
                  <a href="servicos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/image/laudo.jpg" width="1920" height="700" alt="Quarto slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>LAUDOS</b></h1><br>
                  <h5><b>Elaboração de laudos técnicos, estruturais e elétricos</b></h5>
                  <a href="servicos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/image/004-6e836ab5.jpg" width="1920" height="700" alt="Quinto slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>PROJETOS LEGAIS</b></h1><br>
                  <h5><b>Elaboração e Aprovação</b></h5>
                  <a href="servicos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/image/005.jpg" width="1920" height="700" alt="Sexto slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>GERENCIAMENTO DE OBRAS</b></h1><br>
                  <a href="servicos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
            </div>
            </div>
          
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          
          <div class="texto text-center p-4">
            <h1><font color="#2C2C2C"><b>NOSSA EMPRESA</b></font></h1>
            
          </div>
              <div class="texto text-center">   
                <font color="#2C2C2C"><h4>A <font color= "#DF050B">LICENTEC</font> é uma empresa 
                  de assessoria credenciada no CREA (Conselho Regional de<br> Engenharia
                   e Arquitetura) e CAU (Conselho de Arquitetura e Urbanismos) 
                   voltada para a<br> área de licenciamento junto aos órgãos 
                   Municipais, Estaduais e Federais.</h4></font>
                </br>
              </div>
                <div class="row no-gutters">
                <div class="col-sm mx-auto" id="empresa" style="background-image: url(assets/image/001.jpg);">
                <a href="somos.php" class="nostyle">
                    <div class="overlay">
                        <div class="texto-empresa">NOSSA EMPRESA</div>
                    </div>
                </a>
              </div>
                <div class="col-sm mx-auto" id="empresa" style="background-image: url(assets/image/004.jpg);">
                <a href="servicos.php" class="nostyle">
                    <div class="overlay">
                        <div class="texto-empresa">NOSSOS SERVIÇOS</div>
                    </div>
                </a>
              </div>
                <div class="col-sm mx-auto" id="empresa" style="background-image: url(assets/image/002.jpg);">
                <a href="contato.php" class="nostyle">
                    <div class="overlay">
                        <div class="texto-empresa">CONTATO E LOCALIZAÇÃO</div>
                    </div>
                </a>
              </div>
              </div></br>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <img src="assets/image/011.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/010.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/009.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/007---02.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/008.png" width="100" height="100">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <img src="assets/image/006.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/001.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/003.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/002.png" width="100" height="100">
              </div>
              <div class="col-md-2">
                <img src="assets/image/004.png" width="100" height="100">
              </div>
            </div>
            <div class="row justify-content-center">
              <img src="assets/image/Final.png" width="1000" height="100">
            </div></br></br>
            <div style="background-color: black;">            >
          <div class="texto text-center p-4" id="orçamento"></br>
            <h1><font color="#FFFFFF"><b>Notícias em destaque</b></font></h1>
            <hr>
          </div>
          <div class="row justify-content-center">

            <div class="col-md-3">
              <img src="assets/image/4c060edb-91e8-40f1-957d-ebc2400aecaf.jpeg" width="300" height="250" >
              <h4><b><font color="#FFFFFF">Programa de Parcelamento<br> Incentivado será reaberto<br> pela Prefeitura de São Paulo</font></b></h4>
              <font color="#747474"><h6>A Câmara de São Paulo aprovou nesta quinta-<br>feira (22 de junho) o projeto de lei que  </h6></font>
              <font color="#FFFFFF"><h5>Continue lendo</h5></font>
            </div>

            <div class="col-md-3">
              <img src="assets/image/escrita_fiscal.jpg" width="300" height="250"  >
              <h4><b><font color="#FFFFFF">Suspensão do envio por<br> correio do Boleto da Taxa de<br> Fiscalização de<br> Estabelecimentos – TFE<br> 2017</font></b></h4>
              <font color="#747474"><h6>A Secretaria Municipal da Fazenda informa<br> que não serão enviados, via correio, boletos<br> impressos para o pagamento da Taxa de<br> Fiscalização de Estabelecimentos - TFE de </h6></font>
              <font color="#FFFFFF"> <h5>Continue lendo</h5></font>
            </div> 
            <div class="col-md-4">
              <img src="assets/image/b3efd447-3f60-4459-bcbe-d913d6da3b42.jpeg" width="300" height="250"  >
              <h4><b><font color="#FFFFFF">Documentos em mãos<br> tornam mais ágil abertura de<br> empresa pelo novo<br> Empreenda Fácil</font></b></h4>
              <font color="#747474"><h6>Empreendedores que aderirem ao Programa<br> Empreenda Fácil, desenvolvido pela Prefeitura<br> de São Paulo, devem estar com<br> documentação em ordem já no início do </h6></font>
              <font color="#FFFFFF">  <h5>Continue lendo</h5></font>
            </div>        
          </div></br></br>
        </div>
              <div class="texto text-center p-4" id="orçamento"></br></br></br></br>
                <h2><font color="#2C2C2C"><b>Informações importantes</b></font></h2>  
                <font color="#DF050B"><h1><i class="bi bi-exclamation-triangle-fill"></i></h1></font>
              </div> 
            <div class="row justify-content-center">

              <div class="col-md-3">
                <img src="assets/image/ap-zoneamento-regiao-sub-mooca-13-08-2015-fotos-andre-bueno6925-300abre.jpg" width="300" height="250" >
                <h4><b>Lei de Anistia –<br> Regularização de<br> Edificações em SP –<br> Câmara Municipal de São<br> PauloLei de Anistia –<br> Regularização de<br> Edificações em SP –<br> Câmara Municipal de São<br> Paulo</b></h4>
                <font color="#747474"><h6>Os imóveis na cidade de São Paulo estão<br> com metragens além do permitido de<br> acordo com o Código de Edificações, em<br> relação a área construída lançada em IPTU </h6></font>
                <h5>Continue lendo</h5>
              </div>

              <div class="col-md-6">
                <img src="assets/image/engenheiro-vistoria-think-leisetributos-dc.jpg" width="300" height="250"  >
                <h4><b>Validade do alvará<br>condicionado é prorrogada<br>até 2020</b></h4>
                <font color="#747474"><h6>A Câmara Municipal de São Paulo aprovou,<br> na quarta-feira, 13/06, a prorrogação do<br> prazo para que as empresas instaladas na<br> capital paulista solicitem o Auto de Licença </h6></font>
                <h5>Continue lendo</h5>
              </div>         
            </div>      
            </br></br></br>
            <?php include "reutilizaveis/rodape.html" ?>
</body>
</html>