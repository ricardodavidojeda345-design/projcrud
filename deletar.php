<?php
$id_post = $_GET["id"];

$string_de_conexao = "sqlite:banco_blog.db";

$pdo = new \PDO($string_de_conexao);

$sql = "
Delete from posts where id = :id_post
";

$stmt = $pdo->prepare($sql);


$stmt->bindValue(':id_post', $id_post);


$stmt->execute(); 

require "listagem-posts.php";
?>