var map;
var service;
var marker;
var searchQuery;
var request;
var initLocation;
var infowindow;

// HTML elements
var searchButton;
var searchInput;

function initializeMaps() {

	initLocation = new google.maps.LatLng(-43.5131315,172.5990772);

	searchButton = $('#searchButton');
	searchInput = $('#searchInput');

	searchButton.on('click', performSearch);

	var mapOptions = {
		center: initLocation,
		zoom: 11
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	infowindow = new google.maps.InfoWindow();
}

function performSearch(){

	var searchQuery = searchInput.val();

	if (searchQuery != ""){
		console.log(searchQuery);

		request = {
			location: initLocation,
		    radius: '5000',
		    query: searchQuery
		};
	
	}

	service = new google.maps.places.PlacesService(map);
	service.textSearch(request, getSearchResultsCallback);

}

// Sets the map on all markers in the array.
function setAllMap(map) {
	//console.log(typeof marker)
	if(marker != undefined) {
	  for (var i = 0; i < marker.length; i++) {
	    marker[i].setMap(map);
	  }
	}
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}

function getSearchResultsCallback (results, status){

	clearMarkers();

	if (status == google.maps.places.PlacesServiceStatus.OK) {

		console.log(results);

	    for (var i = 0; i < results.length; i++) {
	      var place = results[i];
	      createMarker(place);
	    }
	}else{
		console.log("Error");
		console.log(google.maps.places.PlacesServiceStatus);
	}
}

function createMarker (result){

	var location = result.geometry.location;

	marker = new google.maps.Marker({
	 	position: location,
	 	map:map,
	 	title: result.name
	});

	google.maps.event.addListener(marker, 'click', function() {
    	infowindow.setContent(result.name);
    	infowindow.open(map, this);
 	});
}




