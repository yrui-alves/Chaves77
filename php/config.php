<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'chaves77';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

if($conexao->connect_errno)
{
    echo("erro");
}
else{
    echo("conexao efetuada com sucesso")
}

?>