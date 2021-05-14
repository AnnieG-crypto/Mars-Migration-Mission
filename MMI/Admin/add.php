<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$nick_name = mysqli_real_escape_string($mysqli, $_POST['nick_name']);
	@$country = mysqli_real_escape_string($mysqli, $_POST['country']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$number = mysqli_real_escape_string($mysqli, $_POST['number']);	
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	$fp = mysqli_real_escape_string($mysqli, $_POST['fp']);
		
		$result = @mysqli_query($mysqli, "INSERT INTO users(name, nick_name, country, age, gender, number, email, pass, fp) VALUES('$name','$nick_name', '$country','$age','$gender','$number','$email','$pass','$fp')");
		
		//display success message
		echo "<div style='margin-top: 150px; text-align: center;'>";
		echo "<b style='color: white;'>Data added successfully!</b>";
		echo "<br>";
		echo "<br/><a href='http://127.0.0.1/MMI/Admin.php' id='view'>View Result</a>";
		echo "</div>";
}
?>
<html>
	<head>
        <title>MMI | Add Data</title>
        <link rel="stylesheet" type="text/css" href="http://127.0.0.1/MMI/Styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="http://127.0.0.1/MMI/Favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1/MMI/Favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1/MMI/Favicons/favicon-16x16.png">
        <link rel="manifest" href="http://127.0.0.1/MMI/Favicons/site.webmanifest">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script defer scr="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
		<style>
			#view{
				font-size: 16px;
				font-weight: bold;
				background-image: url('http://127.0.0.1/MMI/Images/background.jpg');
				opacity: 0.7;
				border: none;
				max-width: 100px;
				padding: 20px 30px 10px 30px;
				border-radius: 10px;
				box-shadow: 3px 6px 10px rgba(255, 255, 255, 0.425);
				color: white;
			}
			#view:hover{
				opacity: 100%;
				text-decoration: none;
			}
		</style>
		<script>
        function openSlideMenu(){
            document.getElementById('menu').style.width = '200px';
            document.getElementById('content').style.marginLeft = '200px';
        }
        function closeSlideMenu(){
            document.getElementById('menu').style.width = '0';
            document.getElementById('content').style.marginLeft = '0';
        }
        </script>
    </head>

<body background= "http://127.0.0.1/MMI/Images/background.jpg">
	<header style="background-image: none; background-color: black;">
		<img class= "logo" src="http://127.0.0.1/MMI/Images/Logo.png">
		<nav>
			<input type="checkbox" id="check">
			<label for="check" class= "checkbtn">
				<i class="fa fa-bars"></i>
			</label>
			<input type="checkbox" id="check-2">
			<label for="check" class= "checkbtn-2">
				<i class="fa fa-times"></i>
			</label>
			<form action="POST">
			<ul>
				<div class="pages">
					<li id="pages"><a href="http://127.0.0.1/MMI/Admin.php" class="active"><i class="fa fa-tools"></i> Admin Panel</a></li>
					<li id="pages"><a href="http://127.0.0.1/MMI/Feedback.php"><i class="fa fa-user-lock"></i> Feedback</a></li>
				</div>
			</ul>
		</form>
		</nav>
	</header>
		<span class="move">
		  <a href="#" class= "open" onclick="openSlideMenu()">
			<i class="fas fa-bars"></i>
		  </a>
		</span>
	
		<div id="menu" class="nav-2">
		  <a href="#" class="close" onclick="closeSlideMenu()">
			<i class="fas fa-bars"></i>
		  </a>
		  <a href="http://127.0.0.1/MMI/Admin.php" style="background: -webkit-linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255), rgba(255, 255, 255),  rgb(0, 0, 0));
		  -webkit-background-clip: text;
		  -webkit-text-fill-color: transparent;"><i class="fa fa-tools"></i> Admin Panel</a>
		  <a href="http://127.0.0.1/MMI/Feedback.php"><i class="fa fa-user-lock"></i> Feedback</a>
		</div>
</div>
<br>
<br>
<br>
</body>
</html>