<main>
	<div class="home_main background--beige">
		<div class="container">
			
			<!-- Page Title -->
			<div class="row">
				<h1 class="content__title col-md-12">Tickets</h1>
			</div>

			<div class="row">
				<h4 class="content__description col-md-8 col-md-offset-2">Find a screening near you!</h4>
			</div>
			
			<!-- Search Bar -->
			<div class="row">
				<div class="tickets__search col-md-6 col-md-offset-3">
					<form role="form" action="" method="post">
					    <div class="input-group input-group-lg">
					      <input type="text" name="search" id="searchInput" placeholder="Search" class="form-control">
					      <span class="input-group-btn">
					        <button class="btn btn-default map__form__btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
					      </span>
					    </div><!-- /input-group -->					  
					</form>
				</div><!-- /.col-lg-6 -->
			</div>

			<!-- Google Map Frame -->
			<div class="row">
				<div class="embed-responsive embed-responsive-16by9">
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
		</div>	
	</div>
</main>