<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/map.css')}}">
        <title>{{ config('app.name', 'PreprLabsDemo') }}</title>
    </head>

    <body>
        <div id='map'>

        </div>
        <script src='{{asset('js/app.js')}}'></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API_KEY')}}&callback=initMap" async
            defer></script>
    </body>

</html>

<script>
    var map;
    var latitude = '<?php echo $data[0]; ?>';
    var longitude = '<?php echo $data[1]; ?>';
    var address = '<?php echo $data[2]; ?>';
    var lat = parseFloat(latitude)
    var lng = parseFloat(longitude)

    function initMap() {
        var coords = {
            lat: lat,
            lng: lng
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: coords
        });

        var marker = new google.maps.Marker({
            position: coords,
            map: map,
            title: address
        });
        marker.setMap(map);
    }

</script>
