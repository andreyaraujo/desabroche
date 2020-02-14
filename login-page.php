<?php
session_start();
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Desabroche
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php"><img src="assets/img/logo/logo 6.1.png" alt="Desabroche" height="80"></a>
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
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i>Login
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="login-page.php" class="dropdown-item">
                <i class="material-icons">layers</i> Login
              </a>
              <a href="cad-page.php" class="dropdown-item">
                <i class="material-icons">content_paste</i> Cadastre-se
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/desabrochee_" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <?php
              if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }
              if (isset($_SESSION['msgcad'])) {
                echo $_SESSION['msgcad'];
                unset($_SESSION['msgcad']);
              }    
            ?>
            <form class="form" method="post" action="?go=logar">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
              <p class="description text-center">ou</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
                </div>
              </div>
              <div class="footer text-center">
                <!-- <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Login</button> -->
                <input type="submit" name="btnLogin"class="btn btn-primary btn-link btn-wd btn-lg" value="Logar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--Rodapé-->
    <footer class="footer" data-background-color="black">
      <div class="container">
        <nav class="float-left">
          <ul>
            <a href="About US.php">
              About Us
            </a>
            </li>
            <li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, feito com <i class="material-icons">favorite</i> por
          <a href="equipe.php" target="_blank">Projeto:YI</a> para a web.
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
</body>

</html>
<?php
if (@$_GET['go'] == 'logar') {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $logar = "SELECT * FROM pessoa WHERE email = '$email' AND senha = '$senha'";

  if (empty($email)) {
    echo "<script>alert.onWindow('Preencha o seu email para logar-se'); history.back();</script>";
  } elseif (empty($senha)) {
    echo "<script>alert('Preencha sua senha para logar-se'); history.back();</script>";
  } else {
    $query1 = mysqli_num_rows(mysqli_query($conn, $logar));
    if ($query1 == 1) {
      $_SESSION['email_session'] = $email;
      $_SESSION['senha_session'] = $senha;
      echo "<script>Window.alert('Usuário logado com sucesso.');</script>";
      echo "<meta http-equiv='refresh' content='0, url=./logado/index.php'>";
    } else {
      echo "<script>Window.alert('Usuário não existe.'); history.back();</script>";
      echo "<meta http-equiv='refresh' content='0, url=cad-page.php'>";
    }
  }
}
?>