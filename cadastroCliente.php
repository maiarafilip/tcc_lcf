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
                        <input class="form-control" type="text" name="email" placeholder="name@example.com">
                    </div>
                </div>
            </div>
        </div>
        <p><input type="checkbox" name="sem" checked /> Marque aqui se <i>não</i> possuir email. </p>
        <h3>Cadastre o endereço do cliente</h3>
        <form action="dados_endereco.html" method="POST">
                <div class="form-group">
               Rua:
                <input class="form-control" type="text" name="rua">
            </div>
            <form action="dados_endereco.html" method="POST">
                <div class="form-group">
               Bairro:
                <input class="form-control" type="text" name="bairro">
            </div>
            <div class="form-group">
              Cidade:
                <input class="form-control" type="text" name="cidade">
            </div>
            <div class="form-group">
              CEP:
                <input class="form-control" type="text" name="cep">
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
            <div class="form-group">
        <input class="btn btn-secondary" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </div>
        </form>
</body>

</html>