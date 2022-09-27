<?php

include('conexao.php');

$cod = $_GET['coduser'];

$sql = "DELETE FROM cliente WHERE coduser=$cod";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaCliente.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

