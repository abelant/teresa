<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://kit.fontawesome.com/6d885703bb.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        position: fixed !important; 
        height: 100% !important;
        width: 100% !important;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini">


        @include('includes.sidebar')

        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div id="map"></div>

                <div id="dialog" border=0>
                        <h1 class="content title mb-5"></h1>

                        <h3 class="content">About</h2>
                        <p class="content about">
                         
                        </p>
                        <h3 class="content">What</h2>
                        <p class="content what">
                            
                        </p>
                        <h3 class="content">How</h2>
                        <p class="content how">
                            
                        </p>

                </div>
               
            </div>


            <!-- ./wrapper -->
        </div>

 

    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.756331,lng: -158.411865},
          zoom: 2.3,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#d59563'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#000000'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
      }
      $(document).ready(function() {
        $('#dialog').dialog({
            autoOpen: false
        });
        $('.ui-dialog-title').remove()
      })
      
      $('.category').click(function() {
        var country = $(this).data('country');
        var about = $(this).data('about');
        var what = $(this).data('what');
        var how = $(this).data('how');

        console.log(country);
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': country}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var newLatLng = new google.maps.LatLng( results[0].geometry.location.lat(), results[0].geometry.location.lng() - 50)
                results[0].geometry.viewport.ka.g += 3; 
                results[0].geometry.viewport.ka.h += 3; 
                map.fitBounds(results[0].geometry.viewport);
            }
        });
        var isOpen = $( "#dialog" ).dialog( "isOpen" );
        if(isOpen) {
            $('#dialog').dialog('close');
        }
            $('.title').html(country);
            $('.about').html(about);
            $('.what').html(what);
            $('.how').html(how);
            $('#dialog').dialog('open');
       
      });
    </script>
    
   

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhftpWqkNWN0DoXB95StMFofnsaD4AEA0&callback=initMap"
    async defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script></script>
    <style>  
        .ui-dialog{
            height:85% !important;
            width:30% !important;
            background:#343a40;  
            color: #fff !important;
            opacity: 0.8;
            margin-left:65% !important;
        }
        .ui-widget-header,.ui-state-default, ui-button{  
            background:#343a40;  
            border: 0px solid #b9cd6d !important;      
            color: #FFFFFF;  
            font-weight: bold; 
         } 
         .content{
             color:white !important;
         }
      </style>  
</html>
