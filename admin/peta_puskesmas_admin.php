<?php
$title = "SIG FASILITAS KESEHATAN TANAH DATAR";
include "headeradmin.php";
?>
<section>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info panel-dashboard">
                <div class="panel-heading centered">
                    <h2 class="panel-title"><strong> - Peta Lokasi Puskesmas - </strong></h2>
                </div>
            </div>
        </div>
    </div>

    <div id="googleMap" style="width:100%;height:480px;"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8FQHJHpE0INbS5SHmVHXsLJX-gsXXnv0&callback=myMap"></script>

    <script type="text/javascript">
        function initialize() {

            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(-0.4698171, 100.4427085),
                disableDefaultUI: false
            };

            var mapElement = document.getElementById('googleMap');

            var map = new google.maps.Map(mapElement, mapOptions);

            setMarkers(map, officeLocations);

        }

        var officeLocations = [
            <?php
            $data = file_get_contents('http://localhost/TANAHDATAR/ambildata_puskesmas.php');
            $no = 1;
            if (json_decode($data, true)) {
                $obj = json_decode($data);
                foreach ($obj->results as $item) {
            ?>[<?php echo $item->id_puskesmas ?>, '<?php echo $item->nama_puskesmas ?>', '<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
            <?php
                }
            }
            ?>
        ];

        function setMarkers(map, locations) {
            var globalPin = 'img/marker.png';

            for (var i = 0; i < locations.length; i++) {

                var office = locations[i];
                var myLatLng = new google.maps.LatLng(office[4], office[3]);
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var contentString =
                    '<div id="content">' +
                    '<div id="siteNotice">' +
                    '</div>' +
                    '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
                    '<div id="bodyContent">' +
                    '<a href=detail_puskesmas.php?id_puskesmas=' + office[0] + '>Info Detail</a>' +
                    '</div>' +
                    '</div>';

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: office[1],
                    icon: '../img/puskes.png'
                });

                google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
            }
        }

        function getInfoCallback(map, content) {
            var infowindow = new google.maps.InfoWindow({
                content: content
            });
            return function() {
                infowindow.setContent(content);
                infowindow.open(map, this);
            };
        }

        initialize();
    </script>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php include_once "footeradmin.php"; ?>