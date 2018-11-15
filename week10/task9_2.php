<html>
<head>
<style>
select{
  width:100%;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  border: 1px solid black;
  padding:5px;
  padding-right: 50px;
}
</style>
</head>
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];

echo "<table style='border-collapse: collapse;'>";
echo "<tr>";
echo "<td>Maker:  </td>";
echo "<td><select name='makers'>";
echo "<option>".$makers[0]."</option>";
echo "<option>".$makers[1]."</option>";
echo "<option>".$makers[2]."</option>";
echo "</select></td></tr>";

echo "<tr>";
echo "<td>Year:  </td>";
echo "<td><select name='year'>";
for ($i=2018; $i>=1990; $i--) { 
  echo "<option>".$i."</option>";
}
echo "</select></td></tr>";

echo "<tr>";
echo "<td>Model:  </td>";
echo "<td name='model'>Corolla</td></tr>";

echo "<tr>";
echo "<td>Engine:  </td>";
echo "<td><input type='radio' name='eng0'>".$engine[0];
echo "<input type='radio'name='eng1'>".$engine[1];
echo "<input type='radio' name='eng2'>".$engine[2];
echo "</td></tr>";


echo "<tr>";
echo "<td>Price:  </td>";
echo "<td>300000</td></tr>";

echo "<tr>";
echo "<td>Additional:  </td>";  
echo "<td><input type='checkbox' name='tax'>tax played<br>";
echo "<input type='checkbox' name='tech'>technical check passed<br>";
echo "<input type='checkbox' name='inv'>does not require investment<br>";
echo "</td></tr>";
echo "</table>";

$item = filter_input(INPUT_POST, "makers");
$year = filter_input(INPUT_POST, "year");
$model = filter_input(INPUT_POST, "model");
$engine = filter_input(INPUT_POST, "engine");
$price = filter_input(INPUT_POST, "price");
$tax = yes;
$tech_check = "no";
$inv = "no";




?>
<form action="task9_2_submit.php">

  <label>You added a new item: </label>
    <span><?php echo $item ;?></span><br>
  
    <label>produced in </label>
    <span><?php echo $year; "with" $engine?></span><br>
  
   <label>Tax payed: </label>
    <span><?php echo $tax;?></span><br>
   <label>Technical check passed: </label>
    <span><?php echo $tech_check;?></span><br>
     <label>Does not require invest. </label>
    <span><?php echo $inv;?></span><br>
     <span><?php echo $price;?></span><br>
  
  
  


    <input type="submit"/>
</form>