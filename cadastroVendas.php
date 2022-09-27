<html>

<head></head>

<body>
    <?php include('menu.php');
    include('conexao.php');
    ?>
    <div class="container">
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

            <p>Cliente: </label><br>
                <select name="cliente">
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
            <div class="form-group">
                <label>Hora:</label>
                <input class="form-control" type="time" name="hora">
            </div>
            <div class="form-group">
                <label>Data: </label>
                <input class="form-control" type="date" name="data">
            </div>
            <p>Valor: </label><br><input type="text" name="valor"></p>
            <p>Quantidade: </label><br> <input type="number" name="quantidade"></p>
            <p>Forma de Pagamento: </label><br> <input type="text" name="formadepagamento"></p>
            <div class="form-group">
                <input class="btn btn-secondary" type="reset" value="Limpar">
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>

</html>