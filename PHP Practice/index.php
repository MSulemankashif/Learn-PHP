<?php
$users = [
    [1,"Suleman","Karachi"],
    [2,"Usman","Karachi"],
    [3,"Ali","Islamabad"],
    [4,"Waleed","lahore"]
];

echo "<table border=1>";
    echo "<tr>";
    echo "<td style='font-weight:bold';>S.NO</td>";
    echo "<td style='font-weight:bold';>Name</td>";
    echo "<td style='font-weight:bold';>City</td>";
    echo "</tr>";
    for($i=0;$i<count($users);$i++){
    echo "<tr>";
        for($j=0;$j<count($users[$i]);$j++){
            echo "<td>";
            echo $users[$i][$j] ."<br>";
            echo "</td>";
        }
    echo "</tr>";
    };
