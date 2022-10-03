<html>

<head></head>

<body>
    <?php include('menu.php'); ?>
    <form action="recebeMateriaprima.php" method="POST">
    <div class="container">
            <h2>Cadastro de Matéria-Prima</h2>
        </div>

        <div class="container">
            <h2>hdcejnfcen</h2>
            <div class="form-group">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        Cor:
                        <input class="form-control" type="text" name="cor">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        Dimensões:
                        <input class="form-control" type="text" name="dimensões">
                    </div>
                </div>
            </div>

        <p>Foto: </label><br><input type="text" name="foto"></p>

        <div class="container">
            <div class="form-group">
                Validade:
                <input class="form-control" type="date" name="validade">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                Restrições:
                <input class="form-control" type="text" name="restrições">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                Descrições:
                <input class="form-control" type="text" name="descrições">
            </div>
        </div>

        <div class="container">
            <div class="form-group">
                Caracteristicas:
                <input class="form-control" type="text" name="caracteristicas">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                Indicações:
                <input class="form-control" type="text" name="indicações">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                Observações:
                <input class="form-control" type="text" name="observações">
            </div>
        </div>

        <div class="form-group">
            <input class="btn btn-secondary" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </form>
</body>

</html>