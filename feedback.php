<?php

$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'db_sign.php';
//print_r($_POST);
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $case = $_POST["case"];
    $comment = $_POST["comment"];
    $division = $_POST["division"];


    // This sql query is use to check if
    // the username is already present
    // or not in our Database


        $sql = "INSERT INTO `feed` (`id`,`name`,`email`,`phone`,`case`,`comment`,`division`) VALUES (NULL, '$fname', '$email', '$phone','$case','$comment',$division)where 1=1";
        $result = mysqli_query($conn, $sql);
        //print_r($result);


        // $result = mysqli_query($conn, $sql);

        // , current_timestamp(), '$location'
   

} //end if

?>

<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <?php

if ($showAlert) {

    echo ' <div class="alert alert-success
            alert-dismissible fade show" role="alert">

            <strong>Success!</strong> Your account is
            now created and you can login.
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
}

if ($showError) {

    echo ' <div class="alert alert-danger
            alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '

       <button type="button" class="close"
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span>
       </button>
     </div> ';
}

if ($exists) {
    echo ' <div class="alert alert-danger
            alert-dismissible fade show" role="alert">

        <strong>Error!</strong> ' . $exists . '
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
       </div> ';
}

?>
    <style>
    body {
        text-align: center;
    }

    .form-group {
        width: 90%;
        text-align: left;
        margin: 5%;
    }
    </style>
    <div class="container" style="min-height: 60vh;padding-top: 2vh;">

        <h1 class="text-center">Feeedback</h1>
        <form action="#" method="post">

            <div class="form-group">
                <label for="full_name">Name</label>
                <input type="text" class="form-control" id="full_name" name="fname" placeholder="Enter Name"
                    aria-describedby="emailHelp" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Phone Number" name="phone"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="case">Case</label>
                <input type="text" class="form-control" id="case" name="case" required>
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <input type="text" class="form-control" id="comment" name="comment" required>
            </div>
            <div class="form-group">
                <label for="division">Division</label>
                  <select name="division" id="division">
                  <option value="state level">State level</option>
                  <option value="zone">Zone</option>
                  <option value="district level">District level</option>
                  <option value="sub division">Sub Division</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-primary mybtn">
                submit
            </button>
        </form>
    </div>
    <style>
    body {
        background-color: black;
        color: rgb(131, 193, 247);
        background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
    }
    </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>
<style>
* {
    transition: all 0.4s ease 0s;
}

body {
    background-color: #11181d;
    color: white;
}

.logo {
    height: auto;
    width: 100%;
}

.mybtn {
    width: 90%;
    background-color: #c9d6df;
    color: #11181d;
    font-weight: bold;
}

.mybtn:hover {
    background-color: #a8b2b9;
}
</style>

</html>