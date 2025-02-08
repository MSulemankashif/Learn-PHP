<?php 

$students = [
    [1,"Suleman","Karachi"],
    [2,"Usman","Lahore"],
    [3,"Ali","Islamabad"],
    [4,"Ahmed","Quetta"],
    [5,"Kamran","Peshawar"],
    [6,"Noman","Multan"],
    [7,"Talha","Faisalabad"],
    [8,"Bilal","Sialkot"],
    [9,"Zain","Gujranwala"],
    [10,"Ahsan","Hyderabad"]
];

echo "<table border=1>";
    echo "<h1>Students Data</h1>";
    for($i=0;$i<count($students);$i++){
        echo "<tr>";
        for($j=0;$j<count($students[$i]);$j++){
            echo "<td>" . $students[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
