<?php

//	Import the data to be displayed
	require_once ('includes/filmmakers_data.php'); 

// Displays each bio using the data format in filmmakers_data.
// The bio pic is on the left with the text on the right.

function displayBio ($bioData) {

		foreach ($bioData as $bio) {
		echo '<div class="filmmakers__article__container row">';
		echo 	'<article class="col-1-12">';
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
<div class="filmmakers__container background--beige">
	<div class="container">
		<div class="row">
			<h1 class="filmmakers__title col-md-12"> The Filmmakers </h1>
		</div>

		<section class= "filmmakers__container__section">
			<div class="row">
				<h2 class ='col-md-12'> Cast </h2>
			
			<?php 	$castBio = displayBio($bioDataCast);
				 	echo $castBio; ?>
			</div>
		</section>

		</section "filmmakers__container__section">
			<div class="row">
				<h2 class ='col-md-12'> Crew </h2>
			
			<?php 	$castBio = displayBio($bioDataCrew);
				 	echo $castBio; ?>

		 	</div>
	 	</section>

		<section class="filmmakers__container__section">
			<div class="row">
				<div class="filmmakers__additional">
					<h2>Additional Crew</h2>
					<h3>Andrew Crawford - Assistant Director</h3>
					<h3>Geneieve Lamb - Makeup Artist</h3>
					<h3>Rachel Weir - Costume Designer</h3>
				</div>
			</div>
		</section>
	</div>
</div>