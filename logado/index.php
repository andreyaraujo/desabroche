<?php
session_start();
if (!isset($_SESSION['usuario_session']) && !isset($_SESSION['senha_session'])){
    echo "<meta http-equiv='refresh' content='0, url=../login-page.php'>";
}else{
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Desabroche</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fontes e icones     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS arquivos -->
  <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="?go=sair" class="toggle nav-link">
              <i class="material-icons">first_page</i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('../assets/img/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Desabroche</h1>
            <h3>Seu modo de vestir</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!--inicio conteudo-->

 <div class="main main-raised">
    <div class="section section-basic">
      <div class="col-md-6">
 
      </div>
      <div class="container">



        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/1.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho único</dd><dd>Sabadou com esse look maravilhoso?
</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$35,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/2.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho único</dd><dd>Macaquinho costas com elástico

</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$34,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/3.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho P</dd><dd>Macaquinho</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$36,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/4.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho único</dd><dd>Para as amantes de cropped!</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$25,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/5.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho único</dd><dd>Body ciganinha</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$30,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/6.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho P </dd><dd>Costas com elástico</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$40,00</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/7.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho P </dd><dd>Macaquinho</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$50,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/8.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho P </dd><dd>Cropped</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$30,00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="../assets/img/roupas/9.jpeg">
              <div class="card-body">
                <p class="card-text"><dl><dd>Tamanho M </dd><dd>Short</dd></dl></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  </div>
                  <small class="text-muted">R$47,00</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <p class="float-right">
            <a href="#">Voltar ao topo</a>
          </p>
        </div>
        <!--fim conteudo-->
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>Obrigado por nos apoiar!</h3>
          </div>
          
          <button id="instagram" class="btn btn-raised btn-instagram sharrre">
            <i class="fa fa-instagram"></i>
          </button>

        </div>
      </div>
    </div>
  </div>
  <!--Rodapé-->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>

          <li>
            <a href="index.php">
              Início
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, feito com <i class="material-icons">favorite</i> por
        <a href="#" target="_blank">Projeto:YI</a> para a web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>
</html>
<?php
  }
    if(@$_GET['go'] == 'sair'){
        unset($_SESSION['usuario_session']);
        unset($_SESSION['senha_session']);
        echo "<meta http-equiv='refresh' content='0, url=../'>";
      }
?>