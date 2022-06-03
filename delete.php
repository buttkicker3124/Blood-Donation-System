<?php
    include "conn.php";


    $id = $_GET['id'];
    $q =  "DELETE FROM `field_tbl` WHERE id = $id";

    mysqli_query($conn,$q);
        
    header('Location:hospital_admin.php');
?>