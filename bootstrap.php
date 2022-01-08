<?php

function partial($name, $params = [])
{
    extract($params);

    require(__DIR__ . "/html_partials/{$name}.html.php");
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function pdo()
{
    $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=commerce", 'commerce');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $pdo;
}