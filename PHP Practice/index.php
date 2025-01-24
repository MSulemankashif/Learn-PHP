<?php 

//Switch case statement
// $favoriteColor = "blur";

// switch($favoriteColor){
//     case "blue":
//         echo "Your favorite color is blue";
//         break;
//     case "red":
//         echo "Your favorite color is red";
//         break;
//     case "orange":
//         echo "Your favorite color is orange";
//         break;
//     default:
//         echo "You like all colors";
//         break;
// };

$y =20;
echo 'Before Execution ';
if($y == 20){
    goto end;
}
echo "Hello world";

end: echo"<br> after execution";
