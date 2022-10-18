<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Matéria Prima</title>

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
            <form action="recebeMateriaprima.php" method="POST">
                <h2>Cadastro de Matéria-Prima</h2>

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

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            Validade:
                            <input class="form-control" type="date" name="validade">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            Restrições:
                            <input class="form-control" type="text" name="restrições">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            Descrições:
                            <input class="form-control" type="text" name="descrições">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            Caracteristicas:
                            <input class="form-control" type="text" name="caracteristicas">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            Indicações:
                            <input class="form-control" type="text" name="indicações">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            Observações:
                            <input class="form-control" type="text" name="observações">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">

                            <input class="btn btn-secondary" type="submit" value="Cadastrar">
                            <input class="btn btn-secondary" type="reset" value="Limpar">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>