<?php
include 'conexao.php';
$nome = $_POST['nomeCategoria'];
$id = $_POST['id'];
$sql = "UPDATE categoria SET nome='$nome' WHERE id =".$id;
$atualiza = mysqli_query($conexao,$sql);

if($atualiza) {
    header('Location: lista_categoria.php');
} 

?>