<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sign Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$db="umishah";
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$num_tel=$_POST["num_tel"];
$address=$_POST["address"];
$city=$_POST["city"];
$poscode=$_POST["poscode"];
	
	$DB_HOST = "localhost"; 
    $DB_DBNAME = "umishah"; 
    $DB_USER = "root"; 
    $DB_PWD = ""; 
	
	// 1. Create a database connection
$connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PWD,$DB_DBNAME);
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection,$DB_DBNAME);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
	
$sql = "INSERT INTO user_registration (name,username,password,email,num_tel,address,city,poscode) VALUES ('$name','$username','$password','$email','$num_tel','$address','$city','$poscode')";

mysqli_query($connection, $sql);


mysqli_close($connection);


?>
	
	<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>		
		
		
</head>
<body>
 		<script>
		alert("You have successfully created an account. Please log in to place an order");
		 window.location.href = "index.html";
		</script>
</div>
</body>
</html>
