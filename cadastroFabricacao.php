<html>

<head></head>

<body>
    <?php include('menu.php');
    include('conexao.php');
    ?>
    <form action="recebeFabricacao.php" method="POST">
        <h2>Cadastro da Fabricação</h2>

        <div class="container">
            <h2>hdcejnfcen</h2>
            <div class="form-group">

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
            <input class="btn btn-secondary" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </form>
</body>

</html>