<?php
    $db_sever = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "aastu_lab";

    try{
    $conn = mysqli_connect($db_sever, $db_user, $db_password, $db_name);
        if($conn){
            echo "connected";
        }
    }
    catch(mysqli_sql_exception){
        echo mysqli_connect_error();
    }
    $sql = "CREATE DATABASE IF NOT EXISTS users(
        id INT(6) UNSIGNAL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL )";

if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}
else{
    echo mysqli_error($conn);
}
mysqli_close($conn);

        
