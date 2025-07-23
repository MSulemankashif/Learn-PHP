<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("Connection Failed");
}else{
    echo "Connected Successfully to Database". "<br>";

    $result = $conn->query("show tables")->fetch_all();
    // print_r( $result);

    echo "<table border=1> 
        <td style='fontstyle:bold'>Tables in Database</td>";
    echo "<tr> <td>";
    for($i=0; $i<count($result); $i++){
        echo $result[$i][0]. "</tr> </td> </table>";
    }
}

