<?php
if(isset($_GET['billing_details.php'])){

$host = "database-3.cyvk3sdc68be.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$dbname = "Sdb";

$connection=mysqli_connect($host, $username, $password, $dbname);
$query="SELECT * FROM placing_order";
$r=mysqli_query($connection,$query);
$resultset=array();  //Associative Array
echo "<div id='table'><center><table border=1>
<tr>
<th>Column Headings</th>
<tr>
</tr></center>";    
while($row=mysqli_fetch_assoc($r))
{
    echo "<tr>";
    echo "<td>" . $row['team'] . "</td>";
    echo "<td>" . $row['p'] . "</td>";
    ...
    echo "</tr>";
}
echo "</table><br>";
mysqli_close($con); //Make sure to close out the database connection
}
?>