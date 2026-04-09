<?php
require_once 'conexao.php';

$nome      = $_POST['nome'];      
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao']; 
$link      = $_POST['link'];     
$gratuita  = $_POST['gratuita'];
$gratuita  = isset($_POST['gratuita']) ? 1 : 0;  


$sql = "insert into ferramentas (nome, categoria, descricao, link, gratuita) Values (:nome, :categoria, :descricao, :link, :gratuita);";


$pdo = new PDO("sqlite:banco.db");

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':categoria', $categoria);
$stmt->bindValue(':descricao', $descricao);
$stmt->bindValue(':link', $link);
$stmt->bindValue(':gratuita', $gratuita);



$stmt->execute();

$id = $pdo->lastInsertId();
?>

<?php
require "index.php"
?>