<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Produto</title>

    <?php include('menu.php'); ?>

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
            <form action="recebeProduto.php" method="POST">
                <h2>Cadastro de Produto</h2>

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

                    <div class="col-sm-6">
                        <div class="form-group">
                            Validade:
                            <input class="form-control" type="date" name="validade">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            Descrição:
                            <input class="form-control" type="text" name="descricao">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            Observação:
                            <input class="form-control" type="text" name="observacao">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="btn btn-dark" type="submit" value="Cadastrar">
                        <input class="btn btn-danger" type="reset" value="Limpar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>

</html>