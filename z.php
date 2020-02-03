<?php 
$company="";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/ico/srit.ico">
<title>Company Wise</title>
<style>
table {

width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;


}
th {
	padding:15px;
background-color: orange;
color: white;
}
td{
	padding:15px;
	text-align:center;
}table,th,td{
	border:3px solid black;
border-collapse: collapse;}
	
tr:nth-child(even) {background-color: }
.btn{
	width:15%;
	height:10%;
	font_size:25px;
	padding:0px;
}img{
width:100%;}
</style>
</head>
<body>
<center>
<?php 
	$image_url1='http://www.webprosindia.com/sritstudent/collegeimages/title_head.jpg';
$image_url='http://www.webprosindia.com/sritstudent/collegeimages/body.jpg';
?>

<img src="<?php echo $image_url1;?>" width="500" height="150">
<img src="<?php echo $image_url;?>"width="500" height="180">
<br>
<br>
<form action="z.php" method="post">
           <div>
            
			<input type="text" name="company" placeholder="Enter Company" class="btn" value="<?php echo $company;?>"  ><br><br>
            
			
            
               
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search"  value="Search" >
				<br>
				<br>
            </div>
			
<table>

<tr>
<th>Sno</th>
<th>Roll No</th>
<th>Name</th>
<th>Branch</th>
<th>Company</th>
<th>Salary</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "database");
// Check connection

function getposts()
{
    $posts = array();
   
    $posts[0] = $_POST['company'];
   
    return $posts[0];
}
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$data[0]= getposts();
$sql = "SELECT sno,roll_no,name,branch,company,salary FROM roll_no_wise WHERE company='$data[0]'";
$result = $conn->query($sql);
if ($result->num_rows >=0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["roll_no"] . "</td><td>" . $row["name"] ."</td><td>" . $row["branch"] ."</td><td>" .$row["company"] ."</td><td>" . $row["salary"].  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?></center>
</table>
</body>
</html>