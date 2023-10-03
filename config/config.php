<?php

try {
    //Host
    define("HOST", "localhost");

    //DBName
    define("DBNAME", "coffee-blend");

    //User
    define("USER", "root");

    //Pass
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER, PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch( PDOException $Exception ) {


    echo $Exception->getMessage( );
}

?>

    /**if($conn == true) {
        echo "Connection is fine";
    } else {
        echo "Error";
    }**/
