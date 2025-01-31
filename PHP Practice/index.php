<?php

$users =[
    ["Name"=>"Suleman","Age"=>19,"city"=>"karachi"],
    ["Name"=> "Ali","Age"=> 20,"city"=> "Lahore"],
    ["Name"=> "Ahmed","Age"=> 21,"city"=> "Karachi"]
];

echo "<table border=1>";
echo "<tr>
    <td style='font-weight:bold';>Name</td>
    <td style='font-weight:bold';>Age</td>
    <td style='font-weight:bold';>City</td>
</tr>";
for ($i = 0; $i < count($users); $i++){
    echo "<tr>";
    foreach($users[$i] as $key=> $value){
        /* echo "<td style='width:40px';>";
            echo "$key";
        echo "</td>"; */
         
        echo "<td style='width:60px';>";
            echo " $value";
        echo "</td>";
    };
    echo "</tr>";
};
echo "</table>";