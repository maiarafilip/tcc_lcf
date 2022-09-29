
<?php

include('conexao.php');

$cod = $_GET['id'];

$sql = "DELETE FROM cliente WHERE id=$cod";
echo $sql;
mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaCliente.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}