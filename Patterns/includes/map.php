
<div class="container">
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

	<form role="form" action="" method="post">
		<div class="row">
		  <div class="col-md-8">
		    <div class="input-group input-group-lg">
		      <input type="text" name="search" id="searchInput" placeholder="Search" class="form-control ticket__map__form__input">
		      <span class="input-group-btn">
		        <button class="btn btn-default ticket__map__form__btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
		      </span>
		    </div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</form>
</div>

