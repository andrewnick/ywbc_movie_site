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
		echo 			'<h3 class="filmmakers_bio filmmakers__heading">'.$bio['name'].'</h3>';
		echo 			'<h4 class="filmmakers__heading">'.$bio['title'].'</h4>';
		echo 			'<p class="body_text">'.$bio['details'].'</p>';
		echo 		'</div>';
		echo 	'</article>';
		echo '</div>';
	}
}

?>
<div class="content__container background--beige">
	<div class="container">
		<div class="row">
			<h1 class="content__title col-md-12"> The Filmmakers </h1>
		</div>

		<section class= "filmmakers__container__section row">
			<div class="row">				
				<h2 class ='filmmakers__heading col-md-12'> Cast </h2>
			</div>
			<?php 	$castBio = displayBio($bioDataCast);
				 	echo $castBio; ?>
		</section>

		<section class="filmmakers__container__section row">
			
			<div class="row">				
				<h2 class ='filmmakers__heading col-md-12'> Crew </h2>
			</div>
			
			<?php 	$castBio = displayBio($bioDataCrew);
				 	echo $castBio; ?>

		 	
	 	</section>

		<section class="filmmakers__container__section row">
			<div class="col-md-12">
				<div class="filmmakers__additional__container filmmakers__additional">
					<h2 class='filmmakers__heading'>Additional Crew</h2>
					<p class='filmmakers__additional'>Andrew Crawford - <span class='filmmakers__additional filmmakers__additional--title'>Assistant Director</span></p>
					<h4 class='filmmakers__additional'>Geneieve Lamb - <span class='filmmakers__additional--title'>Makeup Artist</span></h4>
					<h4 class='filmmakers__additional'>Rachel Weir - <span class='filmmakers__additional--title'>Costume Designer</span></h4>
				</div>
			</div>
		</section>
	</div>
</div>