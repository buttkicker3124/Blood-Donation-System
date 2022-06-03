<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital_admin_page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
                   
                    <!-- navbar--------------------------------------------               -->
              <nav class="navbar" id="navbar">
                <span class="logo">
                    
                        LOGO
                    
                </span>
                <ul class="navlists">
                         <li class="navlinks">
                             <a href="index.php" class="links">
                                 Home
                             </a>
                         </li>
                         <li class="navlinks">
                            <a href="#" class="links">
                                About
                            </a>
                        </li>
                        <li class="navlinks">
                            <a href="#" class="links">
                                Contact Us
                            </a>
                        </li>
                        <li class="navlinks">
                            <a href="#" class="links">
                                Campaigns
                            </a>
                        </li>
                        <li class="navlinks">
                            <a href="#" class="links">
                                Donate
                            </a>
                        </li>
                </ul>
    </nav>

                <!-- landing section -->
                <section class="landing" id="landing">
                    <h1 class="greet">
                        Welcome to hospital admin page
                    </h1>

                <h3 class="heading">
                    Available blood groups    
                </h3>
                <div class="table">
                    <table id="table">
                        <tr>
                            <th>Id</th>
                          <th>Hospitals</th>
                          <th>Blood group</th>
                          <th>Availabiility</th>
                          <th>Delete</th>
                          <th>Update</th>
                        </tr>
                        <?php
                        include "conn.php";
                         $q = "select * FROM field_tbl";
                         $query = mysqli_query($conn , $q);

                         while($res = mysqli_fetch_array($query)){

                      ?>
                        <tr>
                            <td><?php echo $res['id'];?></td>
                          <td><?php echo $res['bank'];?></td>
                          <td><?php echo $res['blood_grp'];?></td>
                          <td><?php echo $res['availability'];?></td>
                          <td>
                              <button class="danger">
                                  <a href="delete.php?id=<?php echo $res['id'];?>" class="anchor_btn">
                                  Delete
                            </a>
                            </button>
                            </td>
                          <td>
                              <button class="green">
                                  <a href="update.php?id = <?php echo $res['id'];?>"  class="anchor_btn">
                                      Update
                                  </a>
                                </button>
                            </td>  
                        <?php
                                                     
                             }
                        ?>

                </div>



</section>

      
</body>
</html>