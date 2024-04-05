<?php

require("../vendor/autoload.php");

// Obtener la url

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;

switch ($resource){
    case '/':
        echo "Estás en la front page";
        break;

    case 'incomes':
        echo "Estás en Incomes";
        break;

    case 'withdrawals':
        echo "Estás en Withdrawals";
        break;

    default:
        echo "404 Not Found";
        break;
}