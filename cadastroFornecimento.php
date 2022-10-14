<html>

<head>
    <?php include('menu.php'); ?>

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
                <form action="recebeFornecimento.php" method="POST">
                    <h2>Cadastro Fornecimento</h2>

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
                        <input class="btn btn-secondary" type="submit" value="Cadastrar">
                        <input class="btn btn-secondary" type="reset" value="Limpar">
                    </div>
                </form>    
            </div>
        </div>
        </form>
</body>

</html>