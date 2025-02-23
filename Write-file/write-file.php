<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<style>
    input, textarea{
        width: 40% !important;
    }
</style>
<body>
<div class="container-fluid">
    <h1>Create a File</h1>
    <form action="" method="post">
        <input type="text" name="filename" placeholder="Enter file name" required class="form-control mt-4">
        <br>
        <br>
        <textarea name="content" placeholder="Enter content here" class="form-control"></textarea>
        <br>
    <button class="btn btn-outline-success">Create file</button>
    </form>
    </div>

    <?php
    // if(isset($_REQUEST['filename']) ){
    //     $filename = 'files/'.$_REQUEST['filename'];
    //     $content = $_REQUEST['content'];
    //     $file = fopen($filename, "w") or die ("Unable to Create file");
    //     fwrite($file, $content);
    //     fclose($file);
    //     echo "File created successfully";
    // }else{
    //     echo "Please enter file name and content";
    // }

    if(isset($_REQUEST['filename'])){
        $filename = 'files/'. $_REQUEST['filename'];
        $content = $_REQUEST['content'];
        $file = fopen($filename, "w") or die("unable to open file");
        fwrite($file, $content);
        fclose($file);
        echo "File created successfully";
    };
    ?>
</body>
</html>