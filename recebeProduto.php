<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$material = $_POST['material'];
$tamanho = $_POST['tamanho'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$validade = $_POST['validade'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];
$observacao = $_POST['observacao'];

$sql = "INSERT INTO produto (material, tamanho , categoria, preco, validade, foto, descricao, observacao) 
        VALUES ('$material', '$tamanho', '$categoria', '$preco', '$validade',
         '$foto', '$descricao', '$observacao')";
mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Produto cadastrado com sucesso.";