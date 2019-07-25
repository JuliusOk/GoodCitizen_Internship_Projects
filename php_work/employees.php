<?php 

require('getDetails.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/newbootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styling.css">


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/gif/png" href="../img/skills.png">

  <title>Employees Module</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- External CSS -->
  <link rel="stylesheet" type="text/css" href="css/styling.css">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">EPR General Company System</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="margin-top: 60px;">
          <div id="dashboard">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Overview </a></li>
            <li class="active"><a href="#">Employees<span class="sr-only">(current)</span></a></li>
            <li><a href="Departments.php">Departments</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="projects.php">Projects</a></li>
          </ul>


        </div>
      </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: -510px !important;">
          <h1 class="page-header">Employees</h1>
          <p>This tab contains the all employee details of this company</p>

          <div class="container">
            <h2>List of the current employees</h2>
            <!-- <p>The .table-bordered class adds borders to a table:</p>  -->           
            <table class="table table-bordered" style="margin-right: 10px;">
              <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Role</th>
                  <th>Date of Hire</th>
                  <th>Contract type</th>
                  <th>Department</th>
                  <th>Phone number</th>
                  <!-- <th>contract type</th> -->
                </tr>
              </thead>
              <tbody>
                <?php

                $conn = mysqli_connect('localhost','root','','users');

                $query = "SELECT * FROM registration";
                $result = mysqli_query($conn,$query);

                while ($row = mysqli_fetch_array($result)){

                  ?>

                  <tr>
                    <td><?php echo "".$row["id"]."";?></td>
                    <td><?php echo "".$row["firstname"]."";?></td>
                    <td><?php echo "".$row["lastname"]."";?></td>
                    <td><?php echo "".$row["role"]."";?></td>
                    <td><?php echo "".$row["doh"]."";?></td>
                    <td><?php echo "".$row["contract"]."";?></td>
                    <td><?php echo "".$row["department"]."";?></td>
                    <td><?php echo "".$row["contact"]."";?></td>
                  </tr>
                  <?php

                }

                ?>

              </tbody>
            </table>
          </div>
          <div style="color: white; margin-bottom: 50px; ">
            <button type="button" class="btn btn-primary" style="background-color: white; text-decoration: none;"><a href="#" data-toggle="modal"  data-target="#addDamage" id="modal-links" class="margink">Add employee</a></button>
            <button type="button" class="btn btn-danger" style="background-color: white; text-decoration: none;"><a href="#">Delete employee</a></button>
          </div>

        </div>


      </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="addDamage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <form action="" method="post" name="addDamage">

          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Fill in the employee details </h4>
          </div>
          <div class="modal-body">
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

      <div class="modal-footer">
        <button class="btn btn-primary">Submit</button>
        <button class="btn btn-success" data-dismiss="modal">Close</button>

      </div>
    </div>
  </form>
</div>
</div>
</div>




</body>
</html>
