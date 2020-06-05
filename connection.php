<?php 

define('HOST', 'localhost');
define('USER','root');
define('PASSWORD','');
define('DB', 'abc');

$con=mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
if($con)
{
	echo"Connection is ok";
}
else
{
	die("Connection failed".mysqli_connect_error());
}

 ?>