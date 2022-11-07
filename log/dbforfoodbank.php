<?php
$server = "localhost";
$username = "root";
$password = "";
// $email = "";
$database = "foodbank88303";

$conns = mysqli_connect($server, $username, $password, $database);
if (!$conns){
    echo "unsuccess";
}
// else{
//     die("Error". mysqli_connect_error());
// }

?>
