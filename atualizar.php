<?php
$id       = $_POST["id"];
$nome     = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$link     = $_POST["link"];
$gratuita = isset($_POST["gratuita"]) ? 1 : 0;



$sql = "UPDATE ferramentas 
        SET nome=:nome, categoria=:categoria, descricao=:descricao, link=:link, gratuita=:gratuita
        WHERE id=:id";
        
$pdo = new PDO("sqlite:banco.db");

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':categoria', $categoria);
$stmt->bindValue(':descricao', $descricao);
$stmt->bindValue(':link', $link);
$stmt->bindValue(':gratuita', $gratuita);
$stmt->execute();

header("Location: index.php");
exit;
?>
