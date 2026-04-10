<?php
$id = $_GET["id"];

$pdo = new \PDO("sqlite:banco.db");

$sql = "DELETE FROM ferramentas WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: index.php");
exit;
?>
