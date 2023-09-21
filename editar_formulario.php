<?php

include 'bd.php';

$id = $_POST['id'];
$mes = $_POST['mes'];
$publicador = $_POST['publicador'];
$horas = $_POST['horas'];
$publicacoes = $_POST['publicacoes'];
$videos = $_POST['videos'];
$revisitas = $_POST['revisitas'];
$estudos = $_POST['estudos'];

$query = "UPDATE relatorio SET mes='$mes', publicador='$publicador', horas='$horas', publicacoes='$publicacoes', videos='$videos', revisitas='$revisitas', estudos='$estudos' WHERE id = $id";


mysqli_query($conexao, $query);

header('location:index.php?pagina=relatorios');

