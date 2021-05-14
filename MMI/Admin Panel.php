<?php
    session_start();

    if(isset($_POST['open'])){
        $pass = $_POST['pass'];
        $pass_admin = 'AdminPassword';
        $pass_feed = 'FeedPassword';
        
        if($pass==$pass_admin){

            include_once("Admin.php");
        
        }

        else if($pass==$pass_feed){

            include_once("Feedback.php");

        }

        else{
            echo"<script>alert('Oops! The page did not open. Try again')</script>";
            echo"<script>window.open('Unlock.html', '_self')</script>";
        }
    }
    else{
        header('location: Unlock.html');
    }
?>