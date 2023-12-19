<?php
$servername="localhost";
$username="root";
$password="1234";
$dbname="kimsieun";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDD::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>DB 연결 성공</p>";
} catch(PDOException $e){
    echo $e->getMessage();
    exit;
}