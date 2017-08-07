<html>
<head>
<?php
error_reporting(0);
include 'login.html';
$item = $_POST['dish'];
$description = $_POST['details'];
$price = $_POST['price'];
$sql = "INSERT into starters (Item, Description, Price) values ('$item','$description', '$price')";

 if ($_POST)['submit']){
	 if(mysqli_query($conn, $sql))  {
		 echo "Data added successfully";
	 }
	 else {
		 echo "Something went wrong";
	 }
 }
 
 ?>
</head>

<body>
<form action="add.php" method="POST">
  Item: <input type="text" name="dish">
  Description <input type="text" name="details">
  Price <input type="number" step="0.01" name="price">
  <input type="submit" name="submit" value="Send Info">

</form>
</body>

</html>