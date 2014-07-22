<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

	<title>Patterns Lab</title>
	<link rel="stylesheet" href="css/main.css">

	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header col-md-12">
				<h1>Movie Site Patterns</h1>
			</div>
		</div>

		

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Colour Palette</h1>
					  </div>
					  <div class="panel-body">
					    <?php require_once ('includes/colours.php'); ?>
					  </div>
					</div>					
				</div>
			</div>

	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Headings</h1>
					  </div>
					  <div class="panel-body">
					    	<?php require_once ('includes/headings.php'); ?>
					  </div>				
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Body Text</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/body_text.php'); ?>
					  </div>
				</div>					
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Navigation Links</h1>
					  </div>
					  <div class="panel-body">
					    	<?php require_once ('includes/nav.php'); ?>
					  </div>				
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Countdown</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/countdown.php'); ?>
					  </div>
				</div>					
			</div>
		</div>

	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>