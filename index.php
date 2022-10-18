<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Sistema LCF</title>

  <link href="Index.css" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark  w3-theme-d5 justify-content-center">
    <nav class="navbar navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/pintinho.jpg" width="40" height="30" alt="" id="logo">
      </a>
    </nav>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
          </svg> Home</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
            <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0Z" />
          </svg> Cadastro
        </a>
        <div class="dropdown-menu-dark dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadastroCliente.php">Cliente</a>
          <a class="dropdown-item" href="cadastroFornecedor.php">Fornecedor</a>
          <a class="dropdown-item" href="cadastroMateriaprima.php">Materia prima</a>
          <a class="dropdown-item" href="cadastroProduto.php">Produto</a>
          <a class="dropdown-item" href="cadastroVendas.php">Vendas</a>
          <a class="dropdown-item" href="cadastroFabricacao.php">Fabricação</a>
          <a class="dropdown-item" href="cadastroFornecimento.php">Fornecimento</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
          </svg> Listagem
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listaCliente.php">Cliente</a>
          <a class="dropdown-item" href="listaFornecedor.php">Fornecedor</a>
          <a class="dropdown-item" href="listaMateriaprima.php">Materia prima</a>
          <a class="dropdown-item" href="listaProduto.php">Produto</a>
          <a class="dropdown-item" href="listaVendas.php">Vendas</a>
          <a class="dropdown-item" href="listaFabricacao.php">Fabricação</a>
          <a class="dropdown-item" href="listaFornecimento.php">Fornecimento</a>

        </div>
      </li>
    </ul>
  </nav>


  <div class="jumbotron">
    <h1 class="display-4">Seja Bem Vindo, Sistema Gerenciador LCF</h1>
    <hr class="my-4">
    <p class="lead">Aqui você podera gerenciar seu funcionamento, cadastrando desde o forncecimento da matéria prima,
      até as vendas da mercadoria.</p>
  </div>


  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/pintinho.jpg" alt="Pintinho" width="00" height="500">
      </div>
      <div class="carousel-item">
        <img src="imagens/pintinho2.jpg" alt="Pintinho sozinho" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="imagens/pintinho3.jpg" alt="Pintinho com o ovo" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

</body>

</html>