$(document).ready ( function(){

	$('#searchInput').on('click', function(e){
		e.preventDefault();
		
		$('.tickets__result__background').addClass('enable_search');

		$('.tickets__result__premiere').addClass('tickets__result__premiere__disable');

		$('#searchButton').removeAttr("disabled");

	})
});