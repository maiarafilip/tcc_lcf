<html>

<head></head>

<body>
    <?php include('menu.php');
    include('conexao.php');
    ?>

        <form action="recebeVendas.php" method="POST">

        <div class="container">
            <h2>Cadastro das Vendas</h2>
            <div class="form-group">

            <div class="container">
            <h2>hdcejnfcen</h2>
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
                Valor:
                <input class="form-control" type="text" name="valor">
            </div>
            <div class="form-group">
                Quantidade:
                <input class="form-control" type="number" name="quantidade">
            </div>
            <div class="form-group">
                Forma de pagamento:
                <input class="form-control" type="text" name="formadepagamento">
            </div>
            <div class="form-group">
                <input class="btn btn-secondary" type="reset" value="Limpar">
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>

</html>