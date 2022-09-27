<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

    <h2>Listagem do Produto</h2>

    <table class="table table-hover">
        <thead>
            <th>Material</th>
            <th>Tamanho</th>
            <th>Categoria</th>
            <th>Valor</th>
            <th>Validade</th>
            <th>Foto</th>
            <th>Descrição</th>
            <th>Observação</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM produto";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['material'] ?></td>
                <td><?php echo $linha['tamanho'] ?></td>
                <td><?php echo $linha['categoria'] ?></td>
                <td><?php echo $linha['preco'] ?></td>
                <td><?php echo $linha['validade'] ?></td>
                <td><?php echo $linha['foto'] ?></td>
                <td><?php echo $linha['descricao'] ?></td>
                <td><?php echo $linha['observacao'] ?></td>
                <td>Editar
                    Excluir
                </td>
            </tr>
            <?php } ?>
        </tbody>

</body>

</html>