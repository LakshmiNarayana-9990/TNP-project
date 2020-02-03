<?php

$conn = mysqli_connect("localhost", "root", "", "database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sno="";
function getPosts()
{
		$posts=array();
		$posts[0]=$_POST['sno'];
		return $posts;
}
if(isset($_POST['search']))
{
	$data=getPosts();
	$search_Query="SELECT * FROM roll_no_wise WHERE sno=$data[0]";
	$search_Result=mysqli_query($conn,$search_Query);
	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while($row=mysqli_fetch_array($search_Result))
			{
				$sno=$row['sno'];
				$roll_no=$row['roll_no'];
				$name=$row['name'];
				$branch=$row['branch'];
				$company=$row['company'];
				$salary=$row['salary'];
			}
		
		}else{
			echo"no data found for this roll no";
			
		}
	}else{
		echo"result error";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>

<body>
<form action="s1.php" method="post">
	<input type="number" name="sno" placeholder="sno" value="<?php echo $sno;?>"><br><br>
	<div><input type="submit" name="search" value="search">
	</div>
	
</form>

</body>
</html>