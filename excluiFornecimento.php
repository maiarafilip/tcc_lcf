<?php

include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM fornecimento WHERE id=$id";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaFornecimento.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
