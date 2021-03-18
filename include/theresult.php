<html>

    <head>
        <meta charset="UTF-8">
        <title>Employee database</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>

<?php
    require ("connect.php");
        if (isset ($_GET['criteria'])) {

            if(!empty ($_GET['criteria'])) {

                $criteria = trim ($_GET['criteria']);
                $criteria = mysqli_real_escape_string ($conn, $criteria);
                $query = "SELECT * FROM info WHERE fname LIKE '%{$criteria}%' OR lname LIKE '%{$criteria}%'";

                $result = mysqli_query ($conn, $query);


                if (mysqli_num_rows($result)>0){
                ?>  <div class="numberof"> <?php
                  echo "Number of results:" . mysqli_num_rows ($result);
                    ?></div><?php
                 while ($row = mysqli_fetch_assoc($result)){
                   ?>

                     <div id="result">
                      <img src="images/existing.png">
                      <p><b>Name:</b> <?php echo $row['fname'] ." ". $row['lname']; ?></p>
                      <p><b>Tel:</b> <?php echo $row['tel']; ?></p>
                      <p><b>Email:</b> <?php echo $row['email']; ?></p>
                      <p><b>Age:</b> <?php echo $row['age']; ?></p>
                      <p><b>Location:</b> <?php echo $row['location']; ?></p>
                    </div>
                     <?php
                 }

                 } else{
                   ?>
                   <div class="noresult"> <?php
                   echo "No results"; ?></div>
                    <?php
                }

            } else{

              ?>
              <div class="noresult"> <?php
              echo "Please type a name of the employee"; ?></div>
               <?php
        }
    }
    ?>
  </body>
</html>
