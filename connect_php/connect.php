<?php  

$host = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("Connection Failed");
}else{
    echo "Connected Succesfully" . "<br>" . "<br>";

    $result = $conn->query("show tables")->fetch_all();

    echo "<table border=1>";
    echo "<td style='font-weight:bold'> Tables in Database </td>";
    echo " <tr>";
    echo "<td>";
    for($i=0; $i<count($result); $i++){
        // echo $result[$i][0] . "<br>";
        // echo 
        echo $result[$i][0] . ' <br> </td>';
    }
    echo " </tr> </table>";
}