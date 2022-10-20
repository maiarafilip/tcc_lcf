<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Edição de Fornecedor</title>

<?php
include('conexao.php');

$coduser = $_GET['id'];

if (isset($_POST['btnSalvar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $endereco = $_POST['endereco'];
    $material =  $_POST['material'];
    $comentarios =  $_POST['comentarios'];
    $sql = "UPDATE fornecedor SET 
              nome='$nome', 
              email ='$email', 
              fone='$fone',
              endereco='$endereco',
              material='$material',
              comentarios='$comentarios'
            WHERE id='$coduser'";

    mysqli_query($conn, $sql); // executa a alteração no bd

    echo "<script> alert('Fornecimento alterado com sucesso.') </script>";
    header("Refresh:0.05; url=listaFornecedor.php", true,303); // redireciona para o arquivo listaUsuarios.php
}
$sql = "SELECT * FROM fornecedor WHERE id=$coduser";
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
        Nome: <input class='form-control' type="text" name="nome" value="<?php echo $linha['nome'] ?>" />
        </div>
        <div class="form-group">
       Email: <input class='form-control' type="text" name="email" value="<?php echo $linha['email'] ?>" />
        </div>
         <div class="form-group">
        Telefone: <input class='form-control' type="text" name="fone" value="<?php echo $linha['fone'] ?>" />
        </div>
        <div class="form-group">
         Endereço: <input class='form-control' type="text" name="endereco" value="<?php echo $linha['endereco'] ?>" />
        </div>
        <div class="form-group">
          Material: <input class='form-control' type="text" name="material" value="<?php echo $linha['material'] ?>" />
        </div>
        <div class="form-group">
         Comentários: <input class='form-control' type="text" name="comentarios" value="<?php echo $linha['comentarios'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>
</body>

</html>