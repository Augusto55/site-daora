<?php

$numero = htmlspecialchars($_POST['numeros']);
$media = 1;

$arquivo = fopen('./submit_ggs.txt', 'w+');
$numerolido = fread($arquivo, "10");
$novonumero = ($numerolido + 1);
fwrite($arquivo, $novonumero);
echo "<script type='text/javascript'>alert($novonumero);</script>";





include("G_ggs.html");
?>
