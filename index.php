<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank System</title>

     <link rel="stylesheet" href="style.css">

</head>
<body>
      
          <?php
             include "navbar.php";
          ?>
            <!-- availableblood----------------------------------------------------- -->
            <section class="available_blood" id="available_blood">
                <h1 class="greet">
                    Welcome to the Blood Bank! 
                    
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
                          <th>request sample</th>
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
                                  <a href="login.php" class="anchor_btn">
                                  Delete
                            </a>
                            </button>
                            </td>
                          <td>
                              <button class="green">
                                  <a href="login.php"  class="anchor_btn">
                                      Update
                                  </a>
                                </button>
                            </td>  
                            <td>
                              <a href="login.php" class="txt-dece">
                                Request Sample
                              </a>
                          </td>
                        <?php
                                                     
                             }
                        ?>

                </div>
            </section>

            
            <!-- <?php
                   include "footer.php"
             ?>  -->
      
            <script src="index.js"></script>
</body>
</html>