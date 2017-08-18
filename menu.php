<html >
<head>
<title>Menu</title>
<link href="css/main.css" rel='stylesheet'>
</head>

<body>

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

$sql = "SELECT Item, Price, Description FROM starters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Item"]. " ". $row["Price"]. "<br>". $row["Description"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

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

$sql = "SELECT Item, Price, Description FROM Drinks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Item"]. " ". $row["Price"]. "<br>". $row["Description"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

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

$sql = "SELECT Item, Price, Description FROM entrees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Item"]. " ". $row["Price"]. "<br>". $row["Description"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

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

$sql = "SELECT Item, Price, Description FROM sandwiches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Item"]. " ". $row["Price"]. "<br>". $row["Description"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

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

$sql = "SELECT Item, Price, Description FROM salads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Item"]. " ". $row["Price"]. "<br>". $row["Description"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

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

$sql = "SELECT Item, Price, Description FROM desserts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Item"]. " ". $row["Price"]. "<br>". $row["Description"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
		// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>