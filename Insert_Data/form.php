<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: cadetblue;
        }
        .container-fluid{
            margin: 30px;
        }
        input[type="text"]{
            width: 40% !important;
        }
        select{
            width: 40% !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1>PHP Form</h1>
        <form action="./insert.php" method="post">
            <label for="name" class="h6">Enter Your Name Here</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter Your Name" autofocus>
            <br>
            <label class="h6">Select Your Course Here</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="course" id="year2024" value="ADSE">
            <label class="form-check-label" for="flexRadioDefault1">
            ADSE
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="course" id="year2025" value="HDSE">
            <label class="form-check-label" for="flexRadioDefault2">
            HDSE
            </label>
        </div>
            <br>
            <label for="name" class="h6">Enter Your Batch Code Here</label>
            <input type="text" name="batch" class="form-control" required placeholder="Enter Your Batch Code">
            <br>
            <label for="city" class="h6">Enter Your City Here</label>
            <select name="city" class="form-select" required>
                <option>Select City</option>
                <option value="karachi">Karachi</option>
                <option value="lahore">Lahore</option>
                <option value="islamabad">Islamabad</option>
                <option value="multan">Multan</option>
                <option value="hyderabad">Hyderabad</option>
                <option value="faisalabad">Faisalabad</option>
            </select>
            <br>
            <label for="year" class="h6">Select Year</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="year" id="year2024" value="2024">
            <label class="form-check-label" for="year2024">
            2024
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="year" id="year2025" value="2025">
            <label class="form-check-label" for="year2025">
            2025
            </label>
        </div>
        <br>
        <button class="btn btn-success" style="width: 150px;" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>