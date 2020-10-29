<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
	$ins = "INSERT INTO twits(author,post) VALUES ('".$_GET["1"]."', '".$_GET["2"]."')";
	mysqli_query($connect, $ins);
	header('Location: http://17urok/index.php');
 ?>