

<?php

$na=$_POST["name"]; 
$ag=$_POST["age"]; 
$se=$_POST["sex"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO PEOPLE (name, age, sex)
VALUES ('{$na}', '{$ag}', '{$se}')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>

