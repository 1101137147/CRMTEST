<?php
$servername = 'localhost';
$username = '';
$word = '';
$dbname = 'test';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $word);
    $conn->exec("set name utf8");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>