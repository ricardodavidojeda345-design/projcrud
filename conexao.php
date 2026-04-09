<?php
function conectar() {
    $pdo = new PDO("sqlite:banco.db");
    return $pdo;
}
?>