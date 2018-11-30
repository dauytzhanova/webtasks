<!DOCTYPE html>
<html>

  <head>
	<style>
	/* Styles go here */
		.cars{
			display: inline-flex;
			padding-left: 10px;
		}
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
  </head>
  <body>
  	<div class="menu">
		|<a href="task2.php?maker=Toyota">Toyota</a>|<a href="task2.php?maker=BMW">BMW</a>
	</div>
	<?php
	$maker = $_REQUEST["maker"];
	if($maker=="Toyota" ){
		$conn = mysqli_connect('localhost:3306', 'root', '','web');
		$sql = "SELECT * FROM `task10first` WHERE maker='Toyota'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		
		for ($i=0;$i<$num;$i++){
			$row = mysqli_fetch_assoc($result);
			
			echo "<div class='cars'>";
			echo "<div class='car'>";
			echo "<img width='100' height='60' src=".$row["url"]."/>";
			echo "<div class='right'>";
			echo "<div class='title'>".$row["maker"]." ".$row["model"]."</div>";
			echo "<div class='attributes'>";
			echo "<div class='row'><div class='name'>Year:</div><div>".$row["price"]."</div></div>";
			echo "<div class='row'><div class='name'>Price:</div><div>".$row["price"]."</div></div>";
			echo "</div></div></div>";
			
		}
	}
	else{
		$conn = mysqli_connect('localhost:3306', 'root', '','web');
		$sql = "SELECT * FROM `task10first` WHERE maker='BMW'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		
		for ($i=0;$i<$num;$i++){
			$row = mysqli_fetch_assoc($result);
			echo "<div class='cars'>";
			echo "<div class='car'>";
			echo "<img width='100' height='60' src=".$row["url"]."/>";
			echo "<div class='right'>";
			echo "<div class='title'>".$row["maker"]." ".$row["model"]."</div>";
			echo "<div class='attributes'>";
			echo "<div class='row'><div class='name'>Year:</div><div>".$row["price"]."</div></div>";
			echo "<div class='row'><div class='name'>Price:</div><div>".$row["price"]."</div></div>";
			echo "</div></div></div>";
			
		
		}
	}
	?>
  </body>

</html>