<?php
$servername="localhost";
$username = "root";
$password = "passw0rd.";
$dbname = "maincore";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (mysqli_connect_errno())
{
	echo "Database Connect Failed : " . mysqli_connect_error();
}
else
{
	echo "Database Connected.";
}
//select username from tb_user where userid = '1'
$sql = <<<SQL
select username 
from tb_user
where userid = 1
SQL;

if (!$result = $conn->query($sql)){
	die('There is error ['.$conn->error.']');
}

while($row = $result->fetch_assoc()) {
	echo $row['username'].'<br/>';
}
$conn->close();
?>