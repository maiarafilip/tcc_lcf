<html>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <form action="recebeFornecimento.php" method="POST">

        <div class="container">
            <h2>Cadastro Fornecimento</h2>
        </div>

        <p>Fornecedor: </label><br> <input type="text" name="fornecedor"></p>
        <p>Materia prima: </label><br><input type="text" name="materiaprima"></p>
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
            <input class="btn btn-secondary" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </form>
</body>

</html>