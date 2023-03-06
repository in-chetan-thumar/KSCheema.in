<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
<script>
    // Initialize and add the map
    function initMap() {
        var location1 = {lat: 21.114111, lng: 78.981117};
        var location2 = {lat: 21.114110, lng: 78.981120};
        var location3 = {lat: 21.114111, lng: 78.981117};
        var location4 = {lat: 21.14631, lng: 79.08491};
        var location5 = {lat: 21.114111, lng: 78.981117};
        var location6 = {lat: 21.114110, lng: 78.981120};


        var mapOptions1 = {
            zoom: 17,
            center: location1
        }

        var mapOptions2 = {
            zoom: 17,
            center: location2
        }

        var mapOptions3 = {
            zoom: 17,
            center: location3
        }

        var mapOptions4 = {
            zoom: 17,
            center: location4
        }

        var mapOptions5 = {
            zoom: 17,
            center: location5
        }

        var mapOptions6 = {
            zoom: 17,
            center: location6
        }

        map1 = new google.maps.Map(document.getElementById('map1'), mapOptions1);
        map2 = new google.maps.Map(document.getElementById('map2'), mapOptions2);
        map3 = new google.maps.Map(document.getElementById('map3'), mapOptions3);
        map4 = new google.maps.Map(document.getElementById('map4'), mapOptions4);
        map5 = new google.maps.Map(document.getElementById('map5'), mapOptions5);
        map6 = new google.maps.Map(document.getElementById('map6'), mapOptions6);


        addMarker(location1, map1);
        addMarker(location2, map2);
        addMarker(location3, map3);
        addMarker(location4, map4);
        addMarker(location5, map5);
        addMarker(location6, map6);
    }

    // Adds a marker to the map.
    function addMarker(latlong, map) {
        var marker = new google.maps.Marker({
            position: latlong,
            map: map,
            icon : "{{asset('assets/images/map_pin.png')}}"
        });

        google.maps.event.addListener(marker, 'click', function() {
            map.setZoom(15);
            map.setCenter(marker.getPosition());
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4UMpDFLjWWn8Wr4NntvgWRD0cPMRGLaQ&callback=initMap"></script>
@yield('script')
