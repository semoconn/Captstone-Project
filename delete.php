<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}
else{
if ($_SERVER["REQUEST_METHOD"] == "GET") {

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
<title>Welcome</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if(isset($_GET['btn-postdeal']))
{
 $id1 = mysqli_real_escape_string($conn,$_GET['id']);
 $id = filter_var($id1, FILTER_SANITIZE_STRING);

 $sql = "DELETE FROM News WHERE id = '$id'";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
 if(mysqli_query($conn, $sql))
 {
  ?>
        <script>alert('You Have Successfully Deleted a News Story!');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('Sorry! We have encountered an error! Sorry!');</script>
        <?php
 }
}

?>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a class="active" href="add.php">Add</a></li>
        <li><a href="edit.php">Edit</a></li>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="logout.php">Sign Out</a></li>
      </ul>
   
  <center>
    <div class="wtext"><h1 padding=20px >Delete News Story</h1></div>
    
  </center>
  
<center>

</center>
<center>
<div id="login-form">
<form method="get">
<table align="center" width="45%" border="0">

<tr>

<td><input type="text" name="id" placeholder="id" required />
</td>
</tr>
</table>
<table align="center" width="30%">
<tr>
<td><button type="submit" name="btn-postdeal">Post News</button></td>
</tr>
</table>
</form>
</div>
</center>
<?php
$sql = "SELECT * FROM News ORDER BY 'Date'";
$result = $conn->query($sql);

if ($result->num_rows >= 1) {
    echo "<table><tr><th>id</th><th>Headline</th><th>Content</th><th>Date</th></tr>";
	// output data of each row
	
    while ($row = $result->fetch_assoc()) {
		 echo "<tr><td>" . $row["id"]. "</td><td>". $row["Headline"]. "</td><td>" . $row["Content"]. " " . $row["Date"]. "</td></tr>";
}
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
