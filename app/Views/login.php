<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NMS GARBAGE COLLEXTION SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/nw.css');?>">
  </head>
  <body>
    <div class=".container-fluid">
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    	<?php include('templates/header.php')?>
	</div>
	<div class=".container-fluid">
		<div class="d-flex justify-content-center flex-direction-column align-items-center flex-basis-50%">
			<form method="post" action="/login/login">
				<div class="mb-3">
					<label class="form-label">Email Address</label>
					<input type="email" class="form-control" placeholder="john@gmail.com" name="Email">
				</div>
				<div class="mb-3">
					<label class="col-sm-2 col-form-label">Password</label>
					<input type="password" class="form-control" name="Password">
				</div>
				<div>
					<button>Submit</button>
				</div>
			</form>
		</div>
	</div>
  </body>
</html>