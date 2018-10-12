<?php
require_once 'includes/connection.php';
require_once 'includes/dumper.php';
$sql 			= "SELECT * FROM users;";
$result 		= mysqli_query($conn, $sql);
$resultCheck 	= mysqli_num_rows($result);

if($resultCheck > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo $row['user_uid'] . '<br/>';
	}
}

echo '<br/> Working with Php_MySql';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Database Connection</title>
</head>
<body>

</body>
</html>
