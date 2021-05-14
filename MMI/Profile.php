<?php
    session_start();

    include("connection.php");
    include("actual_profile.php");
    if(isset($_POST['sign_in'])){
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

        $select_user = "select * from users where email='$email' AND pass= '$pass'";
        $query = mysqli_query($con, $select_user);
        $check_user = mysqli_num_rows($query);
        $_SESSION['email']=$email;

        $query = mysqli_query($con, $select_user);
        $check_user = mysqli_num_rows($query);
        $_SESSION['email']=$email;

        if($check_user == 1){

            $user = $_SESSION['email'];
            $get_user = "select * from users where email= '$user'";
            $run_user = mysqli_query($con, $get_user);
            $row = mysqli_fetch_array($run_user);
            print "<br/>";
            print "<br/>";
            print "<br/>";
            print "<br/>";
            print "<footer>";
            print "<center>";
            if($row[6]=='Male'){
                print "<img src='Images/Avatar- 1.png' style= 'border-radius: 2px solid white;'>";
            }
            else if($row[6]=='Female'){
                print "<img src='Images/Avatar- 2.png' style= 'border-radius: 2px solid white;'>";
            }
            else if($row[6]=='Transgendered'){
                print "<img src='Images/Transgendered.png' style= 'border-radius: 2px solid white;'>";
            }
            print "</center>";
            print "<br/>";
            print "User Id: ";
            print $row[0];
            print "<br/>";
            print "Name: ";
            print $row[1];
            print "<br/>";
            print "Userame: ";
            print $row[2];
            print "<br/>";
            print "Country: ";
            print $row[4];
            print "<br/>";
            print "Age: ";
            print $row[5];
            print "<br/>";
            print "Gender: ";
            print $row[6];
            print "<br/>";
            print "Number: ";
            print $row[7];
            print "<br/>";
            print "Email: ";
            print $row[8];
            print "<br/>";
            print "Password: ";
            print $row[9];
            print "<br/>";
            print "Forgotten Password: ";
            print $row[10];
            print "<br/>";
            print "Approval: ";
            print $row[11];
            print "<br/>";
            print "</footer>";
            print "<br/>";
            print "<br/>";
            print "<center>";
            print "Contact Us at <a href= 'mailto:ananyagoswami2020@gmail.com' class='mail'>ananyagoswami2020@gmail.com</a> to change your account details. We have not added the feature for you to change your account details yourself due to security purposes.";
            print "</center>";
        }
        else{
            echo"<script>alert('Login failed. Please try again!')</script>";
            echo"<script>window.open('Login.php', '_self')</script>";
        }
    }
    else{
        header('location: Login.php');
    }
?>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Styles.css">
    </head>
    <body style="color: white; display: list-item; font-size: 20px; font-family: 'Gugi', cursive;"></body>
    <style>
            body{
                padding: 15 30% 1% 30%;
            }

            @media (max-width: 991px){
                body{
                    padding: 15 30% 1% 18%;
                }
            }

            center{
                font-size: 15px;
                min-width: 400px;
            }
            
            footer{
                border: 1px solid white;
                border-radius: 20px;
                padding: 20px 20px 20px 20px;
                min-width: 400px;
            }

            center img{
                width: 200px;
                height: 200px;
                border-radius: 100%;
            }

            .mail{
                text-decoration: none;
                color: white;
            }

            a:hover{
                border-bottom: 1px solid white;
                color: white;
            }
        </style>
</html>