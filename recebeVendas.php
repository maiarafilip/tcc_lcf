<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$produto = $_POST ['produto'];
$cliente = $_POST['cliente'];
$hora = $_POST['hora'];
$data = $_POST['data'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$formadepagamento = $_POST['formadepagamento'];

$sql = "INSERT INTO vendas (produto, cliente, hora, data, valor, quantidade, formadepagamento ) 
        VALUES ('$produto', '$cliente', '$hora', '$data', '$valor', '$quantidade', '$formadepagamento' )";      
mysqli_query($conn, $sql);

mysqli_close($conn);
echo "<script>alert('Cadastrado com sucesso')</script>";
header('Refresh: 1;url=index.php');

?>