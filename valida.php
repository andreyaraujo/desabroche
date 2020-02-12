<?php
session_start();
$btnLogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);
if ($btnLogin) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    echo "$email -- $senha";

}else{
    $_SESSION['msg'] ="Página não encontrada";
    header("Location: login-page.php");
}

?>