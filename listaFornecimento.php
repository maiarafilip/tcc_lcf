<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

    <h2>Listagem do Fornecimento</h2>

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
                    Excluir
                </td>
            </tr>
            <?php } ?>
        </tbody>

</body>

</html>