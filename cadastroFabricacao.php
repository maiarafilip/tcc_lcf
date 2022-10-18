<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Fabricação</title>

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
            <form action="recebeFabricacao.php" method="POST">
                <h2>Cadastro de Fabricação</h2>

                <div class="form-group">
                    <label>Produto: </label>
                    <select class="form-control" name="produto">
                </div>
                <option>Selecione</option>
                <?php
                $sql = "SELECT * FROM produto";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>
                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['descricao'] ?></option>
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
                    Quantidade:
                    <input class="form-control" type="number" name="quantidade">
                </div>

                <div class="form-group">
                    Data:
                    <input class="form-control" type="date" name="data">
                </div>

                <div class="form-group">
                    <input class="btn btn-secondary" type="submit" value="Cadastrar">
                    <input class="btn btn-secondary" type="reset" value="Limpar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>