<?php
$servername = 'localhost';
$username = '';
$password = '';
$dbname = 'test';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->exec("set name utf8");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>