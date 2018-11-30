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
		.oneline{
			display: flex;
			padding-right: 10px;

		}
		input{
			margin-left: 10px;
			border-radius: 5px;
		}
	</style>
  </head>
  <body>
  	<form action="task3add.php" method="post">
  	<div class="oneline">
  		Maker
  		<input type="text" name="Maker" style="width: 20%">
    </div>
  	<div class="oneline">    
    	Model    
  		<input type="text" name="Model" style="width: 20%">
  	</div>
  	<div class="oneline">    
    	Year   
  		<input type="text" name="Year" style="width: 20%">
  	</div>
  	<div class="oneline">    
  		Price    
    	<input type="text" name="Price" style="width: 20%">
  	</div>
  	<div class="oneline">    
    	Url    
    	<input type="text" name="Url" style="width: 20%">
  	</div>
	<input type="submit"/>
	</form>
	<?php
	$conn = mysqli_connect('localhost:3306', 'root', '','web');
	$sql = "SELECT * FROM `task10first` WHERE 1";
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
		echo "<div class='row'><div class='name'>Year:</div><div>".$row["year"]."</div></div>";
		echo "<div class='row'><div class='name'>Price:</div><div>".$row["price"]."</div></div>";
		echo "<div class='row'><div class='name'></div><a href=taskdel.php?id=".$row["id"].">Delete</a></div></div>";
		echo "</div></div></div>";
		
	}


	?>
  </body>

</html>