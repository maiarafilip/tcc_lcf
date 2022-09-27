<html>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <form action="recebeCliente.php" method="POST">
        <h2>Cadastro de Cliente</h2>


        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        Nome completo:
                        <input class="form-control" type="text" name="nome">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">

                        Telefone:
                        <input class="form-control" type="text" name="fone" placeholder="(XX) XXXXX-XXXX">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">

                        Email:
                        <input class="form-control" type="text" name="email">
                    </div>
                </div>
            </div>
        </div>
        <p><input type="checkbox" name="sem" checked /> Marque aqui se <i>não</i> possuir email. </p>
        <strong>Endereço </strong>
        <form action="dados_endereco.html" method="POST">
            <p>
                <strong>Cadastre o endereço do cliente</strong>
            <p>Rua:</label><br> <input type="text" name="rua"></p>
            <p>Bairro: </label><br> <input type="text" name="bairro"></p>
            <p>Cidade:</label><br> <input type="text" name="cidade"></p>
            <p>CEP: </label><br> <input type="text" name="cep"></p>
            UF: </label><br>
            <select name="uf">
                <option value="0">Selecione</option>
                <option value="SC">SC</option>
                <option value="RS">RS</option>
                <option value="PR">PR</option>
                <option value="outra">Outra</option>
            </select>

            Outra: <input type="text" size="26" maxlength="256" name="outra">
            </p>
            <input type="submit" value="Cadastrar">
        </form>
</body>

</html>