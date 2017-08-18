<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
else {
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "db.soic.indiana.edu";
$username = "i491u17_semoconn";
$password = "iu2017";
$dbname = "i491u17_semoconn";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	
}
}
}
?>


<html>
<head>

<title>Login</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>



<?php
if(isset($_POST['btn-signup']))
{
 
 
 
 $uname1 = mysqli_real_escape_string($conn, $_POST['uname']);
 $password = $_POST['pass'];
 $encPassword =password_hash($password,PASSWORD_DEFAULT);
 $uname = filter_var($uname1, FILTER_SANITIZE_STRING);

 $sql = "INSERT INTO admins(username,password) VALUES('$uname','$encPassword')";
	
	/*
	if (password_verify($pass,$encPassword)) 
	{    
	echo 'Password is valid!';} 
	else 
	{    echo 'Invalid password.';
    }
	*/
 if(mysqli_query($conn, $sql))
 {
  ?>
        <script>alert('You have successfully registered!');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('Sorry! We have encountered an error during the registration process!');</script>
        <?php
 }
}
?>
<center>

</center>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="45%" border="0">

<tr>
<td><input type="text" name="uname" placeholder="Username" pattern="([a-z0-9A-Z]){6,}" title="Must contain 6 or more characters (a-z,0-9)" required></td>
</tr>

<tr>
<td><input type="password" name="pass" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/></td>
<span class="tooltiptext"></td>
</tr>



</table>
<table align="center" width="30%">
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>

<tr>
<td align="center"><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>





</body>
</html>