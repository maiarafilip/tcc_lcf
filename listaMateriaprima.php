<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Matéria Prima</title>

    <?php include('conexao.php'); ?>
    <?php include('menu.php'); ?>

    <link href="Listagem.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h2>Listagem de Matéria Prima</h2>

        <table class="table table-hover">
            <thead>
                <th>cor</th>
                <th>foto</th>
                <th>validade</th>
                <th>restrições</th>
                <th>descrições</th>
                <th>dimensões</th>
                <th>caracteristicas</th>
                <th>indicações</th>
                <th>observacao</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM materiaprima";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>
                    <tr>
                        <td><?php echo $linha['cor'] ?></td>
                        <td><?php echo $linha['foto'] ?></td>
                        <td><?php echo $linha['validade'] ?></td>
                        <td><?php echo $linha['restricoes'] ?></td>
                        <td><?php echo $linha['descricoes'] ?></td>
                        <td><?php echo $linha['dimensoes'] ?></td>
                        <td><?php echo $linha['caracteristicas'] ?></td>
                        <td><?php echo $linha['indicacoes'] ?></td>
                        <td><?php echo $linha['observacao'] ?></td>
                        <td>Editar
                            <a href="#" onclick='confirmar("<?php echo $linha[0] ?>") ' class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>

                    <script>
                        function confirmar(cod) {
                            if (confirm('Você realmente deseja excluir essa linha?'))
                                location.href = 'excluiMateriaprima.php?id=' + cod;
                        }
                    </script>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>