<?php
include 'conexao.php';

$nomeCategoria = $_POST['nomeCategoria'];

$sql = "INSERT INTO `categoria`(nome) VALUES ('$nomeCategoria')";
$inserir = mysqli_query($conexao,$sql);

if($inserir) {
    header('Location: cadastro_categoria.php?msg=ok');
} else {
    header('Location: cadastro_categoria.php?msg=error');
}


?>
