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
            <img src="images/addnew.png"><br>

              <p class="options">Add, search or remove employees:</p>

                <a href="index.php"><img src="images/search.png" class="contacts" title="Search employees"></a>
                <a href="remove.php"><img src="images/delete.png" class="contacts" title="Remove employee"></a>

            <form action="#" method="POST">
                <label> First name: <br>
                <input type="text" name="fname"></label><br>
                <label> Last name: <br>
                <input type="text" name="lname"></label><br>
                <label> Phone number: <br>
                <input type="text" name="tel"></label><br>
                <label> Email adress: <br>
                <input type="text" name="email"></label><br>
                <label> Age: <br>
                <input type="text" name="age"></label><br>
                <label> Location: <br>
                <input type="text" name="location"></label><br>

                <input type="submit" name="insert" value="insert"><br>
            </form>
            </div>

                <?php
                if(isset ($_POST['insert'])) {
                    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['location'])) {

                        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['location'])) {
                            $fname = trim($_POST['fname']);
                            $lname = trim($_POST['lname']);
                            $tel = trim($_POST['tel']);
                            $email = trim($_POST['email']);
                            $age = trim($_POST['age']);
                            $location = trim($_POST['location']);

                            require('include/connect.php');

                            $fnam = mysqli_real_escape_string($conn,$fname);
                            $lname = mysqli_real_escape_string($conn,$lname);
                            $tel = mysqli_real_escape_string($conn,$tel);
                            $email = mysqli_real_escape_string($conn,$email);
                            $age = mysqli_real_escape_string($conn,$age);
                            $location = mysqli_real_escape_string($conn,$location);

                            $query = "INSERT INTO info (fname, lname, tel, email, age, location) VALUES ('{$fname}', '{$lname}', '{$tel}', '{$email}', '{$age}', '{$location}')";
                            if (mysqli_query($conn, $query) === TRUE) {
                              ?>
                              <div class="insert"> <?php
                              echo "New record succesfully created."; ?></div>
                               <?php
                            }else {
                                echo "Error!";
                            }
                        }else{
                          ?>
                          <div class="message"> <?php
                          echo "All fields must be filled in."; ?></div>
                           <?php
                        }
                    }
                }else{
                  ?>
                  <div class="message"> <?php
                  echo "All parameters must be set."; ?></div>
                   <?php
                }
                ?>


        </div>

    </body>

</html>
