<?php

  $fala = htmlspecialchars($_POST['fala ae']);
  $email = htmlspecialchars($_POST['email']);
  $nome = htmlspecialchars($_POST['nome']);
  $sexo = htmlspecialchars($_POST['sexo']);

  if



  $assunto = "O que o cara vai falar na área do site";
  $destino = "168244@upf.br";
  mail($destino, $assunto, $fala);

  $fp = fopen("dados.csv", "a+");
  $escreve = fwrite($fp, "\n$fala;$email;$nome;$sexo");
  fclose($fp);


  echo "<script type='text/javascript'>alert('Recebemos sua inscrição') </script>";

  include("index.html");

 ?>
