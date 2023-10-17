<?php

require_once ("config.php");

$pdo = new PDO("mysql:dbname=" . $config["dbname"] . ";host=" . $config["host"], $config["user"], $config["password"]);

function selectSQL($sql){
    global $pdo;
    $query = $pdo->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectSQLUnico($sql){
    global $pdo;
    $query = $pdo->query($sql);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function iduSQL($sql){
    global $pdo;
    $query = $pdo->query($sql);
}

?>