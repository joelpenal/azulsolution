function initMap() {
          var montreal = {lat:45.550645, lng:-73.690446};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: montreal
          });
          
         // Define the LatLng coordinates for the polygon's path.
        var triangleCoords = [
          {lat: 45.426414, lng: -73.976855},
          {lat: 45.558212, lng: -73.883512},
          {lat: 45.678783, lng: -73.727506},
          {lat: 45.702721, lng: -73.477095},
          {lat: 45.647031, lng: -73.485832},
          {lat: 45.601625, lng: -73.509307},
          {lat: 45.467048, lng: -73.532185},
          {lat: 45.415867, lng: -73.611273},
          {lat: 45.439386, lng: -73.785707},
          {lat: 45.402313, lng: -73.949929},         
          {lat: 45.426414, lng: -73.976855}
        ];
        
        // Construct the polygon.
        var bermudaTriangle = new google.maps.Polygon({
          paths: triangleCoords,
          strokeColor: '#4099F0',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#4099F0',
          fillOpacity: 0.35
        });
        bermudaTriangle.setMap(map);


          //var marker = new google.maps.Marker({
          //  position: montreal,
          //  map: map
          //});
        }

        