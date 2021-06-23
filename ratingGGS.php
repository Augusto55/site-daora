<?php

$numero = htmlspecialchars($_POST['numeros']);
$bsubmit = htmlspecialchars($_POST['botao_submit']);
$media = 1;

$media = ($numero + $media)/$bsubmit;

include();
?>
