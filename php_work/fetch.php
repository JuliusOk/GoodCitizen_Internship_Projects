
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Employees</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</script>

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
        <a class="navbar-brand" href="#">Project name</a>
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
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li><a href="index.php">Overview </a></li>
          <li class="active"><a href="#">Employee Details <span class="sr-only">(current)</span></a></li>
          <li><a href="Departments.php">Departments Details</a></li>
          <li><a href="reports.php">Reports</a></li>
          <li><a href="projects.php">Projects</a></li>
        </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Employees</h1>
          <p>This tab contains the all employee details of this company</p>

          <div class="container">
            <h2>List of the current employees</h2>
            <!-- <p>The .table-bordered class adds borders to a table:</p>  -->           
            <table class="table table-bordered">
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
          <div style="color: white;">
            <button type="button" class="btn btn-success"><a href="post.php">Add employee</a></button>
            <button type="button" class="btn btn-danger"><a href="#">Delete employee</a></button>
          </div>

        </div>



      </div>
    </div>
  </div>


</body>
</html>



