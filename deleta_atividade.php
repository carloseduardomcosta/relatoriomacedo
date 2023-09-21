<?php

include 'bd.php';

$id = $_GET['id'];

$query = "DELETE FROM relatorio WHERE id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=relatorios');
