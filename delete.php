<html>
<head>
<?php
error_reporting(0);
include 'login.html';
$item = $_POST['dish'];

$sql = "DELETE from starters where id = $item";

 if ($_POST)['submit']){
	 if(mysqli_query($conn, $sql))  {
		 echo "Data deleted successfully";
	 }
	 else {
		 echo "Something went wrong";
	 }
 }
 
 ?>
</head>

<body>
<form action="add.php" method="POST">
<h4> Give id to delete the dish</h4>  
  ID: <input type="text" name="dish">
  
  <input type="submit" name="submit" value="Send Info">

</form>
</body>

</html>