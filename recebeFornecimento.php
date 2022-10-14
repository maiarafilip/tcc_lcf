<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$fornecedor = $_POST['fornecedor'];
$materiaprima = $_POST['materiaprima'];
$hora = $_POST['hora'];
$data = $_POST['data'];
$valor = $_POST['valor'];


$sql = "INSERT INTO fornecimento (fornecedor, materiaprima, hora, data, valor) 
        VALUES ('$fornecedor', '$materiaprima', '$hora', '$data', '$valor')";
mysqli_query($conn, $sql);

mysqli_close($conn);
echo "<script>alert('Cadastrado com sucesso')</script>";
header('Refresh: 1;url=index.php');

?>