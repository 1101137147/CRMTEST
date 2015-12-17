<?php
$servername = 'localhost';

$dbname = 'test';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8");
    $conn->exec("set name utf8");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>