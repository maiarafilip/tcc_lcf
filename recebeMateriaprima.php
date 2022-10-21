<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$cor = $_POST['cor'];
$foto = $_POST['foto'];
$validade = $_POST['validade'];
$restrições = $_POST['restrições'];
$descrições = $_POST['descrições'];
$dimensões = $_POST['dimensões'];
$caracteristicas = $_POST['caracteristicas'];
$indicações = $_POST['indicações'];
$observacao = $_POST['observacao'];

$sql = "INSERT INTO materiaprima (cor, foto, validade, restricoes, descricoes, dimensoes, caracteristicas, 
indicacoes, observacao) 
        VALUES ('$cor', '$foto', '$validade', '$restrições', '$descrições', '$dimensões',
         '$caracteristicas', '$indicações', '$observacao')";
         echo $sql;
mysqli_query($conn, $sql);


mysqli_close($conn);
echo "<script>alert('Cadastrado com sucesso')</script>";
header('Refresh: 1;url=index.php');

?>