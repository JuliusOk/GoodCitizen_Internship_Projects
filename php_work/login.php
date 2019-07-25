<?php
require_once('configuration.php');
require('logininfo.php');

?>


<!DOCTYPE html>
<html>
<head>
    <title>simple login form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
 <div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default" id="panel">
                <div class="panel-heading">

                    <h4 class="panel-title"><center>Please Enter login details </center></h4>
                </div>
                <div class="panel-body">
                    <form class="form"  method="POST" action="login.php">


                        <div class="form-group">
                         <span>user name</span>
                         <input type="text" name="username" id="first_name" class="form-control" placeholder="First Name" required>

                     </div>

                     <div class="form-group">
                        <span>Password</span>
                        <input type="password" name="password" id="last_name" class="form-control" placeholder="Last Name" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-block btn-warning"  class="form-control" value="Login" id="submit-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
