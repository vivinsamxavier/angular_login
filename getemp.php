<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:*");

header("Access-Control-Allow-Headers:*");
include("conn2.php");
$sql="SELECT * FROM employees";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);
?>