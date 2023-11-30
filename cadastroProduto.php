<?php
include 'conexao.php';


$codigo = $_POST['codigoProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `produto`(`codigo`, `nome`, `categoria`, `quantidade`, `fornecedor`) VALUES ($codigo,'$nomeProduto',$categoria,$quantidade,$fornecedor)";
$inserir = mysqli_query($conexao,$sql);

if($inserir) {
    header('Location: cadastro_produto.php?msg=ok');
} else {
    header('Location: cadastro_produto.php?msg=error');
}


?>
