<?php
$sna=$_POST["sname"];


$con=mysqli_connect("localhost","root","","myDB");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM PEOPLE
WHERE name='{$sna}'");

while($row = mysqli_fetch_array($result))
{
    echo $row['name'] .  $row['age']. $row['sex'];
    echo "<br>";
}
?>