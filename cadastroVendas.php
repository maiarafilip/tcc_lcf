<html>

<head>
    <?php include('menu.php');
    include('conexao.php');
    ?>

    <link href="Cadastro.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <div id="corfundo" class="row shadow">
            <div class="col-sm-6">
                <div class="form-image">
                    <img src="imagens/fotoCadastro.png" id="imagem">
                </div>
            </div>


            <div class="col-sm-6">
                <form action="recebeVendas.php" method="POST">
                    <h2>Cadastro das Vendas</h2>

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
                        <label>Cliente: </label>
                        <select class="form-control" name="cliente">
                    </div>
                    <option>Selecione</option>
                    <?php
                    $sql = "SELECT * FROM cliente";
                    $rs = mysqli_query($conn, $sql);
                    while ($linha = mysqli_fetch_array($rs)) {
                    ?>
                        <option value="<?php echo $linha['id'] ?>"><?php echo $linha['nome'] ?></option>
                    <?php } ?>
                    </select>
                    </p>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                Hora:
                                <input class="form-control" type="time" name="hora">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                Data:
                                <input class="form-control" type="date" name="data">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        Quantidade:
                        <input class="form-control" type="text" name="quantidade">
                    </div>

                    <div class="form-group">
                        Valor:
                        <input class="form-control" type="number" name="valor">
                    </div>

                    <div class="form-group">
                        Forma de pagamento:
                        <input class="form-control" type="text" name="formadepagamento">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-secondary" type="submit" value="Cadastrar">
                        <input class="btn btn-secondary" type="reset" value="Limpar">
                    </div>
                </form>
            </div>
</body>

</html>