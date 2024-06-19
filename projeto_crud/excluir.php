<?php
 
include 'conexao.php';

$id = $_POST ['id'];

$recebendo_cadastros = "DELETE FROM clientes WHERE id = '$id'"; 
$query_cadastros =mysqli_query($connx, $recebendo_cadastros);
header('location:produtos.php');

?>
