<?php

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);

$nova_linha = "" . $nome . "," . $email .  "\n";

$arquivo = fopen('./registros.csv', 'a');
if ($arquivo) {
  fwrite($arquivo, $nova_linha);
  fclose($arquivo);
  echo "<script type='text/javascript'>alert('Inscrição recebida com sucesso. Obrigado ". $nome . "!');</script>";
}
else {
  echo "<script type='text/javascript'>alert('Erro na inscrição. Tente novamente ". $nome . "!');</script>";
}


 ?>
