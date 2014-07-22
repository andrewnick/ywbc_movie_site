<?php

	$pages = array();

	$pages['tickets'] ='Tickets';
	$pages['filmmakers'] = 'Filmmakers';
	$pages['connect'] = 'Connect';	

	function createNavFromArray($pages){
	    $nav = '<nav><ul class="nav nav-pills nav-stacked nav__list header__nav">';

	    foreach($pages as $slug => $pageName){
    		$class = "inactive";

    		if($_GET['pages'] == $slug ){
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


<!-- <ul class="nav nav-pills nav-stacked nav__list header__nav">
	<li class="active"><a href="#">Nav Link 1</h3></a></li>
	<li class="active"><a href="#">Nav Link 2</a></li>
</ul>	 -->