<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$nick_name = mysqli_real_escape_string($mysqli, $_POST['nick_name']);
	$country = mysqli_real_escape_string($mysqli, $_POST['country']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$number = mysqli_real_escape_string($mysqli, $_POST['number']);	
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	$fp = mysqli_real_escape_string($mysqli, $_POST['fp']);
	$approval = mysqli_real_escape_string($mysqli, $_POST['approval']);
	
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',nick_name='$nick_name',country='$country', age='$age',gender='$gender',number='$number', email='$email',pass='$pass',fp='$fp', approval='$approval' WHERE id=$id",);
		
		//redirectig to the display page. In our case, it is Admin.php
		header("Location: http://127.0.0.1/MMI/Admin.php");
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$nick_name = $res['nick_name'];
	$country = $res['country'];
	$age = $res['age'];
	$gender = $res['gender'];
	$number = $res['number'];
	$email = $res['email'];
	$pass = $res['pass'];
	$fp = $res['fp'];
	$approval = $res['approval'];
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
			#addd{
				font-size: 16px;
				font-weight: bold;
				background-image: url('http://127.0.0.1/MMI/Images/background.jpg');
				opacity: 0.7;
				border: none;
				max-width: 100px;
				padding: 10px 20px 30px 20px;
				border-radius: 10px;
				box-shadow: 3px 6px 10px rgba(255, 255, 255, 0.425);
				color: white;
				float: center;
				margin-left: 100px;
			}
			#addd:hover{
				opacity: 100%;
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
	<br/><br/>
	<div class= "sign-form" style="height: 600px;">
	<form name="form1" method="post" action="edit.php">
          <div class= "form-header">
            <h2>Edit</h2>
            <p>Edit User Details</p>
          </div>
		<table border="0">
			<tr>
			<div class= "form-group">
				<label>Name</label>
				<input class= "form-control" type="name" name="name" value="<?php echo $name;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Nick Name</label>
				<input class= "form-control" type="username" name="nick_name" value="<?php echo $nick_name;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Country</label>
				
					<select class= "form-control" name="nick_name" value="<?php echo $nick_name;?>" required>
						<option disabled= " ">Select your Country</option>
						<option>Afghanistan</option>
						<option>Albania</option>
						<option>Algeria</option>
						<option>Andorra</option>
						<option>Angola</option>
						<option>Antigua and Barbuda</option>
						<option>Argentina</option>
						<option>Armenia</option>
						<option>Australia</option>
						<option>Austria</option>
						<option>Azerbaijan</option>
						<option>Bahamas</option>
						<option>Bahrain</option>
						<option>Bangladesh</option>
						<option>Barbados</option>
						<option>Belarus</option>
						<option>Belgium</option>
						<option>Belize</option>
						<option>Benin</option>
						<option>Bhutan</option>
						<option>Bolivia</option>
						<option>Bosnia and Herzegovina</option>
						<option>Botswana</option>
						<option>Brazil</option>
						<option>Brunei</option>
						<option>Bulgaria</option>
						<option>Burkina Faso</option>
						<option>Burundi</option>
						<option>C??te d'Ivoire</option>
						<option>Cabo Verde</option>
						<option>Cambodia</option>
						<option>Cameroon</option>
						<option>Canada</option>
						<option>Central African Republic</option>
						<option>Chad</option>
						<option>Chile</option>
						<option>China</option>
						<option>Colombia</option>
						<option>Comoros</option>
						<option>Congo (Congo-Brazzaville)</option>
						<option>Costa Rica</option>
						<option>Croatia</option>
						<option>Cuba</option>
						<option>Cyprus</option>
						<option>Czechia (Czech Republic)</option>
						<option>Democratic Republic of the Congo</option>
						<option>Denmark</option>
						<option>Djibouti</option>
						<option>Dominica</option>
						<option>Dominican Republic</option>
						<option>Ecuador</option>
						<option>Egypt</option>
						<option>El Salvador</option>
						<option>Equatorial Guinea</option>
						<option>Eritrea</option>
						<option>Estonia</option>
						<option>Eswatini (fmr. "Swaziland")</option>
						<option>Ethiopia</option>
						<option>Fiji</option>
						<option>Finland</option>
						<option>France</option>
						<option>Gabon</option>
						<option>Gambia</option>
						<option>Georgia</option>
						<option>Germany</option>
						<option>Ghana</option>
						<option>Greece</option>
						<option>Grenada</option>
						<option>Guatemala</option>
						<option>Guinea</option>
						<option>Guinea-Bissau</option>
						<option>Guyana</option>
						<option>Haiti</option>
						<option>Holy See</option>
						<option>Honduras</option>
						<option>Hungary</option>
						<option>Iceland</option>
						<option>India</option>
						<option>Indonesia</option>
						<option>Iran</option>
						<option>Iraq</option>
						<option>Ireland</option>
						<option>Israel</option>
						<option>Italy</option>
						<option>Jamaica</option>
						<option>Japan</option>
						<option>Jordan</option>
						<option>Kazakhstan</option>
						<option>Kenya</option>
						<option>Kiribati</option>
						<option>Kuwait</option>
						<option>Kyrgyzstan</option>
						<option>Laos</option>
						<option>Latvia</option>
						<option>Lebanon</option>
						<option>Lesotho</option>
						<option>Liberia</option>
						<option>Libya</option>
						<option>Liechtenstein</option>
						<option>Lithuania</option>
						<option>Luxembourg</option>
						<option>Madagascar</option>
						<option>Malawi</option>
						<option>Malaysia</option>
						<option>Maldives</option>
						<option>Mali</option>
						<option>Malta</option>
						<option>Marshall Islands</option>
						<option>Mauritania</option>
						<option>Mauritius</option>
						<option>Mexico</option>
						<option>Micronesia</option>
						<option>Moldova</option>
						<option>Monaco</option>
						<option>Mongolia</option>
						<option>Montenegro</option>
						<option>Morocco</option>
						<option>Mozambique</option>
						<option>Myanmar (formerly Burma)</option>
						<option>Namibia</option>
						<option>Nauru</option>
						<option>Nepal</option>
						<option>Netherlands</option>
						<option>New Zealand</option>
						<option>Nicaragua</option>
						<option>Niger</option>
						<option>Nigeria</option>
						<option>North Korea</option>
						<option>North Macedonia</option>
						<option>Norway</option>
						<option>Oman</option>
						<option>Pakistan</option>
						<option>Palau</option>
						<option>Palestine State</option>
						<option>Panama</option>
						<option>Papua New Guinea</option>
						<option>Paraguay</option>
						<option>Peru</option>
						<option>Philippines</option>
						<option>Poland</option>
						<option>Portugal</option>
						<option>Qatar</option>
						<option>Romania</option>
						<option>Russia</option>
						<option>Rwanda</option>
						<option>Saint Kitts and Nevis</option>
						<option>Saint Lucia</option>
						<option>Saint Vincent and the Grenadines</option>
						<option>Samoa</option>
						<option>San Marino</option>
						<option>Sao Tome and Principe</option>
						<option>Saudi Arabia</option>
						<option>Senegal</option>
						<option>Serbia</option>
						<option>Seychelles</option>
						<option>Sierra Leone</option>
						<option>Singapore</option>
						<option>Slovakia</option>
						<option>Slovenia</option>
						<option>Solomon Islands</option>
						<option>Somalia</option>
						<option>South Africa</option>
						<option>South Korea</option>
						<option>South Sudan</option>
						<option>Spain</option>
						<option>Sri Lanka</option>
						<option>Sudan</option>
						<option>Suriname</option>
						<option>Sweden</option>
						<option>Switzerland</option>
						<option>Syria</option>
						<option>Tajikistan</option>
						<option>Tanzania</option>
						<option>Thailand</option>
						<option>Timor-Leste</option>
						<option>Togo</option>
						<option>Tonga</option>
						<option>Trinidad and Tobago</option>
						<option>Tunisia</option>
						<option>Turkey</option>
						<option>Turkmenistan</option>
						<option>Tuvalu</option>
						<option>Uganda</option>
						<option>Ukraine</option>
						<option>United Arab Emirates</option>
						<option>United Kingdom</option>
						<option>United States of America</option>
						<option>Uruguay</option>
						<option>Uzbekistan</option>
						<option>Vanuatu</option>
						<option>Vatican City</option>
						<option>Venezuela</option>
						<option>Vietnam</option>
						<option>Yemen</option>
						<option>Zambia</option>
						<option>Zimbabwe</option>
            		</select>
				
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Age</label>
				<input class= "form-control" type="number" name="age" value="<?php echo $age;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Gender</label>
				
					<select class= "form-control" name="gender" value="<?php echo $gender;?> required>
						<option disabled= " ">Select your Gender</option>
						<option>Male</option>
						<option>Female</option>
						<option>Transgendered</option>
            		</select>
				
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Mobile Number</label>
				<input class= "form-control" type="number" name="number" value="<?php echo $number;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Email</label>
				<input class= "form-control" type="email" name="email" value="<?php echo $email;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Password</label>
				<input class= "form-control" type="password" name="pass" value="<?php echo $pass;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Forgotten Password</label>
				<input class= "form-control" type="text" name="fp" value="<?php echo $fp;?>" required>
			</div>
			</tr>
			<tr>
			<div class= "form-group"> 
				<label>Approval</label>
				<input class= "form-control" type="text" name="approval" value="<?php echo $approval;?>" required>
			</div>
			</tr>
			<center>
				<tr>
				<div class= "form-group">
					<center>
					<td><input class= "form-control" type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input class= "form-control" id= "addd" type="submit" name="update" value="Update"></td>
					</center>
				</div>
				</tr>
			</center>
		</table>
	</form>
</div>
</body>
</html>