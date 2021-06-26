<?php

$numero = htmlspecialchars($_POST['numeros']);

$arquivo = fopen('./submit_ggs.txt', 'a');
if ($arquivo) {
  fwrite($arquivo, $numero);
  fclose($arquivo);
}
?>
