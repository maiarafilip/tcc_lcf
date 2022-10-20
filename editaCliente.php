<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Edição de Cliente</title>

<?php
include('conexao.php');

$coduser = $_GET['codCliente'];

if (isset($_POST['btnSalvar'])) {
    $nomeuser = $_POST['nome'];
    $emailuser = $_POST['email'];
    $foneuser = $_POST['fone'];

    $sql = "UPDATE cliente SET 
                nome='$nomeuser', 
                email='$emailuser', 
                fone='$foneuser' 
            WHERE coduser='$id'";

    mysqli_query($conn, $sql);
    echo "<script> alert('Usuário alterado com sucesso') </script>";
}
$sql = "SELECT * FROM cliente WHERE id=$coduser";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>

</head>

<body>
    <h3 class='p-3'>Alterar Dados</h3>

    <form method="POST">
        <div class="form-group">
            Nome: <input class='form-control' type="text" name="nomeuser" value="<?php echo $linha['nome'] ?>" />
        </div>
        <div class="form-group">
            Senha: <input class='form-control' type="email" name="emailuser" value="<?php echo $linha['email'] ?>" />
        </div>

        <p>fone: <input type="text" name="foneuser" value="<?php echo $linha['fone'] ?>"></p>

        <p> <input type="submit" value="Salvar dados" name="btnSalvar"> </p>
    </form>
</body>

</html>