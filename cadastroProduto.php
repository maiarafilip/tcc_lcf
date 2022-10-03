<html>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <form action="recebeProduto.php" method="POST">
        <div class="container">
            <h2>Cadastro do Produto</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        Material:
                        <input class="form-control" type="text" name="material">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        Tamanho:
                        <input class="form-control" type="text" name="tamanho">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        Categoria:
                        <input class="form-control" type="text" name="categoria">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        Preço:
                        <input class="form-control" type="text" name="preco">
                    </div>
                </div>
            </div>


            <div class="form-group">
                Validade:
                <input class="form-control" type="date" name="validade">
            </div>
        </div>

        <p>Foto: </label><br> <input type="text" name="foto"></p>

        <div class="container">
            <div class="form-group">
                Descrição:
                <input class="form-control" type="text" name="descricao">
            </div>
        </div>

        <div class="container">
            <div class="form-group">
                Observação:
                <input class="form-control" type="text" name="observacao">
            </div>
        </div>

        <div class="form-group">
            <input class="btn btn-secondary" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </form>
</body>

</html>