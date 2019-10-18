<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="test_";
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
    exit();
} 
$name = $_GET['name'];
$qq = $_GET['qq'];
$sql = "INSERT INTO test ( name , qq) VALUES ('$name', '$qq')";
if ($conn->query($sql) === TRUE) {
    echo $qq;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 