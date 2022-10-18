<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Fornecedor</title>

    <?php include('conexao.php'); ?>
    <?php include('menu.php'); ?>

    <link href="Listagem.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h2>Listagem de Fornecedor</h2>

        <table class="table table-hover">
            <thead>
                <th>Nome do fornecedor</th>
                <th>E-mail do fornecedor</th>
                <th>fone do fornecedor</th>
                <th>material</th>
                <th>comentarios</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM fornecedor";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>
                    <tr>
                        <td><?php echo $linha['nome'] ?></td>
                        <td><?php echo $linha['email'] ?></td>
                        <td><?php echo $linha['fone'] ?></td>
                        <td><?php echo $linha['material'] ?></td>
                        <td><?php echo $linha['comentarios'] ?></td>
                        <td>Editar
                            <a href="#" onclick='confirmar("<?php echo $linha[0] ?>") ' class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>

                    <script>
                        function confirmar(cod) {
                            if (confirm('Você realmente deseja excluir essa linha?'))
                                location.href = 'excluiFornecedor.php?id=' + cod;
                        }
                    </script>

                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>