<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Listagem de Fornecimento</title>

    <?php include('conexao.php'); ?>
    <?php include('menu.php'); ?>

    <link href="Listagem.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h2>Listagem de Fornecimento</h2>

        <table class="table table-hover">
            <thead>
                <th>Fornecedor</th>
                <th>Materia prima</th>
                <th>Hora</th>
                <th>Data</th>
                <th>Valor</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM fornecimento";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>
                    <tr>
                        <td><?php echo $linha['fornecedor'] ?></td>
                        <td><?php echo $linha['materiaprima'] ?></td>
                        <td><?php echo $linha['hora'] ?></td>
                        <td><?php echo $linha['data'] ?></td>
                        <td><?php echo $linha['valor'] ?></td>
                        <td>Editar
                            <a href="#" onclick='confirmar("<?php echo $linha[0] ?>") ' class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>

                    <script>
                        function confirmar(cod) {
                            if (confirm('Você realmente deseja excluir essa linha?'))
                                location.href = 'excluiFornecimento.php?id=' + cod;
                        }
                    </script>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>