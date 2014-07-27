<?php

// Displays each bio using the data format in filmmakers_data.
// The bio pic is on the left with the text on the right.

function displayBio ($bioData) {

	foreach ($bioData as $bio) {
		echo '<div class="row">';
		echo 	'<article class="filmmakers__article__container col-1-12">';
		echo 		'<img src="'.$bio['picLink'].'"alt="Profile Pic" class="article__img col-md-3 col-md-offset-1">';
		echo 		'<div class="col-md-8">';
		echo 			'<h2 class="filmmakers_bio">'.$bio['name'].'</h2>';
		echo 			'<h3>'.$cast['title'].'</h3>';
		echo 			'<p class="body_text">'.$bio['details'].'</p>';
		echo 		'</div>';
		echo 	'</article>';
		echo '</div>';
	}
}

?>

<h2> Cast <h2>
<?php 	$castBio = displayBio($bioDataCast);
	 	echo $castBio; ?>

<h2> Crew <h2>
<?php 	$castBio = displayBio($bioDataCrew);
	 	echo $castBio; ?>	 	