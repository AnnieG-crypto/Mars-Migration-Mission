<?php
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header('Location: Login.php');
    }
?>
<html>
<head>
    <title>MMI | Profile</title>
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
        </style>
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
                        <li id="pages"><a href=" " class="active"><i class="fa fa-user-astronaut"></i> Profile</a></li>
                        <li id="pages"><a href="index.php" id="about-1"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
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
              -webkit-text-fill-color: transparent;"><i class="fa fa-user-astronaut"></i> Profile</a>
              <a href="index.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
            </div>
    </div>
</body>
</html>