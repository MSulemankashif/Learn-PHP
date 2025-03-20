<?php
include 'config.php';
// include 'index.php';

$students = $conn->prepare("SELECT * FROM students");
$students->execute();
$result = $students->fetchAll();

// echo "<pre>";
// print_r($result);

echo "<table border=1>";
echo "<tr>";
echo "<td style='font-weight:bold';>Student Name</td>";
echo "<td style='font-weight:bold';>Student Course</td>";
echo "<td style='font-weight:bold';>Student Batch</td>";
echo "<td style='font-weight:bold';>Student City</td>";
echo "<td style='font-weight:bold';>Delete</td>";
echo " </tr>";
foreach($result as $student){
    echo "<tr>". 
        "<td>".$student['Name']."</td>".
        "<td>".$student['Course']."</td>".
        "<td>".$student['Batch']."</td>".
        "<td>".$student['City']."</td>".
        "<td>"."<form method='post'>".
        "<button name='delete' value=".$student['id']." class='btn btn-outline-danger'>Delete</button>".
        "</form>"."</td>".
    "</tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    echo $id=$_POST['delete']." ";
    $students= $conn->prepare("DELETE FROM students WHERE id=$id");
    // $students->execute();

    if($students->execute()){
        echo "Deleted Successfully";
    }else {
        echo "Error while Deleting";    
    }
}