<?php

include('funcoes.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Registro de Usuário (GET)</title>
</head>
<body>
  <h1>Registro de Usuário</h1>
  <form action="registro_post.php" method="get">
    <label for="nome">Nome de Usuário:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <button type="submit">Registrar</button>
  </form>
</body>
</html>
