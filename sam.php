<html>
<style>
	body{
		background-color: orange;
		}
		table,th,td{
			border: 3px solid black;
			width:1100px;
			}
			.btn{
				width:10%;
				height:5%;
				font-size:24px;
				padding:0px;
				}
	</style>
<body>
<center>
<div class="container">
	<form action="" method="POST">
		<input type="text" name="roll_no" placeholder="Enter RollNO"/>
		<input type="submit" name="search" value="SEARCH BY ROLL_NO"/>
	</form>
	
	<table>
		<tr>
			<th>S.No</th>
			<th>Roll No</th>
			<th>Name</th>
			<th>Branch</th>
			<th>Company</th>
			<th>Package</th>
		</tr>
		<br>
	</table>
	<?php
			$connection=mysqli_connect("localhost","root","");
			$db=mysqli_select_db($connection,'database');
			
			if(isset($_POST['search']))
			{
				$sno=$_POST['sno'];
				$query="SELECT * FROM 'tnp' WHERE sno=1 ";
				$query_run=mysqli_query($connection,$query);
				while($row=mysqli_fetch_array($query_run))
				{
					
					<tr>
						<td>  echo #row['sno'];  </td>
						<td>  echo #row['roll_no']; </td>
						<td>  echo #row['name']; </td>
						<td>  echo #row['branch']; </td>
						<td>  echo #row['company']; </td>
						<td>  echo #row['package'];  </td>
					</tr>
					?>
				}
			}
		
			
			
			
		</table>
		</div>
		</center>
		</body>
		</html>