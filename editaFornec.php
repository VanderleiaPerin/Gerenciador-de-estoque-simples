<?php 
include 'conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM fornecedor WHERE id =".$id;
$busca = mysqli_query($conexao,$sql);
while ($dados = mysqli_fetch_array($busca)) {
    $nome = $dados['nome'];
    $telefone = $dados['telefone'];
    $cnpj = $dados['cnpj'];
    $cep = $dados['cep'];
    $endereco = $dados['endereco'];
    $numero = $dados['numero'];
    $bairro = $dados['bairro'];
    $cidade = $dados['cidade'];
    $estado = $dados['estado'];
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
            <form action="editaFornec2.php" method="post">
                
            <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Nome Fornecedor:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value='<?php echo $nome ?>' required>
                    <input type="hidden" class="form-control" id="id" name="id" value='<?php echo $id ?>' required>
                </div>
                <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Telefone:</label>
                    <input type="text" class="form-control telefone" id="telefone" name="telefone" value='<?php echo $telefone ?>' required>
                </div>
                <div class="mb-3">
                    <label for="cnpj" class="form-label">CNPJ:</label>
                    <input type="text" class="form-control cnpj" id="cnpj" value='<?php echo $cnpj ?>' name="cnpj" required>
                </div>
                
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" class="form-control cep" id="cep" name='cep' value='<?php echo $cep ?>' maxlength="8" onkeyup="viaCEP()"
                        required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="rua" name="endereco" value='<?php echo $endereco ?>' required>
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label">Número:</label>
                    <input type="text" class="form-control" id="numero" value='<?php echo $numero ?>' name="numero" required>
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" value='<?php echo $bairro ?>' name="bairro" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" value='<?php echo $bairro ?>' name="cidade" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Estado:</label>
                    <input type="text" class="form-control" id="uf" value='<?php echo $estado ?>' name="estado" required>
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