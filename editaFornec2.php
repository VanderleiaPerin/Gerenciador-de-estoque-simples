<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST['telefone'];

$sql = "UPDATE `fornecedor` SET `nome` = '$nome', `cnpj` = '$cnpj', `cep`='$cep', `endereco` = '$endereco', `numero` = '$numero', `bairro` = '$bairro', `cidade` = '$cidade', `estado` = '$estado', `telefone` = '$telefone' WHERE id =".$id; 
$atualiza = mysqli_query($conexao,$sql);

if($atualiza) {
    header('Location: lista_fornecedor.php?msg=ok');
} 


?>