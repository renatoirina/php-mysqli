<?php

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "university_db_small");
define("DB_PORT", 3306);

try {

    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

} catch (Exception $e) {

    echo $e->getMessage();
    die();

}

$sql = "SELECT * FROM `departments`";
$result = $connection->query($sql);

if($result && $result->num_rows > 0) {

    //prelevare i risultati di ogni riga ( eseguire fetch_object tante volte quante righe ho )
    
    $row1 = $result->fetch_object();
    $row2 = $result->fetch_object();
    $row3 = $result->fetch_object();

    var_dump($row1);
    var_dump($row2);
    var_dump($row3);

    var_dump($result);

}

?>