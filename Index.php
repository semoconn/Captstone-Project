<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sean's Restaurant</title>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel='stylesheet'>
<link rel="stylesheet" href="css/icomoon.css">
<link href="css/animate-custom.css" rel="stylesheet">
<?php 
echo '<link rel="stylesheet" type="text/css" href="main.css">'; 
    ?>
<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    

<!-- Jquery -->    
<script src="js/jquery.min.js"></script>



</head>
    

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">

  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll"> Home</a></li>
			<li> <a href="#about" class="smoothScroll">About Us</a></li>
			<li> <a href="#menu" class="smoothScroll">Menu</a></li>
			<li> <a href="#news" class="smoothScroll">News</a></li>
            <li> <a href="#events" class="smoothScroll">Events</a></li>
			<li> <a href="#contact" class="smoothScroll">Contact</a></li>
            <li><a href="login.php">Log in</a></li>
              
        </div><!-- nav-collapse -->
      </div>
    </div>
    </div>
    
    <!-- Home -->
    <div id="home" name="home">
        <header class="clearfix">
            <h2> Welcome To Sean's Irish Pub</h2>
            <p> Here at Sean's Restaurant we serve traditional Irish food that will make you feel like you are in the greener pastures of Ireland.</p>
                <div class="row">
                    <!-- Column holding twitter feed -->
                    <div class="col-md-6"> 
                        <a class="twitter-timeline" href="https://twitter.com/SeansIrishPub1" data-tweet-limit="4">Tweets by SeansIrishPub1</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    
                    <!-- Column holding news stories -->
                    <div class="col-md-6">
                        <div class="box-item">
                            <h1 class="post-title">                        
                            
                            </h1>
                            <div class="box-post">
                                <p><?php 
									
								
										include 'news.php'; 
										
										?>
										
										
										
									
									</p>
                                    <span class="meta">
                                        <span class="icon icon-clock">date</span>
                                    </span>
                            </div>   
                        </div>

                    
                    </div> <!-- End news column -->                    
                </div>
        </header>	    
    </div>
        
    <!-- About Us -->
    <div class="container" id="about" name="about">
        <div class="row white">
            <br>
                <h1 class="centered">Seans Irish Pub</h1>
				<hr>				
				<div class="col-lg-6">
					<p>Sean's Irish Pub began out of a passion for one man's Irish heritage.  Sean O'connor is one of a long line of Irish descendants, and nothing resonates more with the culture than
                        some down home Irish food.  It's our goal here at the pub to bring you the finest Irish food, in the atomosphere it was designed to be enjoyed at, the pub.  We hope you can come by and
                        enjoy all of the comforts of the Old Country here at your local pub.
                    </p>
				</div><!-- col-lg-6 -->
            
                <div class="col-lg-6">
                    <p>Place holder for image from DB</p>
                </div><!-- col-lg-6 -->
			</div><!-- row -->
    </div><!-- container -->
	
	
	<!-- Menu -->
	<div class="container" id="menu" name="menu">
		<div class="row white">
			<br>
				<h1 class="centered">Menu</h1>
				<hr>
				<div class="centered">
					<p> <?php
							
								include 'menu.php';
								
						?>
						
					</p>
				</div><!--centered-->
			</div>
	</div>
								
		
        
    <!-- News -->
    <div class="container" id="news" name="news">
        <div class="row white">
            <br>
                <h1 class="centered">News</h1>
				<hr>

<div class="container">
    <div class="row">
        <div class="col-md-6 jasgrid">
            <div class="box-item">
                    <h1 class="post-title">                        
                       <?php
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
					   $sql = "SELECT Headline FROM News WHERE id='1'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Headline"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

					   
                    </h1>
                <div class="box-post">
                    <p><?php
					
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
					
					$sql = "SELECT Content FROM News WHERE id='1'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Content"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?></p>
                    <span class="meta">
                        <span class="icon icon-clock"><?php
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
				$sql = "SELECT Date FROM News WHERE id='1'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Date"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?></span>
                    </span>
                </div>   
            </div>

            <div class="box-item">
                    <h1 class="post-title">
<?php					

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
                          $sql = "SELECT Headline FROM News WHERE id='2'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Headline"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                    </h1>
                <div class="box-post">
                    <?php
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
				$sql = "SELECT Content FROM News WHERE id='2'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Content"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                    <span class="meta">
                        <span class="icon icon-clock"><?php
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
				$sql = "SELECT Date FROM News WHERE id='2'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Date"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?></span>
                    </span>
                </div>   
            </div>
        </div>
        
        <div class="col-md-6 jasgrid">
            <div class="box-item">
                    <h1 class="post-title">
<?php
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
                        $sql = "SELECT Headline FROM News WHERE id='3'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Headline"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
$conn->close();
                    </h1>
                <div class="box-post">
                    <?php
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
				$sql = "SELECT Content FROM News WHERE id='3'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Content"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
                    <span class="meta">
                        <span class="icon icon-clock"><?php
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
				$sql = "SELECT Date FROM News WHERE id='3'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Date"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?></span>
                    </span>
                </div>   
            </div>

            <div class="box-item">
                    <h1 class="post-title">                        
                          <?php
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
                        $sql = "SELECT Headline FROM News WHERE id='4'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Headline"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
                    </h1>
                <div class="box-post">
                   <?php
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
				$sql = "SELECT Content FROM News WHERE id='4'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Content"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                    <span class="meta">
                        <span class="icon icon-clock"><?php
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
				$sql = "SELECT Date FROM News WHERE id='4'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Date"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?></span>
                    </span>
                </div>   
            </div>
			 <div class="col-md-6 jasgrid">
            <div class="box-item">
                    <h1 class="post-title">
<?php
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
                        $sql = "SELECT Headline FROM News WHERE id='5'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Headline"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

                    </h1>
                <div class="box-post">
                    <?php
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
				$sql = "SELECT Content FROM News WHERE id='5'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Content"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
                    <span class="meta">
                        <span class="icon icon-clock"><?php
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
				$sql = "SELECT Date FROM News WHERE id='5'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Date"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?></span>
                    </span>
                </div>   
            
			</div>
        <div class="box-item">
                    <h1 class="post-title">                        
                          <?php
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
                        $sql = "SELECT Headline FROM News WHERE id='6'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Headline"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
                    </h1>
                <div class="box-post">
                   <?php
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
				$sql = "SELECT Content FROM News WHERE id='6'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Content"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                    <span class="meta">
                        <span class="icon icon-clock"><?php
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
				$sql = "SELECT Date FROM News WHERE id='6'";
					   $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							echo $row["Date"];//" ". $row["Date"]. "<br>". $row["Content"]. "<br>"; // " ". $row["Description:"]. " ".  $row["Price"]. "<br>";
							// " " . $row["Picture"]. "<br>";
    }
} else {
    echo "0 results";
}
?></span>
                    </span>
                </div>   
            </div>
		</div>
    </div> <!-- row -->
  </div><!-- container -->
 </div> <!--row -->
</div><!-- container -->

<!-- Contact section -->
<div class="container" id="contact">
    <div class="row white">
        <br>
            <h1 class="centered">Contact Us</h1>
				<hr> <br>	
        <div class="row">
            <div class="col-md-6">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.221182990803!2d-86.53614028423556!3d39.169692179529584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886c66dc13a4f115%3A0xd92133f182a5bb22!2s403+N+Walnut+St%2C+Bloomington%2C+IN+47404!5e0!3m2!1sen!2sus!4v1501445279934" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            
            </div>
            <div class="col-md-6">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>


<!-- Scripts section -->

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact_me.js"></script>

</body>
</html>
