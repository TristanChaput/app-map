@extends('layouts/app')

@section('head')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8rc_A20gLTpjkzA8PB90KqPLdpJSmAYA&callback=initMap&libraries=&v=weekly"
        defer></script>
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
        include 'app/Http/Controllers/CompanyController.php' ;
        let map;

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
            var nbMarkers = "{{ CompanyController::getCount() }}";
            var listOfCompanies = "{{ CompanyController::getCompanies() }}"
            listOfCompanies.forEach(element => {
                var marker = new google.maps.Marker({
                    position: {
                        lat: element.latitude,
                        lng: element.longitude
                    }
                    map: map,
                    draggable: false
                });
            });
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
