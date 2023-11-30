<?php
include 'conexao.php';

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST['telefone'];

echo $sql = "INSERT INTO `fornecedor`(`nome`, `cnpj`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `telefone`) VALUES 
('$nome','$cnpj','$cep','$endereco','$numero','$bairro','$cidade','$estado','$telefone')";
$inserir = mysqli_query($conexao,$sql);

if($inserir) {
    header('Location: cadastro_fornecedor.php?msg=ok');
} else {
    header('Location: cadastro_fornecedor.php?msg=error');
}



?>