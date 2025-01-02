<?php 



$host ="localhost";
$user ="root";
$pass ="";
$db ="news611";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn -> connect_error) {
    die( $conn -> error );
}else{
    // echo "db connect successful";
}



 ?>