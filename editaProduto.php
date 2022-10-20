<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Edição de Produto</title>

<?php
include('conexao.php');

$coduser = $_GET['id'];

if (isset($_POST['btnSalvar'])) {
    $material = $_POST['material'];
    $tamanho = $_POST['tamanho'];
    $categoria = $_POST['categoria'];
    $preco =  $_POST['preco'];
    $validade = $_POST['validade'];
    $foto = $_POST['foto'];
    $descricao =  $_POST['descricao'];
    $observacao =  $_POST['observacao'];

    $sql = "UPDATE produto SET 
               material='$material', 
               tamanho='$tamanho', 
               categoria='$categoria',
               preco='$preco',
               validade='$validade',
               foto='$foto',
               descricao='$descricao',
               observacao='$observacao'  
            WHERE id='$coduser'";

    mysqli_query($conn, $sql); // executa a alteração no bd

    echo "<script> alert('Produto alterado com sucesso.') </script>";
    header("Refresh:0.05; url=listaProduto.php", true,303); // redireciona para o arquivo listaUsuarios.php
}
$sql = "SELECT * FROM produto WHERE id=$coduser";
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
             Material: <input class='form-control' type="text" name="material" value="<?php echo $linha['material'] ?>" />
        </div>
        <div class="form-group">
            Tamanho: <input class='form-control' type="text" name="tamanho" value="<?php echo $linha['tamanho'] ?>" />
        </div>
        <div class="form-group">
           Categoria: <input class='form-control' type="text" name="categoria" value="<?php echo $linha['categoria'] ?>" />
        </div>
        <div class="form-group">
            Preço: <input class='form-control' type="text" name="preco" value="<?php echo $linha['preco'] ?>" />
        </div>
        <div class="form-group">
           Validade: <input class='form-control' type="text" name="validade" value="<?php echo $linha['validade'] ?>" />
        </div>
        <div class="form-group">
           Foto: <input class='form-control' type="text" name="foto" value="<?= $linha['foto'] ?>" />
        </div>
        <div class="form-group">
           Descrição: <input class='form-control' type="text" name="descricao" value="<?php echo $linha['descricao'] ?>" />
        </div>
        <div class="form-group">
           Observação: <input class='form-control' type="text" name="observacao" value="<?php echo $linha['observacao'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>
</body>

</html>
