let map;
let autocompleteService;
let placesService;

document.addEventListener("DOMContentLoaded", () => {
  const input = document.getElementById("searchInput");
  const suggestionsBox = document.getElementById("suggestions");
  const mapElement = document.getElementById("map");

  // Initialize the map
  map = new google.maps.Map(mapElement, {
    center: { lat: 0, lng: 0 },
    zoom: 2,
  });

  autocompleteService = new google.maps.places.AutocompleteService();
  placesService = new google.maps.places.PlacesService(map);

  input.addEventListener("input", () => {
    const query = input.value;
    if (query) {
      autocompleteService.getPlacePredictions(
        { input: query },
        (predictions, status) => {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            suggestionsBox.innerHTML = "";
            predictions.forEach((prediction) => {
              const suggestionDiv = document.createElement("div");
              suggestionDiv.textContent = prediction.description;
              suggestionDiv.classList.add("suggestion");

              suggestionDiv.addEventListener("click", () => {
                input.value = prediction.description;
                suggestionsBox.innerHTML = "";
                showOnMap(prediction.place_id);
              });

              suggestionsBox.appendChild(suggestionDiv);
            });
          }
        }
      );
    } else {
      suggestionsBox.innerHTML = "";
    }
  });

  function showOnMap(placeId) {
    placesService.getDetails({ placeId }, (place, status) => {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        if (place.geometry && place.geometry.location) {
          map.setCenter(place.geometry.location);
          map.setZoom(15);

          new google.maps.Marker({
            map,
            position: place.geometry.location,
          });
        }
      }
    });
  }
});

consol.log(5+6/12)
a 