<?php 
include 'conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM categoria WHERE id =".$id;
$busca = mysqli_query($conexao,$sql);
while ($dados = mysqli_fetch_array($busca)) {
    $nome = $dados['nome'];
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
            <form action="editaCategoria2.php" method="post">
                
                <div class="mb-3">
                    <label for="nomeFantasia" class="form-label">Nome Categoria:</label>
                    <input type="text" class="form-control" name="nomeCategoria" value="<?php echo $nome ?>" required>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required>
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