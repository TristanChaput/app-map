@extends('layouts/app')

@section('head')
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8rc_A20gLTpjkzA8PB90KqPLdpJSmAYA&callback=initMap"></script>
    <style type="text/css">
        #map {
            height: 100%;
        }

        html,
        body {
            height: 90%;
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 2rem;
        }

    </style>
    <script>
        var map;
        var clickedInfoWindow = [];
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 50.6070,
                    lng: 3.151654
                },
                zoom: 16,
            });
            generateMarkers();
        }

        function generateMarkers(){
            var listOfCompanies = {!! json_encode($companies, JSON_HEX_TAG) !!};
            console.log(listOfCompanies);
            listOfCompanies.forEach(
                element => {
                    var companyName = '<h3><a href="/company/'+element['id']+'">'+ element['name'] +'</a></h3>';
                    var marker = new google.maps.Marker({
                        position: {
                            lat: parseFloat(element['latitude']),
                            lng: parseFloat(element['longitude'])
                        },
                        map,
                        draggable: false
                    });

                    const infoWindow = new google.maps.InfoWindow({
                        content: companyName,
                    });

                    marker.addListener('click', () => {
                        closePreviousInfoWindow();
                        infoWindow.open(marker.get('map'), marker);
                        clickedInfoWindow[0] = infoWindow;
                    });

                }
            );
        }

        function closePreviousInfoWindow(){
            if(clickedInfoWindow.length > 0){
                clickedInfoWindow[0].set("market", null);
                clickedInfoWindow[0].close();
                clickedInfoWindow[0].length = 0;
            }
        }

    </script>
@endsection

@section('content')

    <h1 style="text-align: center"> Welcome to {{ config('app.name') }}</h1>

    <div style="margin: 1rem">
        <a href="/company">Company</a>
        <a href="/employee">Employee</a>
    </div>

    <div id="map"></div>

@endsection
