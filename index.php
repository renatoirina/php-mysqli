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

var_dump($result);

?>