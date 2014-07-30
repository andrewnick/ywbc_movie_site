<main>
	<section class="home_main content__container background--beige">
		<div class="container">
			
			<!-- Page Title -->
			<div class="row">
				<h1 class="content__title col-md-12" id='map'>Tickets</h1>
			</div>

			<div class="row">
				<h4 class="content__description col-md-8 col-md-offset-2">Find a screening near you!</h4>
			</div>
			

			<section class="row tickets__locate__container">
				<!-- Search Panel -->
				<div class="col-md-4 tickets__search__container">
					<section>
						<!-- Search tool bar -->
						<div class="row">
							<div class="tickets__search col-md-12">
								<form role="form" action="#map" method="post" id="searchPanel">
								    <div class="input-group input-group-lg">
								      <input type="text" name="search" id="searchInput" placeholder="Search" class="form-control tickets__form__input">
								      <span class="input-group-btn">
								        <button class="btn btn-default tickets__map__form__btn" id="searchButton" type="submit" disabled><span class="glyphicon glyphicon-search"></span></button>
								      </span>
								    </div><!-- /input-group -->					  
								</form>
							</div><!-- /.col-lg-6 -->
						</div>
					
						<!-- Search result -->
						<div class="row">
							<article class="col-md-12 tickets__result__border" >
								<div class="tickets__result__background">
									<h4 class="tickets__result__title"> Hoyts Cinema </h4>
									<p class="body_text tickets__result__link"><a class="link_text" href="http://www.hoyts.co.nz/cinemas/locations/hoyts_riccarton.aspx" >Buy Tickets</a></p>
								</div>
							</article>
						</div>

						<div class="row tickets__result__premiere">
							<article class="col-md-12" >
								<div class="tickets__result__background">
									<p class="body_text tickets__result__premiere__notice"> Join us at Hoyts for the premiere of LIFE!</p>	
								</div>
							</article>
						</div>

					</section>
				</div>
				
				<!-- Embedded Google Map -->
				<div class="col-md-8 tickets__map__container">
					<!-- Google Map Frame -->
					<div class="embed-responsive embed-responsive-4by3">
						<?php $searchResultDefault="christchurch+hoyts+riccarton" ?>

						<?php if(isset($_POST['search']) && ($_POST['search'] != "")) :
							$parsedSearchQuery = explode(" ", $_POST['search']);
							$searchResult = implode("+", $parsedSearchQuery);
						?>

							<iframe   class="embed-responsive-item" 
						  		src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBS0N0dpiNp-SYnIaH-8ojcyAws1SxYsTg&q=<?php echo $searchResult;?>">
							</iframe>	

						<?php else :?>

							<iframe   class="embed-responsive-item"
						  		src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBS0N0dpiNp-SYnIaH-8ojcyAws1SxYsTg&q=<?php echo $searchResultDefault;?>">
							</iframe>	

						<?php endif ?>
					</div>
				</div>
			</section>
		</div>	
	</section>
</main>