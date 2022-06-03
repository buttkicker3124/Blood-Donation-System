<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Login Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .w-100{
            height: 20px;
            padding: 2px 0px;
            width: 50%;
            color: #fff;
            display: flex;
            align-items: center;
            /* background-color: #000; */
            justify-content: center;
        }
        /* #err_password{
          color : #fff;
          background: red;
          padding: 5px 10px;
        } */
    </style>
<body>
    <!-- navbar--------------------------------------------               -->
    <?php
                   include "navbar.php"
             ?>

<section class="form-container-hospital" id="from_con">
       <h1 class="greet white">
           Hospital Login
       </h1>

       <!-- php code here-------------------------------------------------------------------------- -->
       <?php
          session_start();
                // include 'hospital_reg.php';
                      // defining varaible
                       $name = $email = $password = $c_password = "";
                      
                    

            if($_SERVER["REQUEST_METHOD"]  == "POST"){
                $errors = array();
                $_SESSION['success'] = "";
                                       // initalization
                $name = $_POST['name'];
                $email =  $_POST['email']; 
                $password = $_POST['password']; 
                $c_password =  $_POST['c_password'] ; 
                
                 

                // db conn
                  include "conn.php";
                  if($password  == $c_password){
                        $_POST['submit']   = 0; 
                        ?>
                        <script>
                          alert('Password doesnot matches');
                        </script>
                        <?php
                  }

                // echo "conn_succesful";

                $stmt = $conn-> prepare("INSERT INTO login_hospital(name , email  ,password , c_password) VALUES(?,?,?,?)");
                
               

      
                if($_POST['submit']){
                //redirection to hospital_admin page
                     header("Location:hospital_admin.php");
                }



                // BINDING
                $stmt->bind_param("ssss", $name , $email , $password , $c_password );    
                $stmt-> execute();
                $stmt->close();
                $conn->close();


            }

// form------------------------------------------------------------------------

       ?>
       <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
           <input type="name" name="name" placeholder="Enter your name" required>
           <input type="email"  name="email" placeholder="Enter your email" required>

           <input type="password" name="password" placeholder="Enter your password" id="password" required>
           
           <span class="w-100">
           <input type="checkbox" onclick="myFunction()"> Show password
           </span>
           <input type="password" name="c_password" placeholder="Confirm Password" id="c_password" required>
           <span class="w-100">
           <input type="checkbox" onclick="myFunction1()"> Show password
           </span>
          
           <input type="submit" id="submit" name="submit" placeholder="login" onclick="match()">
                  <h3 class="white">
                        OnSubmission you do be directed to hospital admin page , where you can update, delete , add blood samples. 
                    </h3>
       </form>

                    
   </section>
<!-- footer- section-------------------------------------------------------- -->
<?php 
                   include "footer.php"
             ?>

<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var x = document.getElementById("c_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>
</body>
</html>