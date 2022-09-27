<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$produto = $_POST['produto'];
$materiaprima = $_POST['materiaprima'];
$quantidade = $_POST['quantidade'];
$data = $_POST['data'];

$sql = "INSERT INTO fabricacao (produto, materiaprima, quantidade, data) 
        VALUES ('$produto', '$materiaprima', '$quantidade', '$data')";
mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Fabricação cadastrada com sucesso.";