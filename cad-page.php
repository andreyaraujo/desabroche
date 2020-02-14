<?php
session_start();
ob_start();
$btnCad = filter_input(INPUT_POST, 'btnCad', FILTER_SANITIZE_STRING);
if ($btnCad) {
  include_once  'banco.php';
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  $dados['senha'] = password_hash($dados('senha'), PASSWORD_DEFAULT);
   
  $result_usuario = "INSERT INTO pessoa (nome, endereco, telefone, email, sexo, senha) values ( 
          '".$dados['nome']."',
          '".$dados['endereco']."',
          '".$dados['telefone']."',
          '".$dados['email']."',
          '".$dados['sexo']."',
          '".$dados['senha']."'          
          )";

  $resultado_usuario = mysqli_query($cont, $result_usuario);
  if (mysqli_insert_id($cont)) {
    $_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
    header("location: login-pag.php");
  }else {
    $_SESSION['msg'] ="Erro ao cadastrar usuário";
  }
}
require_once 'banco.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Desabroche</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons  -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS arquivos -->
  <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
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
              <i class="material-icons">apps</i> Login
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
            <form class="form" method="post" action="cad-page.php">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Cadastrar</h4>
              </div>
              <div class="card-body <?php echo !empty($nomeErro) ? 'error ' : ''; ?>">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome) ? $nome : ''; ?>">
                  <?php if (!empty($nomeErro)) : ?>
                    <span class="help-inline"><?php echo $nomeErro; ?></span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="card-body <?php echo !empty($enderecoErro) ? 'error ' : ''; ?>">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">place</i>
                    </span>
                  </div>
                  <input size="80" class="form-control" name="endereco" type="text" placeholder="Endereço" required="" value="<?php echo !empty($endereco) ? $endereco : ''; ?>">
                  <?php if (!empty($emailErro)) : ?>
                    <span class="help-inline"><?php echo $enderecoErro; ?></span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="card-body <?php echo !empty($telefoneErro) ? 'error ' : ''; ?>">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">phone</i>
                    </span>
                  </div>
                  <input size="35" class="form-control" name="telefone" type="text" placeholder="Telefone" required="" value="<?php echo !empty($telefone) ? $telefone : ''; ?>">
                  <?php if (!empty($emailErro)) : ?>
                    <span class="help-inline"><?php echo $telefoneErro; ?></span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="card-body <?php echo !empty($emailErro) ? 'error ' : ''; ?>">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input size="40" class="form-control" name="email" type="text" placeholder="Email" required="" value="<?php echo !empty($email) ? $email : ''; ?>">
                  <?php if (!empty($emailErro)) : ?>
                    <span class="help-inline"><?php echo $emailErro; ?></span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="card-body <?php echo !empty($sexoErro) ? 'error ' : ''; ?>">
                <div class="form-check form-check-radio form-check-inline">
                  <label class='form-check-label'>
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M" /> Masculino
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

                <div class="form-check form-check-radio form-check-inline">
                  <label class='form-check-label'>
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F" /> Feminino
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

                <?php if (!empty($sexoErro)) : ?>
                  <span class="help-inline"><?php echo $sexoErro; ?></span>
                <?php endif; ?>
              </div>
              <!-- SENHA -->
              <div class="card-body <?php echo !empty($senhaErro) ? 'error ' : ''; ?>">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input size="40" class="form-control" name="senha" type="password" placeholder="Senha" required="" value="<?php echo !empty($senha) ? $senha : ''; ?>">

                  <?php if (!empty($senhaErro)) : ?>
                    <span class="help-inline"><?php echo $senhaErro; ?></span>
                  <?php endif; ?>
                </div>
              </div>
              <!-- Botão -->
              <div class="text-center">
                <button type="submit" name="btnCad" class="btn btn-primary btn-link btn-wd btn-lg">Cadastre-se</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Rodapé-->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <div class="copyright float-left">
        <nav class="float-left">
          <ul>
            <a href="About US.php">
              About Us
            </a>
          </ul>
        </nav>
      </div>
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






if (!empty($_POST)) {
  //Acompanha os erros de validação
  $nomeErro = null;
  $enderecoErro = null;
  $telefoneErro = null;
  $emailErro = null;
  $sexoErro = null;
  $senhaErro = null;

  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $sexo = $_POST['sexo'];
  $senha = $_POST['senha'];

  //Validaçao dos campos:
  $validacao = true;
  if (empty($nome)) {
    $nomeErro = 'Por favor digite o seu nome!';
    $validacao = false;
  }

  if (empty($endereco)) {
    $enderecoErro = 'Por favor digite o seu endereço!';
    $validacao = false;
  }

  if (empty($telefone)) {
    $telefoneErro = 'Por favor digite o número do telefone!';
    $validacao = false;
  }

  if (empty($email)) {
    $telefoneErro = 'Por favor digite o endereço de email';
    $validacao = false;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = 'Por favor digite um endereço de email válido!';
    $validacao = false;
  }

  if (empty($sexo)) {
    $sexoErro = 'Por favor selecione o campo!';
    $validacao = false;
  }

  if (empty($senha)) {
    $senhaErro = 'Por favor digite o campo!';
    $validacao = false;
  }

  //Inserindo no Banco:

  if ($validacao) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO pessoa (nome, endereco, telefone, email, sexo, senha) VALUES(?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $endereco, $telefone, $email, $sexo, $senha));
    Banco::desconectar();
    header("Location: index.php");
  } else {
    echo "<script>alert('Usuário já existe.'); history.back();</script>";
  }
}

?>