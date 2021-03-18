<html>

    <head>
        <meta charset="UTF-8">
        <title>Employee database</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div id="wrap">
            <div id="search">
            <h1 id="heading">Employee database</h1>
            <img src="images/delete.png"><br>

              <p class="options">Add, search or remove employees:</p>

                <a href="index.php"><img src="images/search.png" class="contacts" title="Search"></a>
                <a href="insert.php"><img src="images/addnew.png" class="contacts" title="Add new employee"></a>

            </div>

            <?php
            require ('include/connect.php');
            $query = "SELECT * FROM info";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0){

              ?>
              <div class="noresult"> <?php
              echo "Select the employee you wish to remove:"; ?></div>
               <?php

                while ($row = mysqli_fetch_assoc($result)){
                    ?>

                    <div id="result">

                        <a href="include/deleteemployee.php?id=<?php echo $row['id'] ?>"><img src="images/deleteuser.png"></a>
                        <p><b>Name:</b> <?php echo $row['fname'] ." ". $row['lname']; ?></p>
                        <p><b>Tel:</b> <?php echo $row['tel']; ?></p>
                        <p><b>Email:</b> <?php echo $row['email']; ?></p>
                        <p><b>Age:</b> <?php echo $row['age']; ?></p>
                        <p><b>Location:</b> <?php echo $row['location']; ?></p>
                    </div>

                    <?php
                }

            }else{
                echo "No contacts!";
            }

            ?>

        </div>

    </body>

</html>
