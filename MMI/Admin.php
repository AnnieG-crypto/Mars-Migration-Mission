<?php
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header('Location: Unlock.html');
    }
    include_once("Admin/config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>
<html>
<head>
    <title>MMI | Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="http://127.0.0.1/MMI/Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1/MMI/Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1/MMI/Favicons/favicon-16x16.png">
    <link rel="manifest" href="http://127.0.0.1/MMI/Favicons/site.webmanifest">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>>
    <script src= "https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset= "utf-8">
    <script defer src="Script.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css">
        <link rel="stylesheet" type="text/css" href="Reset.css">
    <link rel="stylesheet" type="code/php" href="profile.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script defer scr="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    </head>
<body background= "Images/background.jpg">
    <div class= "header">
        <header>
            <img class= "logo" src="Images/Logo.png">
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
                        <li id="pages"><a href=" " class="active"><i class="fa fa-tools"></i> Admin Panel</a></li>
                        <li id="pages"><a href="Feedback.php"><i class="fa fa-user-lock"></i> Feedback</a></li>
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
              <a href=" " style="background: -webkit-linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255), rgba(255, 255, 255),  rgb(0, 0, 0));
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;"><i class="fa fa-tools"></i> Admin Panel</a>
              <a href="Feedback.php"><i class="fa fa-user-lock"></i> Feedback</a>
            </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class= "tablee">
    <br>
    <br>
        <h1>Users- Admin Panel</h1>
    <br>
    <br>
<a href="Admin/add.html" id="add">Add New Data</a><br/><br><br><br>
<center>
	<table width='80%' id="box">

	<tr>
		<th>Name</th>
		<th>Nick Name</th>
		<th>Country</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Number</th>
		<th>Email</th>
		<th>Password</th>
		<th>Forgot Password</th>
		<th>Approval</th>
		<th>Update</th>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['nick_name']."</td>";
		echo "<td>".$res['country']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['gender']."</td>";
		echo "<td>".$res['number']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['pass']."</td>";
		echo "<td>".$res['fp']."</td>";
		echo "<td>".$res['approval']."</td>";
		echo "<td><a href=\"Admin/edit.php?id=$res[id]\">Edit</a> <br> <a href=\"Admin/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</div>
</center>
<style>
            header{
                background-image: none;
            }
            @media (max-width: 991px){
                .nav-2{
                    background-image: none;
                    background-color: rgb(0, 0, 0);
                }
            }
            body
            {
            margin:0;
            padding:0;
            }

            .tablee{
                border-radius: 20px;
                border: 1px solid white;
                box-shadow: 3px 6px 10px rgba(255, 255, 255, 0.699);
                margin: 0px 50px 0px 50px;
                padding: 0px 20px 20px 20px;
                background-color: black;
            }

            #add {
            background-image: url('Images/background.jpg');
            color: white;
            padding: 16px;
            font-size: 16px;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 3px 6px 10px rgba(255, 255, 255, 0.699);
            float: right;
            margin-right: 65px;
            }

            th, td {
                text-align: center;
                padding: 5px 5px 5px 5px;
                font-size: 14px;
                border-collapse: collapsed;
                border: 1px solid white !important;
                background-image: url('Images/background.jpg');
            }

            #box{
                border-collapse: collapsed;
                border: 1px solid white !important;
                background-color: black;
                color: white;
                border-radius: 15px 50px 30px 5px;
            }

            #box a{
                text-decoration: none;
                color: white;
            }

            #box a:hover {
                text-decoration: underline;
            }

            h1{
                text-align: center;
                color: white;
            }
        </style>
</body>
</html>