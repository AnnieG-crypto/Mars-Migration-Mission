<html>
<head>
    <title>MMI | Forgot Password</title>
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
    <link rel="stylesheet" type="code/php" href="Profile Page.php">
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
    </head>
<body background= "Images/background.jpg">
<?php
    include_once 'nav.html';
  ?>
    <div class= "sign-form" style="margin-top: 30px;">
      <form action="Profile Page.php" method="post">
        <div class= "form-header">
          <h2>Forgot You Password?</h2>
          <p>Write the applicable answer</p>
        </div>
        <div class= "form-group">
            <label>Email</label>
            <input type= "email" class= "form-control" name="email" placeholder= "E.g- johnsmith@xyz.com" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>What is the name of your grandfather?</label>
            <input type= "password" class= "form-control" name="fp" placeholder= "Name" autocomplete="off" required>
          </div>
          <div class= "form-group">
            <center>
                <button type= "submit" class= "btn btn-primary btn-block btn-lg" name="fpp">Sign In</button>
            </center>
          </div>
          <div class= "text-center small">Don't have an account? <a href="Register.php">Create One!</a>
        </div>
        </form>
      </div>
</body>
</html>