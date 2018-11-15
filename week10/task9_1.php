<?php
$usernames = ["billgates","johndoe","stevejobs"];

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");
$confirm_password=filter_input(INPUT_POST,"confirm_password");

if (empty($username)) {
	echo '<div class="error">Username should not be empty</div>';	
}
if (empty($password) && empty($confirm_password)) {
	echo '<div class="error">Password and Confirm password shoud not be empty</div>';	
}
if ($confirm_password!=$password) {
		echo '<div class="error">Password and Confirm password does not equal to each other</div>';		
}


?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
</style></head>
<body>
<form action="task9_1.php" method="post">
	<div style="display: inline-block;">
		<label style="margin-right: 70px;">Username</label>
		<input value="<?echo $username;?>" type="text" name="username">
		</div>
	<div>
		<label style="margin-right: 73px;">Password</label>
		<input value="<?echo $password;?>" type="text" name="password">
	</div>
	<div>
		<label style="margin-right: 16px;">Confirm Password</label>
		<input value="<?echo $confirm_password;?>" type="text" name="confirm_password">
	</div>	

<input type="submit"/>
</form>
</body>
</html>
