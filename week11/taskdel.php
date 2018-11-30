<?php
	$id=$_REQUEST["id"];
    $conn = mysqli_connect('localhost:3306', 'root', '','web');
	$sql = "DELETE FROM `task10first` WHERE id='$id'";
	mysqli_query($conn, $sql);
  	
 	header("Location:task3.php");
 ?>