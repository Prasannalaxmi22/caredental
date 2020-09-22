<!DOCTYPE html>
<?php
$success = "";
$error_message = "";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <style>
        body{
            background-color: black;
        }
        .container{
            margin-top: 20%;
            margin-left: 50%;
            margin-right: 50%;
            background-color: grey;
           
        }
    </style>
</head>
<body>
    <div class="container" align="center">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="otpverify.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                   
                    <div class="form-group">
                        <input class="form-control" type="number" id="otp" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>