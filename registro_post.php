<?php

include('funcoes.php');

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$erros = [];

if (!validar_nome_usuario($nome)) {
  $erros[] = "Nome de usuário inválido.";
}

if (!validar_email($email)) {
  $erros[] = "E-mail inválido.";
}

if (!validar_senha($senha)) {
  $erros[] = "Senha inválida (mínimo de 6 caracteres).";
}

if (empty($erros)) {
  // Registro bem-sucedido!
  header('Location: sucesso.php');
  exit;
} else {
  // Falha no registro
  $mensagem_erro = implode('<br>', $erros);
  header('Location: erro.php?mensagem=' . urlencode($mensagem_erro));
  exit;
}

