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
$id=$_GET['id'];
$sql = "SELECT id, name, qq FROM test  WHERE id = ";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . htmlspecialchars($row["name"]). " " . $row["qq"]. "<br>";
    }
} else {
    echo "0 结果";
}
$str = "name=1 '' javascript:alert(1)";
echo htmlspecialchars($str);
$conn->close();

?>