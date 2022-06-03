<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color: #3fa3b0;
        }
       .bg-chng{
           background-color: #ffc859;
           color: #363636;
       }
       .form-container-hospital{
           background: linear-gradient(rgba(0,0,0,0.8) , rgba(0,0,0,0.8)) , url("./img/reciever.jpg");
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           
       }
       .navbar,.footer,.links,.foot-a,.social{
        color: #fff;
       }
    </style>
</head>
<body>
    <!-- navbar--------------------------------------------               -->
    <?php
                   include "navbar.php"
             ?>

<section class="form-container-hospital" id="from_con">
       <h1 class="greet white">
           Reciever Registration
       </h1>

       <!-- php code here-------------------------------------------------------------------------- -->
       <?php

                      // defining varaible
                       $name = $email = $password = "";
                      
                    

            if($_SERVER["REQUEST_METHOD"]  == "POST"){
                                       // initalization
                $name = $_POST['name'];
                $email =  $_POST['email']; 
                $password = $_POST['password']; 
                
                 

                // db conn
                 include "conn.php";



                // echo "conn_succesful";

                $stmt = $conn-> prepare("INSERT INTO registration(name , email  ,password) VALUES(?,?,?)");

                //redirection to hospital_admin page
                 if($_POST['submit']){
                    $_SESSION['name'] = $name;
             
                    // Welcome message
                    $_SESSION['success'] = "You have logged in!";

                    // redirect page
                     header("Location:recieverLogin.php");
                 }



                // BINDING
                $stmt->bind_param("sss", $name , $email , $password);    
                $stmt-> execute();
                $stmt->close();
                $conn->close();


            }

// form------------------------------------------------------------------------

       ?>
       <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
           <input type="name" name="name" placeholder="Enter your name" required>
           <input type="email"  name="email" placeholder="Enter your email" required>

           <input type="password" name="password" placeholder="Enter your password" required>
        
           <input type="submit" id="submit" name="submit" placeholder="login">
                  <h3 class="white">
                        OnSubmission you do be directed to reciever login page , where you can login to request blood samples. 
                    </h3>
       </form>

                    
   </section>
<!-- footer- section-------------------------------------------------------- -->
<?php 
                   include "footer.php"
             ?>


</body>
</html>