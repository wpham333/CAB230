<div id="mapReview">     
    <?php 
    
    include 'pdo.php'; 
    $parkID = $_GET['parkID'];

    $start = ($page > 1) ? ($page * $perPage) - $perPage : 0; 

    $result = $pdo->query("SELECT parkID,parkName, latitude, longitude, street, suburb
        FROM parks
        Where parkID = $parkID
        ");
    $result->execute();

    $location = array(array());

    for($i =0; $i < $perPage; $i++){
      $location[$i][0] ="name";
      $location[$i][1] =1231.00;
      $location[$i][2] =1231;
      $location[$i][3] =1231;
      $location[$i][4] ="street";
      $location[$i][5] ="suburb";
    }

    foreach ($result as $i => $pos) {
      $location[$i][0] = ucfirst(strtolower($pos["parkName"]));
      $location[$i][1] = $pos["latitude"];
      $location[$i][2] = $pos["longitude"]; 
      $location[$i][3] = $pos["parkID"];
      $location[$i][4] =ucfirst(strtolower($pos["street"]));
      $location[$i][5] =ucfirst(strtolower($pos["suburb"])); 
    }


    ?>
  <script type="text/javascript">
              
          var limit = <?php echo json_encode($location); ?>;
      
     // Note: This example requires that you consent to location sharing when
     // prompted by your browser. If you see the error "The Geolocation service
     // failed.", it means you probably did not give permission for the browser to
     // locate you.
     var map, infoWindow;
     var infoWindow2=null;
       var myLatLng = {lat: -25.363, lng: 131.044};
     function initMap() {
       map = new google.maps.Map(document.getElementById('mapReview'), {
         center: {lat: -34.397, lng: 150.644},
          zoom: 10
       });
       infoWindow = new google.maps.InfoWindow;

       // Try HTML5 geolocation.
       if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
           var pos = {
             lat: position.coords.latitude,
             lng: position.coords.longitude
           };

           var youLocation = 'https://mt.googleapis.com/vt/icon/name=icons/onion/22-blue-dot.png';

           var marker = new google.maps.Marker({
            position: pos,
            map: map, 
            title: 'You Location',
            icon: youLocation
           });

           infoWindow.setPosition(pos);
           infoWindow.setContent('You Are Here.');
           infoWindow.open(map);
           map.setCenter(pos);

            var infowindow3 = new google.maps.InfoWindow({
              content: "You Are Here."
            });

  marker.addListener('click', function() {
    infowindow3.open(map, marker);
  });


         }, function() {
           handleLocationError(true, infoWindow, map.getCenter());
         });
       } else {
         // Browser doesn't support Geolocation
         handleLocationError(false, infoWindow, map.getCenter());
       }
        var infowindow2 = new google.maps.InfoWindow({
          content: "holding..."
        });
       //var bounds = new google.maps.LatLngBounds (); 

          for (var i = 0; i < limit.length; i++) {

            var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading"><a href="reviews.php?parkID='+limit[i][3]+'">'+limit[i][0]+'</a></h3>'+
            '<div id="bodyContent">'+
            '<p>'+limit[i][4]+limit[i][5]+'</p>'+
            '</div>';

          var latlnng = {lat: parseFloat(limit[i][1]), lng: parseFloat(limit[i][2])};
          marker = new google.maps.Marker({
            position: latlnng,
            map: map,
            title: limit[i][0],
            html: contentString
          });


        google.maps.event.addListener(marker, 'click', function () {
        // where I have added .html to the marker object.
        infowindow2.setContent(this.html);
        infowindow2.open(map, this);
        });

          //bounds.extend (latlnng);
        }
        //map.fitBounds (bounds); 
     }

     function handleLocationError(browserHasGeolocation, infoWindow, pos) {
       infoWindow.setPosition(pos);
       infoWindow.setContent(browserHasGeolocation ?
                             'Error: The Geolocation service failed.' :
                             'Error: Your browser doesn\'t support geolocation.');
       infoWindow.open(map);
     }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsDXEqu5JEoTdHlO1t_r20K0UruuK1_M8&callback=initMap">
    </script>
</div>

<style>

    #mapReview{
        background-color: white; 
        width: 30%; 
        height: 400px;
        position: absolute; 
        border: 3px solid white;
        box-shadow: 0 0 10px #9ecaed; 
        border-radius: 5px; 
        top: 230px;
        right: 20px;
        margin-left: 5px; 
    }
    
    @media screen and (max-width: 850px){
        #map{
            visibility: hidden; 
        }
        
        #results{
            width: 90%;
        }
    }

</style>