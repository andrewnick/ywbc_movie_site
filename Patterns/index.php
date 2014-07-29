<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    
	<title>Patterns Lab</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="../site/assets/css/main.css" rel="stylesheet">

    <!-- add Modernizr -->
    <script src="../site/assets/js/vendor/modernizr-2.8.0.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');

    </script>
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
					    <h1 class="panel-title">Footer Text</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/footer_text.php'); ?>
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

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Title</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/title.php'); ?>
					  </div>
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Background</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/backgrounds.php'); ?>
					  </div>
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Separators</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/separators.php'); ?>
					  </div>
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Video</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/video.php'); ?>
					  </div>
				</div>					
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			    <h1 class="">Header</h1>
			  	<?php require_once ('../site/includes/header.php'); ?>				
			</div>
		</div>
	</div>	

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			    <h1 class="">Footer</h1>
				<?php require_once ('../site/includes/footer.php'); ?>
			</div>
		</div>
	</div>

	<br/>		

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Filmmakers</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('../site/includes/filmmakers_data.php'); ?>
					  	<?php require_once ('includes/filmmakers.php'); ?>
					  </div>
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">News</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/news.php'); ?>
					  </div>
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					  <div class="panel-heading">
					    <h1 class="panel-title">Map</h1>
					  </div>
					  <div class="panel-body">
					  	<?php require_once ('includes/map.php'); ?>
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