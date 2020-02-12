<?php

$conn = mysqli_connect("localhost", "root", "") or die("Não foi possivel conectar com o servidor de dados!");
mysqli_select_db($conn, "desabroche") or die("Banco de dados não localizado");

#Checando conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}else{
    echo "";
}
?>