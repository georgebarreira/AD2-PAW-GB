<?php
$host = 'localhost';
$database = 'prompt_battle';
$user = 'root';
$password = '';


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>