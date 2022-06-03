<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver-member-login-page</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- navbar--------------------------------------------               -->
    <?php
                   include "navbar.php"
             ?>
    
<section class="form-container-receiver">
    <h1 class="greet white">
        Receiver Login
    </h1>
    <?php

                        
                                        // defining varaible
                                        $name = $email = $password = $c_password = "";


                                        if($_SERVER["REQUEST_METHOD"]  == "POST"){
                                                                   // initalization
                                            $name = $_POST['name'];
                                            $email =  $_POST['email']; 
                                            $password = $_POST['password']; 
                                            $c_password =  $_POST['c_password'] ; 
                                             
                            
                                            // db conn
                                             include "conn.php";
                                            // echo "conn_succesful";
                            
                                            $stmt = $conn-> prepare("INSERT INTO login_reciever(name , email  ,password , c_password) VALUES(?,?,?,?)");
                                             
                                             
                                            //redirection to hospital_admin page

                                                     if($_POST['submit']){
                                                         header("Location:recieverDashboard.php");
                                                     }

                                             
                                            // BINDING
                                            $stmt->bind_param("ssss", $name , $email , $password , $c_password );    
                                            $stmt-> execute();
                                            $stmt->close();
                                            $conn->close();
                                   
                                        }
        


      ?>
    <form method = "post" id = "form" class = "form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <input type="name" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>

        <input type="password" name="c_password" placeholder="Confirm Password" required>

        <input type="submit" name="submit" placeholder="login" >
        <h3 class="white">
                        OnSubmission you do be directed to reciever loggedIn page , where you can Request for samples. 
                    </h3>
    </form>

</section>

               <?php
                   include "footer.php"
             ?>
</body>
</html>