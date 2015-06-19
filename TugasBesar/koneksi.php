<?php
$servername="localhost";
$username="root";
$password="";
$databasename="tugasbesar";

$koneksi = mysqli_connect($servername, $username, $password, $databasename);

/*check connection*/
if(mysqli_connect_errno()){
	printf("Connect failed:%s\n", mysqli_connect_error());
	exit();
	
}


?>