<?php
session_start();


	if(isset($_SESSION['user'])!="")
{
	header("Location:home.php");
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

	$loginuser = mysqli_real_escape_string($conn,$_POST['user1']);
	$loginpassword = mysqli_real_escape_string($conn,$_POST['pass']);
	$sql = "SELECT username, password FROM admins WHERE username = '$loginuser'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $count = mysqli_num_rows($res);

	$sanupass = password_hash(mysqli_real_escape_string($conn,$_POST['pass']), PASSWORD_DEFAULT);
 
    //if($row['username']== $loginuser && ($row['password']== $loginpassword)) {
       // Verify hashed password is correct
		//	if (password_verify($loignpassword,$row["userpass"])) {
		 if (password_verify($loginpassword,$row["password"])){
	
		$_SESSION['user'] = $loginuser;
		header("Location:home.php");
	}
	else
	{	
   //     <script>alert('wrong details')</script>  ; Fix this??
        echo "wrong Username/password ";     
	}
	
}
}
?>

<html>
<head>
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>



<center>
<div class="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="user1" placeholder="Your Username" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>

</body>
</html>