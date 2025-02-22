<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Request</title>
</head>
<body>
    <div class="container-fluid">
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter your name" class="mt-3">
        <br>
        <button name="button" value="set">Set Value</button>
    </form>
    </div>

    <?php 
    // if(isset(($_REQUEST["user"]))){
    //     if($_REQUEST['button']=="set"){
    //         $val = $_REQUEST['user'];
    //         // echo "Value set: ".$val;
    //         setcookie("username", $val, time()+ (86400));
    //         echo "Cookie set successfully";
    //     }else if(empty($_REQUEST['user'])){
    //         echo "There is some error";
    //     }
    // }

    if(isset($_REQUEST['user'])){
        if($_REQUEST['button']=="set"){
            $val = $_REQUEST['user'];
            if($val){
                setcookie("Username", $val, time() + (86400));
                echo "Cookie set succesfully"; 
            }else{
                echo "<p style='color:red';>Please enter a value</p>";
            }
        }else{
            echo "Please set a value in button";
        }
    }

    ?>
</body>
</html>