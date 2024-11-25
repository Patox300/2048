<?php

// //Remote
// $DB_HOST = $_ENV["DB_HOST"];
// $DB_USER = $_ENV["DB_USER"];
// $DB_PASSWORD = $_ENV["DB_PASSWORD"];
// $DB_NAME = $_ENV["DB_NAME"];
// $DB_PORT = $_ENV["DB_PORT"];
// $img_path= $_ENV['RAILWAY_VOLUME_MOUNT_PATH']."/";

//Local
$DB_HOST = 'localhost';
$DB_USER = 'Luis';
$DB_PASSWORD = 'L12345678';
$DB_NAME = 'CuackDB';

//Remote
// $conn = mysqli_connect($DB_HOST,$DB_USER , $DB_PASSWORD, $DB_NAME,$DB_PORT);

//Local
$conn = mysqli_connect($DB_HOST,$DB_USER , $DB_PASSWORD, $DB_NAME);

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>