<?php
$conn = new \PDO("sqlite:banco.db");


$result_set = $conn->query("
SELECT nome, categoria, descricao, link, gratuita
FROM ferramentas;
");
$result_set_ferramentas = $conn->query("
SELECT nome, categoria, descricao, link, gratuita
FROM ferramentas;
");


$uma_linha = $result_set->fetch(\PDO::FETCH_ASSOC);


$nome = $uma_linha["nome"]; 
$categoria = $uma_linha["categoria"]; 
$descricao = $uma_linha["descricao"]; 
$link = $uma_linha["link"]; 
$gratuito = $uma_linha["gratuita"]; 

?>