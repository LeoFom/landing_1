<?php

$host = '127.0.0.1';
$db ='lizabrovi';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = mysqli_connect($host,$user,$pass,$db);
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn,$user,$pass,$opt);
