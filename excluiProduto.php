<?php

include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE id =".$id;
$deleta = mysqli_query($conexao,$sql);

if($deleta) {
    header('Location: lista_produto.php');
}
?>