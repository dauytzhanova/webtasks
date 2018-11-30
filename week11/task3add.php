<?php
 	$maker = $_POST["Maker"];
    $model = $_POST["Model"];
    $year = $_POST["Year"];
    $price = $_POST["Price"];
    $url = $_POST["Url"];
    
    $conn = mysqli_connect('localhost:3306', 'root', '','web');
	$sql = "INSERT INTO `task10first`( `maker`, `model`, `price`, `year`, `url`) VALUES ('$maker', '$model','$price','$year','$url')";
	mysqli_query($conn, $sql);
  	header("Location:task3.php");
 ?>