<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:*");
header("Access-Control-Allow-Headers:*");
include("conn2.php");

$data = file_get_contents("php://input");
$val = json_decode($data);
$First_Name=$val->First_Name;
$Last_Name=$val->Last_Name;
$Email=$val->Email;
$Phone_Number=$val->Phone_Number;
$hire_date=$val->hire_date;
$designation=$val->designation;
$salary=$val->salary;

$sql="INSERT INTO employees (first_name,last_name,email,phone_number,hire_date,designation,salary) VALUES ('$First_Name','$Last_Name','$Email','$Phone_Number','$hire_date','$designation','$salary')";
$result = mysqli_query($conn,$sql);
echo 1;
?>