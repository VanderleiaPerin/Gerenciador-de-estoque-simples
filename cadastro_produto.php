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
            <form action="cadastroProduto.php" method="post">
                <?php
                            if(isset($_GET['msg'])){
                                if($_GET['msg'] == 'ok') { ?>
                                    <div class="alert alert-success" role="alert">
                                        Operação concluída com sucesso!
                                      </div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Operação não foi concluída!
                                      </div>
                                <?php }
                            }

                            ?>
                <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Código Produto:</label>
                    <input type="text" class="form-control" name="codigoProduto" required>
                </div>
                <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Nome Produto:</label>
                    <input type="text" class="form-control" name="nomeProduto" required>
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
                        <option value="<?php echo $idCategoria ?>"><?php echo $nomeCategoria ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cep" class="form-label">Quantidade:</label>
                    <input type="number" class="form-control" name='quantidade'>
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
                         <option value="<?php echo $idFornec ?>"><?php echo $nomeFornec ?></option>
                         <?php } ?>
                    </select>
                </div>

                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>