<?php
include"con1.php";
$roll=$_POST['roll_no'];

$disp=mysql_query("select sno,roll_no,name,branch,company,salary from roll_no_wise where roll='$roll'");
while($result=mysql_fetch_array($disp,MYSQL_ASSOC))
{
	echo"<br/> id=",$result['sno'];
	echo"<br/> roll_no=",$result['roll_no'];
	echo"<br/> name=",$result['name'];
	echo"<br/> branch=",$result['branch'];
	echo"<br/> company=",$result['company'];
	echo"<br/> salary=",$result['salary'];
	
}
?>