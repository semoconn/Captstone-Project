<html>
<head>

<title>News</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body bgcolor="#09F00E">
<h1 style="text-align:center"> News </h1>

<?php
$servername = "db.soic.indiana.edu";
$username = "i491u17_semoconn";
$password = "iu2017";
$dbname = "i491u17_semoconn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Headline, Date, Content FROM News ORDER BY 'Date'";
$result = $conn->query($sql);

if ($result->num_rows >= 1) {
    echo "<table><tr><th>Headline</th><th>Content</th><th>Date</th></tr>";
	// output data of each row
	
    while ($row = $result->fetch_assoc()) {
		 echo "<tr><td>" . $row["Headline"]. "</td><td>" . $row["Content"]. " " . $row["Date"]. "</td></tr>";
	
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
</body>
</html>
