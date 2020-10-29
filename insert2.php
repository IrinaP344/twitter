<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
	$ins = "INSERT INTO followings(name, channel,img) VALUES ('".$_GET["name"]."', '".$_GET["channel"]."', '".$_GET["img"]."')";
	mysqli_query($connect, $ins);
	header('Location: http://17urok/index.php');
 ?>