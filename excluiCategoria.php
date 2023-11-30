<?php

include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM categoria WHERE id =".$id;
$deleta = mysqli_query($conexao,$sql);

if($deleta) {
    header('Location: lista_categoria.php');
}
?>