<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$nomeuser = $_POST['nome'];
$emailuser = $_POST['email'];
$foneuser = $_POST['fone'];

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$sql = "INSERT INTO endereço (rua, bairro, cidade, uf, cep) 
VALUES ('$rua', '$bairro', '$cidade', '$uf', '$cep')";
mysqli_query($conn, $sql);


$addr_id = mysqli_insert_id($conn);

$sql = "INSERT INTO cliente (nome, email, fone, endereco) 
        VALUES ('$nomeuser', '$emailuser', '$foneuser', '$addr_id')";
mysqli_query($conn, $sql);


mysqli_close($conn);
header('Location: ./index.php');

?>