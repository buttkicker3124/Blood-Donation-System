<?php
                   $conn = mysqli_connect('localhost','root');
                   mysqli_select_db($conn , "blood-donation");
                //   if($conn){
                //    echo "conn_successfully";
                //   }
                if($conn -> connect_error){
                    die("couldn't connect bitch : " . $conn->connect_error);
                } 
?>