<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];


$sql = "INSERT INTO enedereco (rua, bairro, cidade, uf) 
VALUES ('$rua' '$bairro' '$cidade' '$uf' '$cep' )";
mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<script>alert('Cadastrado com sucesso')</script>";
header('Refresh: 1;url=index.php');

?>