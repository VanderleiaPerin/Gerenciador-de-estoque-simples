<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <title>Trabalho - Estoque itens</title>
</head>

<body>
<?php include 'menu.php' ?>
    <div class="container">

        <div class="col-md-6">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM categoria order by nome asc";
        $busca = mysqli_query($conexao,$sql);
        while($dados = mysqli_fetch_array($busca)) {
           
            $idCategoria = $dados['id'];
            $nomeCategoria = $dados['nome'];
        ?>
    <tr>
      <td><?php echo $nomeCategoria ?></td>
      <td>
        <a href='editaCategoria.php?id=<?php echo $idCategoria ?>' role='button' class='btn btn-warning btn-sm'><i class="bi bi-pencil-fill"></i></a>
        <a href='excluiCategoria.php?id=<?php echo $idCategoria ?>' role='button' class='btn btn-danger btn-sm'><i class="bi bi-x-square-fill"></i></a>    
    </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>