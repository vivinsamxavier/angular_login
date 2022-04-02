<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:*");
header("Access-Control-Allow-Headers:*");
include("conn2.php");

$data = file_get_contents("php://input");
$val = json_decode($data);

$id =$val->id;

$sql="DELETE FROM employees WHERE employee_id = $id";
$result = mysqli_query($conn,$sql);
echo 1;
?>