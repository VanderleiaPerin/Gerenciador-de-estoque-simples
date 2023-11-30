<?php 
include 'conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM produto WHERE id =".$id;
$busca = mysqli_query($conexao,$sql);
while ($dados = mysqli_fetch_array($busca)) {
    $nome = $dados['nome'];
    $codigo = $dados['codigo'];
    $categoria = $dados['categoria'];
    $quantidade = $dados['quantidade'];
    $fornecedor = $dados['fornecedor'];

}

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Trabalho - Estoque itens</title>
</head>

<body>
<?php include 'menu.php' ?>
    <div class="container">
        <div class="col-md-6">
            <form action="editaProduto2.php" method="post">
                <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Código Produto:</label>
                    <input type="text" class="form-control" name="codigoProduto" value='<?php echo $codigo ?>' required>
                    <input type="hidden" class="form-control" id="id" name="id" value='<?php echo $id ?>' required>
                </div>
                <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Nome Produto:</label>
                    <input type="text" class="form-control" name="nomeProduto" value='<?php echo $nome ?>' required>
                </div>
                <div class="mb-3">
                    <label>Categoria</label>
                    <select class="form-select" aria-label="Default select example" name="categoria">
                        <?php
                          include 'conexao.php';
                          $sqlCategoria = "SELECT * FROM categoria order by nome asc";
                          $busca = mysqli_query($conexao,$sqlCategoria);
                          while($dados = mysqli_fetch_array($busca)){
                            $idCategoria = $dados['id'];
                            $nomeCategoria = $dados['nome'];
                          

                        ?>
                        <option value="<?php echo $categoria ?>" <?php if($idCategoria == $categoria) {echo 'selected';}?>><?php echo $nomeCategoria ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cep" class="form-label">Quantidade:</label>
                    <input type="number" class="form-control" value='<?php echo $quantidade ?>' name='quantidade'>
                </div>
                
                <div class="mb-3">
                    <label>Fornecedor</label>
                    <select class="form-select" aria-label="Default select example" name="fornecedor">
                    <?php
                          include 'conexao.php';
                          $sqlCategoria = "SELECT * FROM fornecedor order by nome asc";
                          $busca = mysqli_query($conexao,$sqlCategoria);
                          while($dados = mysqli_fetch_array($busca)){
                            $idFornec = $dados['id'];
                            $nomeFornec = $dados['nome'];
                          

                        ?>
                         <option value="<?php echo $fornecedor ?>" <?php if($idFornec == $fornecedor) {echo 'selected';}?>><?php echo $nomeFornec ?></option>
                         <?php } ?>
                    </select>
                </div>

                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>