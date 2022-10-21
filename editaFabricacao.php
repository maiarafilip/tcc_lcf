<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Edição de Fabricação</title>

<link href="Edita.css" rel="stylesheet">

<?php
include('conexao.php');

$coduser = $_GET['id'];

if (isset($_POST['btnSalvar'])) {
    $produto = $_POST['produto'];
    $materiaprima = $_POST['materiaprima'];
    $quantidade = $_POST['quantidade'];
    $data = $_POST['data'];

    $sql = "UPDATE fabricacao SET 
              produto='$produto', 
              materiaprima ='$materiaprima', 
              quantidade='$quantidade',
              data='$data'
            WHERE id='$coduser'";

    mysqli_query($conn, $sql); // executa a alteração no bd

    echo "<script> alert('Fabricação alterada com sucesso.') </script>";
    header("Refresh:0.05; url=listaFabricacao.php", true,303); // redireciona para o arquivo listaUsuarios.php
}
$sql = "SELECT * FROM fabricacao WHERE id=$coduser";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar Dados</h3>

</head>

<body>

    <form method="post">
        <div class="form-group">
        Produto: <input class='form-control' type="text" name="produto" value="<?php echo $linha['produto'] ?>" />
        </div>
         <div class="form-group">
         Materia Prima: <input class='form-control' type="text" name="materiaprima" value="<?php echo $linha['materiaprima'] ?>" />
        </div>
        <div class="form-group">
        Quantidade: <input class='form-control' type="text" name="quantidade" value="<?php echo $linha['quantidade'] ?>" />
        </div>
        <div class="form-group">
         Data: <input class='form-control' type="date" name="data" value="<?php echo $linha['data'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>
</body>

</html>