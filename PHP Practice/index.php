<?php 

$users = [
    [1,"Suleman","Karachi"],
    [2,"Usman","Lahore"],
    [3,"Ali",'Islamabad']    
];

for($i=0; $i<count($users);$i++){
    for($j=0; $j<count($users[$i]);$j++){
        echo $users[$i][$j]. " <br>";
    };
};