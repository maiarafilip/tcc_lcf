<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Fornecimento</title>

    <?php include('menu.php');
    include('conexao.php');
    ?>

    <link href="Cadastro.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <div id="corfundo" class="row shadow"></div>
        <div class="col-sm-6">
            <div class="form-image">
                <img src="imagens/fotoCadastro.png" id="imagem">
            </div>
        </div>

        <div class="col-sm-6">
            <form action="recebeFornecimento.php" method="POST">
                <h2>Cadastro de Fornecimento</h2>

                <div class="form-group">
                    <label>Fornecedor: </label>
                    <select class="form-control" name="fornecedor">
                </div>
                <option>Selecione</option>
                <?php
                $sql = "SELECT * FROM fornecedor";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>
                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['nome'] ?></option>
                <?php } ?>
                </select></p>

                <div class="form-group">
                    <label>Matéria-Prima: </label>
                    <select class="form-control" name="materiaprima">
                </div>
                <option>Selecione</option>
                <?php
                $sql = "SELECT * FROM materiaprima";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>
                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['cor'] ?></option>
                <?php } ?>
                </select></p>

                <div class="form-group">
                    Hora:
                    <input class="form-control" type="time" name="hora">
                </div>

                <div class="form-group">
                    Data:
                    <input class="form-control" type="date" name="data">
                </div>
                <div class="form-group">
                    Valor:
                    <input class="form-control" type="text" name="valor">
                </div>

                <div class="form-group">
                <input class="btn btn-dark" type="submit" value="Cadastrar">
                <input class="btn btn-danger" type="reset" value="Limpar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>