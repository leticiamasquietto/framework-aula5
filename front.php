<?php

$path = $_SERVER['REQUEST_URI'];

if ($path == "/framework-aula5/codigo") {
    require "codigo.php";
} elseif ($path == "/framework-aula5/sobre") {
    require "sobre.php";
} else {
    echo "Página não encontrada";
}