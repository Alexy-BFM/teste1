<?php
//pre_match, verifica se foi digitado apenas os caracteres listados, se tiver algo diferente nao passa.
function validar_nome_usuario($nome) {
  if (preg_match("/^[a-zA-Z0-9_]+$/", $nome)) {
    return true;
  } else {
    return false;
  }
}
//filter_var, possibilita o uso do FILTER_VALIDATE_EMAIL, que valida se o email esta coreetamente escrito
function validar_email($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  } else {
    return false;
  }
}

function validar_senha($senha) {
  if (strlen($senha) >= 6) {
    return true;
  } else {
    return false;
  }
}



