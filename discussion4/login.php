<?php // login.php
$host = 'localhost';    
$port = '3306';         // CHANGED from 3305
$data = 'publications'; 
$user = 'root';         
$pass = 'mysql';        
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;port=$port;dbname=$data;charset=$chrs";
$opts =
[
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES => false,
];
?>