<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    //  $conn = new mysqli($host, $user, $pass, $db_name);
    //    $con = mysqli_connect($host, $user, $pass, $db_name);
        $con = mysqli_connect("idocappdb-1.ceikcu3a9skn.us-east-1.rds.amazonaws.com","docappweb","Student123>","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

