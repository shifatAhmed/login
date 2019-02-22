
<?php
     include 'connection.php';
    $query="INSERT INTO user (username,password) VALUES('$username','$password')";
	$result=mysqli_query($connection,$query);

	if (!$result) {
		die('query failled');
	}

?>