<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$nomeuser = $_POST['nome'];
$emailuser = $_POST['email'];
$foneuser = $_POST['fone'];
$endereço = $_POST['endereco'];
$material = $_POST['material'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO fornecedor (nome, email, fone, endereço, material, comentarios) 
        VALUES ('$nomeuser', '$emailuser', '$foneuser', '$endereço', '$material', '$comentarios')";

mysqli_query($conn, $sql);


mysqli_close($conn);

echo "<script>alert('Cadastrado com sucesso')</script>";
header('Refresh: 1;url=index.php');

?>