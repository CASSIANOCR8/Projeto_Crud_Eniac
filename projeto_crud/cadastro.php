<?php
 
include 'conexao.php';

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$endereco = $_POST ['endereco'];

$recebendo_cadastros = "INSERT INTO
clientes
VALUES (' ', '$nome','$email','$telefone','$endereco')"; 
$query_cadastros =mysqli_query($connx, $recebendo_cadastros);
header('location:produtos.php');

?>
