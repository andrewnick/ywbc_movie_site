<?php

	$pages = array();
	
	$pages['home'];
	$pages['tickets'] ='Tickets';
	$pages['filmmakers'] = 'Filmmakers';
	$pages['news'] = 'News';


	function createNavFromArray($pages){
	    $nav = '<nav><ul class="nav nav-pills nav-stacked nav__list header__nav">';

	    foreach($pages as $slug => $pageName){
    		$class = "inactive";

    		if(isset($_GET['pages']) == $slug ){
    			$class = "active";
    		}

	        $nav.="<li class='".$class."'><a href='index.php?pages=".$slug."'>".$pageName."</a>";
	    }

	    $nav .='</ul> </nav>';

	    return $nav;
	 }  
		

	$nav = createNavFromArray($pages);

	echo $nav;

?>