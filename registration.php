<?php
    include "User.php";
?>

<?php
    $user = new User();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
        $uReg = $user->userRegistration($_POST);
    }

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <form action="registration.php" method="POST">


                <label for="fname">First Name</label>
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" id="fname" placeholder="Enter your first name here">
                </div>

                <label for="lname">Last Name</label>
                <div class="form-group">
                    <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter your last name here">
                </div>

                <label for="email">Email</label>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email name here">
                </div>

                <label for="username">Username</label>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" id="username" placeholder="Enter your username here">
                </div>

                <label for="password">Password</label>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password here">
                </div>

                <input type="submit" value="Register" name="register">
            </form>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>