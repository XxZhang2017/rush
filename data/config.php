<?php
error_reporting(0);

$db = mysqli_connect("127.0.0.1", "root", "123456", "test");







// if (!$db) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
// mysqli_close($db);


// <!-- <?php
   
//    $DB_SERVER = '127.0.0.1';
//    $DB_USERNAME = 'root';
//    $DB_PASSWORD = '123456';
//    $DB_DATABASE = 'test';
//    $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
//    if (!$conn) {
//       die("Connection failed: " . mysqli_connect_error());
//   }
//       echo "Connected successfully";
// ?> 
