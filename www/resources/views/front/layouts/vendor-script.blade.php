<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.js')}}"></script>
@if(Session::get('device_type', 'web') == 'web')
    <script src="{{asset('front/js/script.js')}}"></script>
@else
    <script src="{{asset('front/js/script_mobile.js')}}"></script>
@endif

<script>
   /*  
$('#media_view_all1').onClick( function(e) {
    $('.hide_media').fadeToggle();
    $('#media_view_all').hide();
}); */
$(document).ready(function() {
    $('#media_view_all').click(function(e) {  
        $('.hide_media').fadeToggle();
    $('#media_view_all').hide();
    });
});
    // Initialize and add the map
    function initMap() {

        var location0 = {lat: 21.114110, lng: 78.981120};
        var location1 = {lat: 21.114110, lng: 78.981120};
        var location2 = {lat: 23.018440, lng: 72.558670};
        var location3 = {lat: 21.156350, lng: 72.797200};
        var location4 = {lat: 22.26421000000005, lng: 70.82495000000006};
        var location5 = {lat: 19.091090, lng: 72.902340};
        var location6 = {lat: 28.669070, lng: 77.345100};
        var location7 = {lat: 19.099919, lng: 73.006169};
        var location8 = {lat: 22.320150, lng: 73.199100};
        var location9 = {lat: 21.114110, lng: 78.981120};
        var location10 = {lat: 21.114110, lng: 78.981120};
        var location11 = {lat: 22.961670, lng: 72.475800};


        var mapOptions0 = { zoom: 17, center: location0}
        var mapOptions1 = { zoom: 17, center: location1}
        var mapOptions2 = { zoom: 17, center: location2}
        var mapOptions3 = { zoom: 17, center: location3}
        var mapOptions4 = { zoom: 17, center: location4}
        var mapOptions5 = { zoom: 17, center: location5}
        var mapOptions6 = { zoom: 17, center: location6}
        var mapOptions7 = { zoom: 17, center: location7}
        var mapOptions8 = { zoom: 17, center: location8}
        var mapOptions9 = { zoom: 17, center: location9}
        var mapOptions10 = { zoom: 17, center: location10}
        var mapOptions11 = { zoom: 17, center: location11}

        map0 = new google.maps.Map(document.getElementById('map0'), mapOptions0);
        map1 = new google.maps.Map(document.getElementById('map1'), mapOptions1);
        map2 = new google.maps.Map(document.getElementById('map2'), mapOptions2);
        map3 = new google.maps.Map(document.getElementById('map3'), mapOptions3);
        map4 = new google.maps.Map(document.getElementById('map4'), mapOptions4);
        map5 = new google.maps.Map(document.getElementById('map5'), mapOptions5);
        map6 = new google.maps.Map(document.getElementById('map6'), mapOptions6);
        map7 = new google.maps.Map(document.getElementById('map7'), mapOptions7);
        map8 = new google.maps.Map(document.getElementById('map8'), mapOptions8);
        map9 = new google.maps.Map(document.getElementById('map9'), mapOptions9);
        map10 = new google.maps.Map(document.getElementById('map10'), mapOptions10);
        map11 = new google.maps.Map(document.getElementById('map11'), mapOptions11);



        addMarker(location0, map0);
        addMarker(location1, map1);
        addMarker(location2, map2);
        addMarker(location3, map3);
        addMarker(location4, map4);
        addMarker(location5, map5);
        addMarker(location6, map6);
        addMarker(location7, map7);
        addMarker(location8, map8);
        addMarker(location9, map9);
        addMarker(location10, map10);
        addMarker(location11, map11);
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
