<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}
else{
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
//$sql = "INSERT INTO News(Headline,Date,Content) VALUES('$Headline','$Date','$Content')";
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
if(isset($_POST['btn-postdeal']))
{
 $Headline1 = mysqli_real_escape_string($conn,$_POST['Headline']);
 $Date1 = mysqli_real_escape_string($conn,$_POST['Date']);
 $Content1 = mysqli_real_escape_string($conn,$_POST['Content']);
 $id1 = mysqli_real_escape_string($conn,$_POST['id']);
 
 
 $Headline = filter_var($Headline1, FILTER_SANITIZE_STRING);
 $Date = filter_var($Date1, FILTER_SANITIZE_STRING);
 $Content = filter_var($Content1, FILTER_SANITIZE_STRING);
 $id = filter_var($id1, FILTER_SANITIZE_STRING);
 $sql = "UPDATE News SET Headline = '$Headline', Content = '$Content', Date = '$Date'
WHERE id= '$id'";
 //$conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
 if(mysqli_query($conn, $sql))
 {
  ?>
        <script>alert('You Have Successfully Posted a News Story!');</script>
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
    <div class="wtext"><h1 padding=20px >Edit News Story</h1></div>
    
  </center>
  
<center>

</center>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="45%" border="0">

<tr>
<td><input type="text" name="id" placeholder="ID"</td>
<td><input type="text" name="Headline" placeholder="Headline" pattern="([a-z0-9A-Z ]){3,}" title="Must contain 3 or more characters (a-z,0-9)" required>
</td>
<td><input type="text" name="Content" placeholder="Content" height="40" width="30" required />
</td>
<td><input type="date" name="Date" placeholder="Date" pattern="\d{4}-\d{2}-\d{2}" title="Example: YYYY-MM-DD" required /></td>
</td>
</tr>
</table>
<table align="center" width="30%">
<tr>
<td><button type="submit" name="btn-postdeal">Edit News</button></td>
</tr>
</table>
</form>
</div>
</center>

<?php
$sql1 = "SELECT * FROM News ORDER BY 'Date'";
$result = $conn->query($sql1);

if ($result->num_rows >= 1) {
    echo "<table><tr><th>Headline</th><th>Content</th><th>Date</th></tr>";
	// output data of each row
	
    while ($row = $result->fetch_assoc()) {
		 echo "<tr><td>" . $row["id"]. "</td><td>". $row["Headline"]. "</td><td>" . $row["Content"]. " " . $row["Date"]. "</td></tr>";
	
	
    }
	echo "</table>";
} else {
    echo "0 results";
}
?>


</body>
</html>