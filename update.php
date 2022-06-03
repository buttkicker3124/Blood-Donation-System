<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="con">

     <h1 class="heading white">
          update row
     </h1>
               <!-- php------------------------------------------------ -->

               <?php
               
                              
               //    if(isset($_POST['name'])){
               //     $name = $_POST['name'];
               //    }
               //    if(isset($_POST['email'])){
               //     $email = $_POST['email'];
               //    }
               //    if(isset($_POST['password'])){
               //     $password = $_POST['password'];
               //    }
               //    if(isset($_POST['c_password'])){
               //     $c_password = $_POST['c_password'];
               //    }
                           
                                           // defining varaible
                                           $bank = $blood_grp = $availability = "";
   
   
                                           if($_SERVER["REQUEST_METHOD"]  == "POST"){
                                                                      // initalization
                                              $bank = $_POST['bank'];
                                               $blood_grp =  $_POST['blood_grp']; 
                                               $availability = $_POST['availability']; 
                                            //    $c_password =  $_POST['c_password'] ; 
                                                
                                            
                               
                                               // db conn
                                               $conn = new mysqli('localhost' , 'root' , '', 'blood-donation');
                                        
                                               if($conn -> connect_error){
                                                   die("couldn't connect bitch : " . $conn->connect_error);
                                               } 

                                               
                                               $stmt = $conn-> prepare("INSERT INTO field_tbl(bank, blood_grp , availability) VALUES(?,?,?)");
                                                
                                                
                                               //redirection to hospital_admin page
                                                           if($_POST['submit']){
                                                              header("Location:hospital_admin.php");
                                                          }
   
                                                
                                               // BINDING
                                               $stmt->bind_param("sss", $bank , $blood_grp , $availability );    
                                               $stmt-> execute();
                                               $stmt->close();
                                               $conn->close();
                               
                               
                                           }
           
   
   
         ?>
         <!-- ---------------------------------------------------------------------- -->


     <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <input type="text" name="bank" placeholder="Enter your bank" required>
        <input type="text" name="blood_grp" placeholder="Enter your blood_grp" required>
        <input type="text" name="availability" placeholder="Enter availability" required>
        <input type="submit" name="submit">
    </form>
     </div>
     <h3 class="white">
                        OnSubmission you do be directed to hospital_admin page , where you can see your modified data. 
                    </h3>
</body>
</html>