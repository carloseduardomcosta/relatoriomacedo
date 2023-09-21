<?php

$servidor = "localhost";
$usuario = "macedo";
$senha = "P@ssW0rd";
$bd = "relatorio";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

$query = "SELECT * FROM relatorio";
$consulta = mysqli_query($conexao, $query);

$query2 = "SELECT * FROM relatorio";