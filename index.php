<?php
require "index_model.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ferramentas de ia</title>
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
 <header>
   <h1>Ferramentas</h1>
      <nav>
          <a href="index.php">Home</a>
           <a href="form.html">Nova ferramenta</a>
      </nav>
  </header>

  <main>
    <section>
     <h2>ferramentas</h2>
<?php

while($linha_posts = $result_set_ferramentas->fetch(\PDO::FETCH_ASSOC)){
    $nome = $linha_posts["nome"];
    $categoria = $linha_posts["categoria"];
    $descricao = $linha_posts["descricao"];
    $link = $linha_posts["link"];
    $gratuita = $linha_posts["gratuita"];

    $template_article = "<article>
      <p>$nome</p>
      <p>Autor: $categoria</p>
      <p>$descricao</p>
      <p>$link</p>
      <p>$gratuita</p>
      </article>";

     echo $template_article;
}
?>
          