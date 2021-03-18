<html>

    <head>
        <meta charset="UTF-8">
        <title>Employee Database</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div id="wrap">
            <div id="search">
            <h1 id="heading">Employee database</h1>
            <img src="images/search.png"><br>

                <p class="options">Add, search or remove employees:</p>

                <a href="insert.php"><img src="images/addnew.png" class="contacts" title="Add new employee"></a>
                <a href="remove.php"><img src="images/delete.png" class="contacts" title="Remove employee"></a><br>

            <form action="#" method="GET">
                <input type="text" placeholder="Find employees" name="criteria">
                <input type="submit" value="Search"> <br>
            </form>
            </div>

            <?php
	            include("include/theresult.php");
	        ?>

        </div>

    </body>

</html>
