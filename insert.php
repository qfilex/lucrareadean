<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','root');
	define('DB','lucrarean');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$lname = $_POST['lastname'];
	$fname = $_POST['firstname'];
	
	$sql = "insert into clienti (f_name, l_name) values ('$fname','$lname')";
	
	if(mysqli_query($con, $sql)){
		echo "<div class=\"alert alert-success\" role=\"alerts\">succes</div>";
	}
?>