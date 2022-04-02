<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:*");
header("Access-Control-Allow-Headers:*");
include("conn2.php");
 


$data = file_get_contents("php://input");
$val = json_decode($data);
$Employee_id=$val->employee_id;
$First_Name=$val->first_name;
$Last_Name=$val->last_name;
$Email=$val->email;
$Phone_Number=$val->phone_number;
$hire_date=$val->hire_date;
$designation=$val->designation;
$salary=$val->salary;

$sql="UPDATE employees SET first_name='$First_Name',last_name='$Last_Name',email='$Email',phone_number='$Phone_Number',hire_date='$hire_date',designation='$designation',salary='$salary' WHERE employee_id=$Employee_id";

$result = mysqli_query($conn,$sql);
echo 1;


?>