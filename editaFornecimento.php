<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Edição de Fornecimento</title>

<?php
include('conexao.php');

$coduser = $_GET['id'];

if (isset($_POST['btnSalvar'])) {
    $fornecedor = $_POST['fornecedor'];
    $materiaprima = $_POST['materiaprima'];
    $hora = $_POST['hora'];
    $data = $_POST['data'];
    $valor =  $_POST['valor'];
    $sql = "UPDATE fornecimento SET 
              fornecedor='$fornecedor', 
              materiaprima ='$materiaprima ', 
              hora='$hora',
              data='$data',
              valor='$valor' 
            WHERE id='$coduser'";

    mysqli_query($conn, $sql); // executa a alteração no bd

    echo "<script> alert('Fornecimento alterado com sucesso.') </script>";
    header("Refresh:0.05; url=listaFornecimento.php", true,303); // redireciona para o arquivo listaUsuarios.php
}
$sql = "SELECT * FROM fornecimento WHERE id=$coduser";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>

</head>

<body>

<div class='container'>
    <h3 class='p-3'>Alterar Dados</h3>

    <form method="post">
        <div class="form-group">
        Fornecedor: <input class='form-control' type="text" name="fornecedor" value="<?php echo $linha['fornecedor'] ?>" />
        </div>
        <div class="form-group">
        Materia Prima: <input class='form-control' type="text" name="materiaprima" value="<?php echo $linha['materiaprima'] ?>" />
        </div>
         <div class="form-group">
          Hora: <input class='form-control' type="time" name="hora" value="<?php echo $linha['hora'] ?>" />
        </div>
        <div class="form-group">
          Data: <input class='form-control' type="date" name="data" value="<?php echo $linha['data'] ?>" />
        </div>
        <div class="form-group">
           Valor: <input class='form-control' type="text" name="valor" value="<?php echo $linha['valor'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>
</body>

</html>