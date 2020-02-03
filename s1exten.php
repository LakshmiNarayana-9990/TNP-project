<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>

$sql = "SELECT sno, roll_no,name FROM roll_no_wise";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["roll_no"] . "</td><td>"
. $row["name"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }