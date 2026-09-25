<?php

$logueado = true;
$administrador = true;
$voluntario = false;

echo($logueado && $administrador)? "<p> Efectivamente </p>": "<p> NO </p>";
echo($administrador || $voluntario)? "<p> Administrador </p>": "<p> Voluntario </p>";
echo(!$logueado)? "<p> Logueado </p>": "<p> No logueado </p>";
echo($administrador xor $voluntario )? "<p> Administrador </p>": "<p> Voluntario </p>";
var_dump($logueado);