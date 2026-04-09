<?php

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$link = $_POST["link"];
$gratuita = $_POST["gratuita"];


$sql = "update posts 
set nome=:nome, categoria=:categoria, descricao=:descricao, link=:link, gratuita=:gratuita
where id=:id;";


$pdo = new PDO("sqlite:banco.db");


$stmt = $pdo->prepare($sql);



$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':categoria', $categoria);
$stmt->bindValue(':descricao', $descricao);
$stmt->bindValue(':link', $link);
$stmt->bindValue(':gratuita', $gratuita);



$stmt->execute(); 

?>

<?php
require "listagem-posts.php"
?>