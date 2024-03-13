function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: -0.4437248284222241, lng: 100.51274170496265 },
      zoom: 13,
    });
    const input = document.getElementById("pac-input");
  
    const autocomplete = new google.maps.places.Autocomplete(input, {
      fields: ["place_id", "geometry", "name", "formatted_address"],
    });
  
    autocomplete.bindTo("bounds", map);
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
  
    const infowindow = new google.maps.InfoWindow();
    const infowindowContent = document.getElementById("infowindow-content");
  
    infowindow.setContent(infowindowContent);
  
    const geocoder = new google.maps.Geocoder();
    const marker = new google.maps.Marker({ map: map });
  
    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
  
    autocomplete.addListener("place_changed", () => {
      infowindow.close();
  
      const place = autocomplete.getPlace();
  
      if (!place.place_id) {
        return;
      }
      
  
      geocoder.geocode({ placeId: place.place_id })
        .then(({ results }) => {
          map.setZoom(17);
          map.setCenter(results[0].geometry.location);
          marker.setPlace({
            placeId: place.place_id,
            location: results[0].geometry.location,
          });
          marker.setVisible(true);
  
          infowindowContent.children["place-name"].textContent = place.name;
          infowindowContent.children["place-address"].textContent = results[0].formatted_address;
  
          // Display latitude and longitude
          const latitude = results[0].geometry.location.lat().toFixed(6);
          const longitude = results[0].geometry.location.lng().toFixed(6);
          infowindowContent.children["latitude-longitude"].textContent = `Latitude: ${latitude}, Longitude: ${longitude}`;
  
          infowindow.open(map, marker);
        })
        .catch((e) => window.alert("Geocoder failed due to: " + e));
    });
  }
  
  window.initMap = initMap;
  