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
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ações</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM produto order by nome asc";
        $busca = mysqli_query($conexao,$sql);
        while($dados = mysqli_fetch_array($busca)) {
            $id = $dados['id'];
            $nome = $dados['nome'];
            $categoria = $dados['categoria'];
            $quantidade = $dados['quantidade'];
            $fornecedor = $dados['fornecedor'];
            $codigo = $dados['codigo'];
        ?>
    <tr>
      <td><?php echo $codigo ?></td>
      <td><?php echo $nome ?></td>
      <td><?php 
            $sql = "SELECT * FROM categoria where id =".$categoria;
            $busca = mysqli_query($conexao,$sql);
            while($dados = mysqli_fetch_array($busca)) {
               echo $nomeCategoria = $dados['nome'];
            }
      ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php 
        $sql = "SELECT * FROM fornecedor where id =".$fornecedor;
        $busca = mysqli_query($conexao,$sql);
        while($dados = mysqli_fetch_array($busca)) {
              echo $nomeFornec = $dados['nome'];
        }
      ?></td>
      <td>
        <a href='editaProduto.php?id=<?php echo $id ?>' role='button' class='btn btn-warning btn-sm'><i class="bi bi-pencil-fill"></i></a>
        <a href='excluiProduto.php?id=<?php echo $id ?>' role='button' class='btn btn-danger btn-sm'><i class="bi bi-x-square-fill"></i></a>    
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