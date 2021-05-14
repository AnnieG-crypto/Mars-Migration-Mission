<?php
session_start();

include("connection.php");
    if(isset($_POST['sign_up'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['name']));
        $nick_name = htmlentities(mysqli_real_escape_string($con, $_POST['nick_name']));
        $country = htmlentities(mysqli_real_escape_string($con, $_POST['country']));
        $age = htmlentities(mysqli_real_escape_string($con, $_POST['age']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['gender']));
        $number = htmlentities(mysqli_real_escape_string($con, $_POST['number']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $fp = htmlentities(mysqli_real_escape_string($con, $_POST['fp']));
        $profile_pic = htmlentities(mysqli_real_escape_string($con, $_POST['user_profile']));

        $to= $email;
        $subject= 'MMI Tourist Programme Details';
        $message= 'Hi! As you have registered for the Tourist Programme at the MMI website, there are many detais that you have to send to us related to your health status and blah blah blah (I have not written the whole content because this is just a site for a competition.) Please send these to us by the end of the week Warmest Regards, MMI Team.';
        $headers= 'From: ananyagoswami2020@gmail.com'.'\r\n'.'CC: $to';

        if($name == ''){
            echo"<script>alert('We cannot verify your name')</script>";
        }
        if($nick_name == ''){
            echo"<script>alert('We cannot verify your nick name')</script>";
        }
        if($country == ''){
            echo"<script>alert('We cannot verify your country')</script>";
        }
        if($age == ''){
            echo"<script>alert('We cannot verify your age')</script>";
        }
        if($gender == ''){
            echo"<script>alert('We cannot verify your gender')</script>";
        }
        if($number == ''){
            echo"<script>alert('We cannot verify your number')</script>";
        }
        if($fp == ''){
            echo"<script>alert('We cannot verify your forgotten answer')</script>";
        }

        $check_email = "select * from users where email='$email'";
        $run_email = mysqli_query($con, $check_email);

        $check = mysqli_num_rows($run_email);

        if($check==1){

            echo"<script>alert('This email already exists. Please try again')</script>";
            echo"<script>window.open(Register.php, '_self')</script>";
            exit();
        }

        $check_nickname = "select * from users where nick_name='$nick_name'";
        $run_nickname = mysqli_query($con, $check_nickname);

        $check2 = mysqli_num_rows($run_nickname);

        if($check2==1){

            echo"<script>alert('This username already exists. Please try again')</script>";
            echo"<script>window.open(Register.php, '_self')</script>";
            exit();
        }

        if($gender=='Male')
            $profile_pic="Images/Avatar- 1.png";
        else if($gender=='Female')
            $profile_pic="Images/Avatar- 2.png";
        else if($gender=='Transgendered')   
            $profile_pic="Images/Transgendered.png";

        $insert = "INSERT INTO users (name, nick_name, user_profile, country, age, gender, number, email, pass, fp) values('$name','$nick_name','$profile_pic','$country','$age','$gender','$number','$email','$pass','$fp')";
        
        $query = mysqli_query($con, $insert);

        if($query){            
            echo"<script>alert('Congratulations $nick_name, your account has been created successfully!')</script>";
            mail($to, $subject, $message, $headers);
            echo "<script>window.open('Login.php', '_self')</script>";
            }
        }
        else{
            echo"<script>alert('Registeration failed. Please try again!')</script>";
            echo"<script>window.open('Register.html', '_self')</script>";
        }
    }
    else{
        header('location: Login.php');
    }
?>