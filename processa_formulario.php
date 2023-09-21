<?php
include 'bd.php';

$mes = $_POST['mes'];
$publicador = $_POST['publicador'];
$data = $_POST['data'];
$horas = $_POST['horas'];
$publicacoes = $_POST['publicacoes'];
$videos = $_POST['videos'];
$revisitas = $_POST['revisitas'];
$estudos = $_POST['estudos'];

$query = "INSERT INTO relatorio (mes, publicador, data, horas, publicacoes, videos, revisitas, estudos) VALUES ('$mes', '$publicador', '$data', '$horas', '$publicacoes', '$videos', '$revisitas', '$estudos')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=relatorios');