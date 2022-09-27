<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

    <h2>Listagem de fornecedor</h2>

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
                    Excluir
                </td>
            </tr>
            <?php } ?>
        </tbody>


</body>

</html>