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
<title>Licentec Projetos e Assessorias</title>
    </head>
    <body>
    <?php include "reutilizaveis/cabecalho.html";?>

    <script>
        document.getElementById("contato").classList.add("active")
    </script>
</br></br></br></br></br></br>
<div class="texto text-center p-4">
            <h1><font color="#2C2C2C"><b>ENTRE EM CONTATO</b></font></h1>
            <font color="#E23C41">   <h1><i class="bi bi-chevron-down"></i></h1></font>
          </div>

          <div class="container-fluid pt-2 " id="form">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12 ml-auto bg-white mb-4">
                            
                    <div class="container">
            <form name="formulario" class="needs-validation" method="post" action="enviaEmail.php" enctype="multipart/form-data">
            <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="Nome"><h6><b>Nome*</b></h6></label>
                <input type="text" class="form-control" name="nome" id="Nome" required>
              </div>
              </div>
              <div class="col">
              <div class="form-group" id="caixaEmail">
                <label for="Email"><h6><b>E-mail*</b></h6></label>
                <input type="mail" class="form-control" name="email" id="email" required onfocusout="validaEmail()">
              </div>
              </div>
              </div>
            <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="fone"><h6><b>Telefone*</b></h6></label>
                <input type="tel" class="form-control" name="fone" id="fone"required>
              </div>
              </div>
              <div class="col">
              <div class="form-group">
                <label for="Cidade"><h6><b>Cidade / UF</b></h6></label>
                <input type="text" class="form-control" name="cidade" id="Cidade">
              </div>
              </div>
              </div>
              <div class="row">
              <div class="col">
              <div class="form-group">
                <label for="exampleFormControlSelect1"><h6><b>Assunto*</b></h6></label>
                <select class="form-control" name="assunto" id="assunto" required>
                <option>Assunto Administrativo</option>
                <option>Duvida técnica</option>
                <option>Como ser parceiro</option>
                <option>Orçamento</option>
                <option>Trabalhe Conosco</option>
            </select>
            </div>
            </div>
            <div class="col">
            <div class="form-group">
            <label for="arquivo"><h6><b>Enviar arquivo (Currículo, Dados para Orçamento e etc)</b></h6></label><br>
            <label class="btn btn-default"><input type="file" id="arquivo" name="arquivo" class="form-control-file">
            <input type="hidden" name="MAX_FILE_SIZE" value="25000000">
            <input type="hidden" name="retorno" id="retorno" value="contato.php">
</label>
</div>
</div>
</div>
              <div class="form-group ">
                <label for="corpo"><h6><b>Mensagem</b></h6></label>
                <textarea class="form-control" name="corpo" id="corpo" rows="3" ></textarea>
              </div>         
              <div class="form-group ">
              <div class="g-recaptcha" data-sitekey="Insert your recaptcha site key here"></div>
              </div>         
             
              <button type="submit" id="btn" class="btn btn-danger"><b>SOLICITAR ORÇAMENTO</b></button>
              <input type="hidden" name="retorno" id="retorno" value="contato.php">

            </form></br> 
            </div>
         
        </div>
      </div>
  </div>
</div>
          <div class="texto text-center p-4">
            <h1><font color="#2C2C2C"><b>Nossa Localização</b></font></h1>
            <hr>
          </div>
          <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 p-0 m-0">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d778.2361377451442!2d-46.63775177483904!3d-23.619824407269935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a51596549b7%3A0xd9ace866c11a0b7!2sLicentec%20Projetos%20e%20Assessoria!5e1!3m2!1spt-BR!2sbr!4v1617970211827!5m2!1spt-BR!2sbr"
          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
      </div>
    </div>
  </div>
            <?php include "reutilizaveis/rodape.html" ?>     
</body>
</html>