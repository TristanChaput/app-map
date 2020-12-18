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
                zoom: 15,
            });
            generateMarkers();
        }

        function generateMarkers(){
            var listOfCompanies = {!! json_encode($companies, JSON_HEX_TAG) !!};
            console.log(listOfCompanies);
            listOfCompanies.forEach(
                element => {
                    
                    var marker = new google.maps.Marker({
                        position: {
                            lat: parseFloat(element['latitude']),
                            lng: parseFloat(element['longitude'])
                        },
                        map,
                        draggable: false
                    });

                    const infoWindow = new google.maps.InfoWindow({
                        content: "",
                    });

                    marker.addListener('click', () => {
                        var contentInfoWindow = '<h3><a href="api/company/'+element['id']+'">'+ element['name'] +'</a></h3>';
                        var url = {!! json_encode(config('app.url'), JSON_HEX_TAG) !!}+"/api/"+element['id'];
                        fetch(url).then(
                            response => {
                                return response.ok ? response.json() : '';
                            }).then(
                                data => {
                                    contentInfoWindow += '<ul>';
                                    data.forEach(
                                        employee => {
                                            contentInfoWindow += '<li><a href="api/employee/'+employee['id']+'">'+ employee['last_name'] +'<a></li>';
                                        }
                                    )   
                                    contentInfoWindow += '</ul>';
                                    closePreviousInfoWindow();
                                    infoWindow.setContent(contentInfoWindow);
                                    infoWindow.open(marker.get('map'), marker);
                                    clickedInfoWindow[0] = infoWindow;
                                } 
                            ).catch(function(error) {
                                console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
                            }
                        );                        
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

    <div id="map"></div>

@endsection
