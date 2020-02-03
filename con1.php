<?php
$conn=mysql_connect("localhost","root","");

mysql_select_db("database");
if(!$conn)
	echo"error";

?>