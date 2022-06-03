<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciever-Dashboard</title>
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
                        <a href="receiver.php" class="btn login-btn">Log Out</a>
                </ul>
    </nav>

                <!-- landing section -->
                <section class="landing" id="landing">
                    <h1 class="greet">
                        Welcome Reciever
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
                          <th>Request</th>
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
                          <td><span onclick = "alert_msg()" class="txt-dece" style="cursor: pointer;">Request sample</span></td>
                        <?php
                                                     
                             }
                        ?>

                </div>


</section>

      <script>
           function alert_msg(){
             alert ('requested and waiting for confirmation');
           }
      </script>
</body>
</html>