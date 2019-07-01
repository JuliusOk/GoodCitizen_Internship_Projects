<!DOCTYPE html>
<html>
<head>
	<title>testing bootstrap models</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.js" rel="stylesheet">
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
</head>
<body>


	<div class="container">
		<h1 class="text-white bg-dark text-center">Models in bootstrap</h1>
		<button type="button" class="btn btn-success" data-target="signup-modal" data-toggle="modal">Add employee</button>

		<div class="modal" id="signup-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-center text-primary">Register new Employee</h3>
					</div>          
				</div>        
			</div>      
		</div>


		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<i class="fas fa-envelope prefix grey-text"></i>
						<input type="email" id="defaultForm-email" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
					</div>

					<div class="md-form mb-4">
						<i class="fas fa-lock prefix grey-text"></i>
						<input type="password" id="defaultForm-pass" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
					</div>

				</div>
				<div class="modal-footer d-flex justify-content-center">
					<button class="btn btn-default">Login</button>
				</div>
			</div>
		</div>
	</div>

	<div class="text-center">
		<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
		Modal Login Form</a>
	</div>

</div>
</body>
</html>