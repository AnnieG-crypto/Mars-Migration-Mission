<html>
    <head>
        <title>MMI</title>
        <link rel="stylesheet" type="text/css" href="Styles.css">
        <link rel="stylesheet" type="text/css" href="Reset.css">
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
            .index, .nav-2 .index{
                background: -webkit-linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255), rgba(255, 255, 255),  rgb(0, 0, 0));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .bg-success{
                background-color: transparent !important;
            }
        </style>
    </head>
    <body>
        <?php
            include_once 'home_nav.html';
        ?>
        <div style="background-color: black; bottom: 0px;">
        <section class="home">
            <div class="slider">
                <div class="slide active" style="background-image: url('Images/slide-\ 1.jpg');">
                    <div class="container">
                        <div class="caption">
                            <h1>MMI</h1>
                            <p>Mars Migration Initiative</p>
                            <a id= "slider" href="#mmi" style="background: -webkit-linear-gradient(110deg, rgb(255, 255, 255), rgba(255, 255, 255, 0), rgb(255, 255, 255));"><b>Learn More</b></a>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('Images/slide-\ 2.jpg')">
                    <div id= "overlay"></div>
                    <div class="container">
                        <div class="caption">
                            <h1 style="color: white;">Tourist Programme</h1>
                            <p style="color: white;">Vacancies Available</p>
                            <a id= "slider" href="#tp" style="background: -webkit-linear-gradient(110deg, rgb(0, 0, 0), rgba(255, 255, 255, 0), rgba(0, 0, 0)); color: white;"><b>Get to Know More</b></a>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('Images/slide-\ 3.jpg');">
                    <div class="container">
                        <div class="caption">
                            <h1 style="color: white;">About Us</h1>
                            <p style="color: white;">Our Team</p>
                            <a id= "slider" href="index.php#about" style="background: -webkit-linear-gradient(110deg, rgb(0, 0, 0), rgba(255, 255, 255, 0), rgba(0, 0, 0)); color: white;"><b>Click Here</b></a>
                        </div>
                    </div>
                </div>
            </div>
          
           <!-- controls  -->
           <div class="controls">
               <div class="prev"><i class="fa fa-caret-left" style="padding-right: 5px;"></i></div>
               <div class="next"><i class="fa fa-caret-right" style="padding-left: 5px;"></i></div>
           </div>
       
           <!-- indicators -->
           <div class="indicator">
           </div>
           <hr style= "height:2px;">
         </section>
         <br>
         <span id="mmi"></span>
         <table width= "100%" style="border-collapse: collapse; font-size: 30px; color: white;">
             <tr>
                 <td id="data" width= "20%" style="padding: 70px 20px 20px 20px;">
                 </td>
                 <td id= "data" width= "60%" style="padding: 70px 20px 20px 20px;">
                     <center>
                        <div>Mars Migration Initiative<hr width="70%"></div>
                    </center>
                        <font style="font-size: 18px; text-align: justify;">The efforts of NASA and SpaceX have successfully helped us establish a multi-planetary presence. In other words, we have established both scientific and residential bases on Mars.
                            <br><br>The name of this mission if MMI. NASA's scientists have finally decided that Mars is an applicable place for humans.
                            <br><br>Our main mission is that we can make multi-terrestrial habitats for humans. We have had many trials with experienced astronauts, but still need for so people to visit the planet to assess the comfort-level of the trip as per tourists. <a href="#tp" style="text-decoration: none; background: transparent; font-size: 18px; padding: 0 0 0 0; z-index: 0;">Click Here</a> to know more about the Tourist Programme.
                        </font>
                 </td>
                 <td id="data" width= "20%">
                    <center>
                   </center>
                </td>
             </tr>
         </table>
        <table id= "data-2" width= "100%" style="border-collapse: collapse; font-size: 30px; color: white;">
                <tr height= "100px">
                    <td width= "80%" style="padding: 20px 40px 20px 40px; margin-left: 10%;">
                        <center>
                            <div>Mars Migration Initiative<hr width="70%"></div>
                        </center>
                            <font style="font-size: 18px; text-align: justify;">The efforts of NASA and SpaceX have successfully helped us establish a multi-planetary presence. In other words, we have established both scientific and residential bases on Mars.
                                <br><br>The name of this mission if MMI. NASA's scientists have finally decided that Mars is an applicable place for humans.
                                <br><br>Our main mission is that we can make multi-terrestrial habitats for humans. We have had many trials with experienced astronauts, but still need for so people to visit the planet to assess the comfort-level of the trip as per tourists. <a href="#tp" style="text-decoration: none; background: transparent; font-size: 18px; padding: 0 0 0 0; z-index: 0;">Click Here</a> to know more about the Tourist Programme.
                            </font>
                    </td>
                </tr>
        </table>
        <span id="tp"></span>
        <table width= "100%" style="border-collapse: collapse; font-size: 30px; color: white;">
            <tr>
                <td id="data" width= "20%" style="padding: 70px 20px 20px 20px;">
                </td>
                <td id= "data" width= "60%" style="padding: 70px 20px 20px 20px;">
                    <center>
                       <div>Tourist Programme<hr width="70%"></div>
                   </center>
                       <font style="font-size: 18px; text-align: justify;">NASA and SpaceX are looking for 50 volunteers to board our next spacecraft for launch to Mars for tourism to stay in our world-class facilities.
                           <br><br>We expects volunteers from all over the world to apply for this highly selective and historic mission.
                           <br><br>And you do not need to worry about not being experienced as expert astronauts will board the spacecraft. As for the saftey, your life lies in your own hands and we will not be responsible for any casualties during the trip. You can read the further terms and conditions while registering. <a href="Login.php" style="text-decoration: none; background: transparent; font-size: 18px; padding: 0 0 0 0; z-index: 0;">Click Here</a> to register for the programme.
                       </font>
                </td>
                <td id="data" width= "20%">
                   <center>
                  </center>
               </td>
            </tr>
        </table>
       <table id= "data-2" width= "100%" style="border-collapse: collapse; font-size: 30px; color: white;">
               <tr height= "100px">
                   <td width= "80%" style="padding: 20px 40px 20px 40px; margin-left: 10%;">
                    <center>
                        <div>Tourist Programme<hr width="70%"></div>
                    </center>
                        <font style="font-size: 18px; text-align: justify;">NASA and SpaceX are looking for 50 volunteers to board our next spacecraft for launch to Mars for tourism to stay in our world-class facilities.
                            <br><br>We expects volunteers from all over the world to apply for this highly selective and historic mission.
                            <br><br>And you do not need to worry about not being experienced as expert astronauts will board the spacecraft. As for the saftey, your life lies in your own hands and we will not be responsible for any casualties during the trip. You can read the further terms and conditions while registering. <a href="Login.php" style="text-decoration: none; background: transparent; font-size: 18px; padding: 0 0 0 0; z-index: 0;">Click Here</a> to register for the programme.
                        </font>
                   </td>
               </tr>
       </table>
       <span class= "team" id="about"></span>
       <table width= "100%" style="border-collapse: collapse; font-size: 30px; color: white;">
        <tr>
            <td width= "100%" style="padding: 70px 20px 20px 20px;">
                <center>
                   <div>Our Team<hr width="70%"></div>
               <br>
               <div id="member">
                    <img src="Images/Ananya Goswami.png" width="250px" height="250px">
                    <p style="padding-top: 10px;" class="names">Ananya Goswami</p>
                    <p style="font-size: 16px;">President</p>
               </div>
               <div id="member">
                <img src="Images/Jim Bridenstine.png" width="250px" height="250px">
                <p style="padding-top: 10px;" class="names">Jim Bridenstine</p>
                <p style="font-size: 16px;">Vice President</p>
               </div>
               <div id="member">
                <img src="Images/Joseph Acaba.png" width="250px" height="250px">
                <p style="padding-top: 10px;" class="names">Joseph Acaba</p>
                <p style="font-size: 16px;">Secretary</p>
               </div>
               <div id="member">
                <img src="Images/Kayla Barron.png" width="250px" height="250px">
                <p style="padding-top: 10px;" class="names">Kayla Barron</p>
                <p style="font-size: 16px;">Joint Secretary</p>
               </div>
               <div id="member">
                <img src="Images/Matthew Dominick.png" width="250px" height="250px">
                <p style="padding-top: 10px;" class="names">Matthew Dominick</p>
                <p style="font-size: 16px;">Core</p>
               </div>
               <div id="member">
                <img src="Images/Christina H Koch.png" width="250px" height="250px">
                <p style="padding-top: 10px;" class="names">Christina H. Koch</p>
                <p style="font-size: 16px;">Core</p>
               </div>
                </center>
            </td>
        </tr>
    </table>
    <table width= "100%" style="border-collapse: collapse; font-size: 30px; color: white;" id="fb">
        <tr>
            <td width= "100%" style="padding: 0px 20px 0px 20px;">
                <div class= "sign-form">
                    <form action="index.php" method="post" style="background-image: url('Images/background.jpg');">
                        <div class= "form-header">
                            <h2>Feedback</h2>
                            <p>Tell Us About Our Service</p>
                        </div>
                        <div class= "form-group">
                            <label>Name</label>
                            <input type= "name" class= "form-control" name="name" placeholder= "E.g- John Smith" autocomplete="off">
                        </div>
                        <div class= "form-group">
                            <label>Feedback</label>
                            <input type= "fb" class= "form-control" name="fb" placeholder= "How was our site?" autocomplete="off" required>
                        </div>
                        <input type="checkbox" id="closed">
                            <div class= "form-group" style="font-size: 13px; color: white;">
                            <label style="color: grey;" for="closed" class="closes">Any images of the problem (<a>click here</a> if one)
                            <div class="dropzone">
                                <div class="info"></div>
                            </div>
                            <script type="text/javascript" src="imgur.js"></script>
                            <script type="text/javascript" src="upload.js"></script>
                            </label>
                            </div>
                        <div class= "form-group" id="pic_name">
                            <label>Please copy the link above and paste it here</label>
                            <input type= "text" class= "form-control" name="pic_name" placeholder= "E.g- https://i.imgur.com/example.ext" autocomplete="off">
                        </div>
                        <style>
                            #closed{
                                display: none;
                            }

                            .closes font:hover{
                                text-decoration: grey;
                            }

                            #pic_name{
                                display: none;
                            }
                            #closed:checked ~ #pic_name{
                                display: block;
                            }
                        </style>
                        <div class= "form-group">
                            <center>
                                <button type= "submit" class= "btn btn-primary btn-block btn-lg" name="send" style="background-image: none; background-color: black;">Send</button>
                            </center>
                        </div>
                    </form>
                </div>
                <br>
            </td>
        </tr>
    </table>
       <center>
           <hr width="55%">
           <br>
       </center>
        <script src="Script.js"></script>
        </div>
    </body>
</html>
<?php

include("connection.php");
    if(isset($_POST['send'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['name']));
        $fb = htmlentities(mysqli_real_escape_string($con, $_POST['fb']));
        $pic_name = htmlentities(mysqli_real_escape_string($con, $_POST['pic_name']));
        
        $insert = "INSERT INTO feedback (name, fb, pic_name) values('$name','$fb', '$pic_name')";
        
        $query = mysqli_query($con, $insert);

        if($query){            
            echo"<script>alert('Thank you for your feedback!')</script>";
        }
        else{
            echo"<script>alert('We were not able to send your feedback. Please try again!')</script>";
        }
    }
?>