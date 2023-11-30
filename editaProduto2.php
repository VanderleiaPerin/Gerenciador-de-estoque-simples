<?php
include 'conexao.php';

$id = $_POST['id'];
$codigo = $_POST['codigoProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `produto` SET `codigo` = '$codigo', `nome` = '$nomeProduto', `categoria`=$categoria, `quantidade` = $quantidade, `fornecedor` = $fornecedor WHERE id=".$id;
$atualiza = mysqli_query($conexao,$sql);

if($atualiza) {
    header('Location: lista_produto.php');
}


?>
