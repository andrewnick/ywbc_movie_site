<?php 
    
    $pages = array(

    'tickets' => array(
                'title' =>'Tickets', 
                'description' => 'This is the ticket description'
                ), 

    'filmmakers' => array(
                'title' =>'Filmmakers', 
                'description' => 'This is the filmmakers description'
                ), 

    'news' => array(
                'title' =>'News', 
                'description' => 'This is the news description'
                ) 
    );

    function generatePageTitle($pages){
        $title = "";

        if(!isset($_GET['pages'])){

           $title = 'LIFE';

        }elseif (array_key_exists($_GET['pages'], $pages)){

          $title = $pages[$_GET['pages']]['title'];

        }

        return $title;
    }

    // function generatePageDescription($reqContent){
    //     $content = "";

    //     if(!isset($_GET['pages'])){

    //        $content = 'This is the ticket description';

    //     }elseif (array_key_exists($_GET['pages'], $pages)){

    //       $content = $pages[$_GET['pages']][$reqContent];

    //     }

    //     return $content;
    // }

 ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">

<title>
    <?php $title = generatePageTitle($pages);
          echo $title; ?>
</title>

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