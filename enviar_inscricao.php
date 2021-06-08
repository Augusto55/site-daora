<?php

  $fala = htmlspecialchars($_POST['fala ae']);
  $email = htmlspecialchars($_POST['email']);
  $nome = htmlspecialchars($_POST['nome']);
  $sexo = htmlspecialchars($_POST['sexo'])



  $assunto = "O que o cara vai falar na área do site";
  $destino = "168244@upf.br";
  mail($destino, $assunto, $fala);


  echo "<script type='text/javascript'>alert('Recebemos sua inscrição') </script>";

  include("index.html");

 ?>
