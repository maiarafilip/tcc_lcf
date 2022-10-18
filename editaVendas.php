<!DOCTYPE HTML>
<html lang="pt-br">
<meta charset="UTF-8">

<?php
include('conexao.php');

$coduser = $_GET['id'];

if (isset($_POST['btnSalvar'])) {
    $produto = $_POST['produto'];
    $cliente = $_POST['cliente'];
    $hora = $_POST['hora'];
    $data =  $_POST['data'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $formadepagamento =  $_POST['formadepagamento'];

    $sql = "UPDATE vendas SET 
               produto='$produto', 
               hora='$hora ', 
               data='$data',
               valor='$valor' 
               quantidade='$quantidade',
               formadepagamento='$pagamento' 
            WHERE id='$coduser'";

    mysqli_query($conn, $sql); // executa a alteração no bd

    echo "<script> alert('Venda alterado com sucesso.') </script>";

    header("Refresh:0.05; url=listaVendas.php", true,303); // redireciona para o arquivo listaUsuarios.php
}
$sql = "SELECT * FROM vendas WHERE id=$coduser";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar Dados</h3>

    <form method="post">
        <div class="form-group">
            Produto: <input class='form-control' type="text" name="produto" value="<?php echo $linha['produto'] ?>" />
        </div>
        <div class="form-group">
            Cliente: <input class='form-control' type="text" name="cliente" value="<?php echo $linha['cliente'] ?>" />
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
           Quantidade: <input class='form-control' type="number" name="quantidade" value="<?php echo $linha['qauntidade'] ?>" />
        </div>
        <div class="form-group">
            Forma de Pagamento: <input class='form-control' type="text" name="formadepagamento" value="<?php echo $linha['formadepagamento'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>
</body>

</html>
