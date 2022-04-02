<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:*");

header("Access-Control-Allow-Headers:*");
include("conn.php");
$sql="SELECT * FROM book_view";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);
?>