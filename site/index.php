<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    
	<title>LIFE</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,900' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- add Modernizr -->
    <script src="assets/js/vendor/modernizr-2.8.0.min.js"></script>

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
	
	<?php require_once ('includes/header.php'); ?>	

	<?php 

      $page = $_GET['pages'];
      $pageURI = "includes/content-".$page.".php";
      
      if(!isset($page)){

        require_once ('includes/content-home.php');

      }elseif(file_exists($pageURL)){

           require_once ($pageURL);

      }else {

         require_once ('includes/content-404.php');

      }
  ?>

  <?php require_once ('includes/footer.php'); ?>
	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>