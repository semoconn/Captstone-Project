<?php
session_start();


if(!isset($_SESSION['user']))
{
	header("Location: home.php");
}
else {
	
$servername = "db.soic.indiana.edu";
$username = "i491u17_semoconn";
$password = "iu2017";
$dbname = "i491u17_semoconn";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
<ul>
        <li><a href="add.php">Add</a></li>
        <li><a href="edit.php">Edit</a></li>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="logout.php?logout">Sign Out</a></li>
      </ul>
    
    


<center>

  <?php 

$sql = "SELECT * FROM News ORDER BY Date";
$result = $conn->query($sql);

if ($result->num_rows >= 1) {
    echo "<table><tr><th>ID</th><th>Headline</th><th>Content</th><th>Date</th></tr>";
	// output data of each row
	
    while ($row = $result->fetch_assoc()) {
		 echo "<tr><td>" . $row["id"]. "</td><td>". $row["Headline"]. "</td><td>" . $row["Content"]. " " . $row["Date"]. "</td></tr>";
	
	//$result->fetch_assoc()) {
        /*
		echo "<tr><td>"; 
		echo $row['Headline'];
		echo "</td><td>";   
		echo $row['Content'];
		echo "</td><td>";    
		echo $row['Date'];
		echo "</TD></tr>";  
		echo "</table>";    
		;;
		
		//echo $row["Headline"]. " ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
		*/
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

   ?>

</center>



</body>
</html>