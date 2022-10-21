<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Edição de Matperia Prima</title>

    <link href="Edita.css" rel="stylesheet">

    <?php
    include('conexao.php');

    $coduser = $_GET['id'];

    if (isset($_POST['btnSalvar'])) {
        $cor = $_POST['cor'];
        $validade = $_POST['validade'];
        $restricoes = $_POST['restricoes'];
        $dimensoes =  $_POST['dimensoes'];
        $caracteristicas = $_POST['caracteristicas'];
        $indicacoes =  $_POST['indicacoes'];
        $observacao =  $_POST['observacao'];

        $sql = "UPDATE materiaprima SET 
               cor='$cor',  
               validade='$validade',
               restricoes='$restricoes',
               dimensoes='$dimensoes',
               caracteristicas='$caracteristicas',
               indicacoes='$indicacoes',
               observacao='$observacao'  
            WHERE id='$coduser'";

        mysqli_query($conn, $sql); // executa a alteração no bd

        echo "<script> alert('Materia Prima alterada com sucesso.') </script>";
        header("Refresh:0.05; url=listaMateriaprima.php", true, 303); // redireciona para o arquivo listaUsuarios.php
    }
    $sql = "SELECT * FROM materiaprima WHERE id=$coduser";
    $rs = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_array($rs);
    ?>
    <?php include('menu.php'); ?>

</head>

<body>

    <div class='container'>
        <h3 class='p-3'>Alterar Dados</h3>
        <form method="post">

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        Cor: <input class='form-control' type="text" name="cor" value="<?php echo $linha['cor'] ?>" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        Dimensões: <input class='form-control' type="text" name="dimensoes" value="<?php echo $linha['dimensoes'] ?>" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        Validade: <input class='form-control' type="date" name="validade" value="<?php echo $linha['validade'] ?>" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        Restrições: <input class='form-control' type="text" name="restricoes" value="<?php echo $linha['restricoes'] ?>" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        Caracteristicas: <input class='form-control' type="text" name="caracteristicas" value="<?= $linha['caracteristicas'] ?>" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        Indicações: <input class='form-control' type="text" name="indicacoes" value="<?php echo $linha['indicacoes'] ?>" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        Observação: <input class='form-control' type="text" name="observacao" value="<?php echo $linha['observacao'] ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <input class='btn btn-dark' type="submit" value="Salvar dados" name="btnSalvar" />
                    <input class='btn btn-danger' type="reset" value="Limpar campos" />
                </div>
        </form>
    </div>
</body>

</html>