<?php
$conn = new \PDO("sqlite:banco.db");

$sql_ferramentas = "
SELECT id, nome, categoria, descricao, link, gratuita
FROM ferramentas
ORDER BY id DESC
";

$result_set_ferramentas = $conn->query($sql_ferramentas);
?>
