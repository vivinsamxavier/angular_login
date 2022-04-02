<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:*");
header("Access-Control-Allow-Headers:*");
$conn = mysqli_connect('localhost','root','','db_abishek');

      if(!$conn){
	  echo 'connection error:'.mysqli_connect_error();
    }




    
?>