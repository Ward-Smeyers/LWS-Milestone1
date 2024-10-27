<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Milestone 1</title>
</head>
<body class="container">
    <?php

        $hostname = getenv('MYSQL_HOSTNAME');
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');

        // echo "<p class='text-center'>Connecting to database...</p>";
        $connection = mysqli_connect ($hostname, $username, $password, $database); 

        $result = $connection->query("SELECT name, surname FROM Milestone1.name WHERE id = 1");

        if ($result->num_rows > 0 and $result->num_rows < 2) {
            while($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $surname = $row["surname"];
            }
        }
        
        $connection->close( );
    ?>

    <h1 class="text-center mt-5">
        Linux Webservices Milestone 1!
    </h1>
    <h3 class="text-center mt-3">
        <?php echo "<u>", $name, " ", $surname, "</u>" ?> has reached Milestone 1!!
    </h3>
    <div class="row  mt-5">
        <img class="col ps-5" src="https://thomasmore.be/themes/custom/tm/assets/images/logo/thomasmore_logo_oranje.svg" alt="Milestone 1">
        <div class="col-7 col-lg-8 pe-5 ">
            <p class="text-center mt-3 mb-0">Server Name: <?php echo $_SERVER['SERVER_NAME']; ?> </p>
            <p class="text-center mb-0">Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?> </p>
            <p class="text-center mb-0">Container ID: <?php echo php_uname('n'); ?> </p>
        </div>
    </div>
</body>
  
</html>
