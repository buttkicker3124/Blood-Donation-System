<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
             <?php
                   include "navbar.php"
             ?>
      
                <!-- landing section -->
                <section class="landing" id="landing">
                <h3 class="white txt-dece" text-align="center" padding = "0px 10px"> 
                        You are not logged in please, Verify yourself here! :) 
                    </h3>
                    <h1 class="greet">
                        Welcome to the Blood Bank Login-In page! 
                    </h1>
                    <h3>
                        Choose the user type : And verify yourself
                    </h3>
                    <div class="user">
                        <div class="child hospital">
                                <a href="hospital_login.php">
                                    Hospital
                                </a>
                        </div>
                        <div class="child reciever">
                                <a href="recieverLogin.php">
                                    Reciever
                                </a>      
                        </div>
                    </div>
                </section>
                <?php
                   include "footer.php"
             ?>
      
    



      <script src="index.js"></script>
</body>
</html>