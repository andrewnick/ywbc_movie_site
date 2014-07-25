<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once ('includes/head.php'); ?>
</head>
<body>
	
	<?php require_once ('includes/header.php'); ?>	

	<?php 

      $page = $_GET['pages'];
      $pageURI = "includes/content-".$page.".php";
      
      if(!isset($page)){

        require_once ('includes/content-home.php');

      }elseif(file_exists($pageURI)){

           require_once ($pageURI);

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