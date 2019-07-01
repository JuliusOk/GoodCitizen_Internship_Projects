<?php
require('getDetails.php');
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

                    <h4 class="panel-title"><center>Fill in the employee details </center></h4>
                </div>
                <div class="panel-body">
                    <form class="form"  method="POST" action="post.php">


                        <div class="form-group">
                         <span>First name</span>
                         <input type="text" name="firstname" id="first_name" class="form-control" placeholder="First Name" required>

                     </div>

                     <div class="form-group">
                        <span>Last name</span>
                        <input type="text" name="lastname" id="last_name" class="form-control" placeholder="Last Name" required>
                    </div>

                    <div class="form-group">
                        <span>Role or Position</span>
                        <input type="text" name="role" id="last_name" class="form-control" placeholder="Job description" required>
                    </div>


                    <div class="form-group">
                        <span>  Date of Hire</span>
                        <input type="date" name="doh" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <span>Contract</span>
                        <input type="Phone" name="contract" id="email" class="form-control" placeholder="Contract type" required>
                    </div>

                    <div class="form-group">
                        <span>Department</span>
                        <input type="text" name="department" id="last_name" class="form-control" placeholder="Department your under" required>
                    </div>

                    <div class="form-group">
                        <span>Contact</span>
                        <input type="text" name="contact" id="last_name" class="form-control" placeholder="Phone number" required>
                    </div>
                    

                
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-block btn-warning"  class="form-control" value="submit" id="submit-button">
                    </div>

                </form>
                <?php 
                require('errors.php');
                require('success.php');
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>