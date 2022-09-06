<?php

switch ($hamburguesa) {
    case 'clasica':
        $precio = 500;
        break;
    case 'criolla':
        $precio = 600;
        break;
    case 'americana':
        $precio = 700;
        break;
    case 'mexicana':
        $precio = 800;
        break;
}

switch ($num_medallones) {
    case '1':
        break;
    case '2':
        $precio = $precio + 70;
        break;
    case '3':
        $precio = $precio + 120;
        break;
}

if ($papas==1){
    $precio = $precio + 200;
}

foreach ($agregado as $valor){
switch ($valor) {
    case 'cheddar':
        $precio = $precio + 100;
        break;
    case 'cebolla':
        $precio = $precio + 30;
        break;
    case 'pepinillos':
        $precio = $precio + 40;
        break;
    case 'guacamole':
        $precio = $precio + 50;
        break;
    case 'chimi':
        $precio = $precio + 20;
        break;
}}