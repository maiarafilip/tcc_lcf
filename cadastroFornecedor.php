<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
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
                <form action="recebeFornecedor.php" method="POST">
                    <h2>Cadastro de Fornecedor</h2>

                    <div class="form-group">
                        Nome completo:
                        <input class="form-control" type="text" name="nome">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                Telefone:
                                <input class="form-control" type="text" name="fone" placeholder="(XX) XXXXX-XXXX">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                Email:
                                <input class="form-control" type="text" name="email" placeholder="name@example.com">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                Material:
                                <input class="form-control" type="text" name="material">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                Observação:
                                <input class="form-control" type="text" name="comentarios">
                            </div>
                        </div>
                    </div>

                    <h2>Endereço do Fornecedor</h2>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                Rua:
                                <input class="form-control" type="text" name="rua">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                Bairro:
                                <input class="form-control" type="text" name="bairro">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                Cidade:
                                <input class="form-control" type="text" name="cidade">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                CEP:
                                <input class="form-control" type="text" name="cep">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                Uf:
                                <select input class="form-control" type="text" name="uf">
                                    <option value="0">Selecione</option>
                                    <option value="SC">SC</option>
                                    <option value="RS">RS</option>
                                    <option value="PR">PR</option>
                                    <option value="outra">Outra</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">

                                Outra:
                                <input class="form-control" type="text" name="outra">
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
    </div>
</body>

</html>