<?php

require_once "classes/Cliente.php";
require_once "classes/Vendedor.php";
require_once "classes/Carro.php";


$carro = new Carro;
$carro ->modelo = "Montana";
$carro ->marca = "Chevrolet";
$carro ->ano = 2025;
$carro ->estado = "Novo";


$carro2 = new Carro;
$carro2 ->modelo = "Suv Tracker";
$carro2 ->marca = "Chevrolet";
$carro2 ->ano = 2025;
$carro2 ->estado = "Novo";

var_dump($carro);
echo "<br><br>";
var_dump($carro2);
echo "<br><br>";

$cli = new Cliente;
$cli ->nome = "Eric";
$cli ->idade = 19;
$cli ->endereco = "Rua B, 321";
$cli ->email = "oliveireric907@gmail.com";

$cli2 = new Cliente;
$cli2 ->nome = "Marcos";
$cli2 ->idade = 23;
$cli2 ->endereco = "Rua A, 321";
$cli2 ->email = "oliveirMarcos907@gmail.com";


var_dump($cli);
echo "<br><br>";
var_dump($cli2);
echo "<br><br>";

$Vendedor = new Vendedor;
$Vendedor ->nome = "Roberto Carlos";
$Vendedor ->idvendedor = "1";
$Vendedor ->venda = "Suv Tracker";

$Vendedor2 = new Vendedor;
$Vendedor2 ->nome = "Alves Djin";
$Vendedor2 ->idvendedor = "2";
$Vendedor2 ->venda = "Montana";

var_dump($Vendedor);
echo "<br><br>";
var_dump($Vendedor2);
echo "<br><br>";

