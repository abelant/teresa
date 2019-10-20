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
</head>
<body class="hold-transition sidebar-mini">


        @include('includes.sidebar')

        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div id="map"></div>

                <div id="dialog" border=0>
                        <h1 class=" content title mb-5"></h1>
                        <p class="name content"></p>
                        <p class="date content"></p>
                        <p class="hazard_type content"></p>
                        <p class="trigger content"></p>
                        <p class="fatalities content"></p>
                        <p class="injuries content"></p>
                        <p class="size content"></p>
                        <p class="population content"></p>
                        <p class="dept contenth"></p>
                        <p class="magnitude content"></p>
                        <p class="minimum_distance content"></p>
                        <p class="azimuthal_gap content"></p>
                        <p class="confidence content"></p>
                        <p class="text content"></p>
                        <p class="wattage content"></p>
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
      function titleCase(str) {
          var splitStr = str.toLowerCase().split(' ');
          for (var i = 0; i < splitStr.length; i++) {
              // You do not need to check if i is larger than splitStr length, as your for does that for you
              // Assign it back to the array
              splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
          }
          // Directly return the joined string
          return splitStr.join(' '); 
        }
        $('#dialog').dialog({
            autoOpen: false
        });
        $('.ui-dialog-title').remove()
        var markers = [];
        $('.category').click(function() {
        
            var countries = $(this).data('countries');
        
            for(var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }

            for(var i = 0; i < countries.length; i++) {
                var position = { lat: Number(countries[i].latitude), lng: Number(countries[i].longitude) };
                console.log(position);
                markers[i] = new google.maps.Marker({
                    position: position,
                    map: map,
                    data: countries[i]
                });
                google.maps.event.addDomListener(markers[i], 'click', function() {
                    var marker = this
                    var isOpen = $( "#dialog" ).dialog( "isOpen" );
                    if(isOpen) {
                        $('#dialog').dialog('close');
                    }
                      if(marker.data.name != '') {
                        $('.name').show()
                        $('.name').html('Name: ' + marker.data.name);
                      } else {
                        $('.name').hide()                        
                      }
                      if(marker.data.date != '') {
                        $('.date').show()
                        $('.date').html('Data: ' + marker.data.date);
                      } else {
                        $('.date').hide()                                                
                      }
                      if(marker.data.hazard_type != '') {
                        $('.hazard_type').show()
                        $('.hazard_type').html('Hazard Type: ' + marker.data.hazard_type);
                      } else {
                        $('.hazard_type').hide()                                                
                      }
                      if(marker.data.trigger != '') {
                        $('.trigger').show()
                        $('.trigger').html('Trigger: ' + marker.data.trigger);
                      } else {
                        $('.trigger').hide()                        
                        
                      }
                      if(marker.data.fatalities != '') {
                        $('.fatalities').show()
                        $('.fatalities').html('Fatalities: ' + marker.data.fatalities);
                      } else {
                        $('.fatalities').hide()
                      }
                      if(marker.data.injuries != '') {
                        $('.injuries').show()
                        $('.injuries').html('Injuries: ' + marker.data.injuries);
                      } else {
                        $('.injuries').hide()  
                      }
                      if(marker.data.size != '') {
                        $('.size').show()
                        $('.size').html('Size: ' + marker.data.size);
                      } else {
                        $('.size').hide()    
                      }
                      if(marker.data.population != '') {
                        $('.population').show()
                        $('.population').html('Population:' + marker.data.population)
                      } else {
                        $('.population').hide()   
                      }
                      if(marker.data.depth != '') {
                        $('.depth').show()
                        $('.depth').html('Depth: ' + marker.data.depth);
                      } else {
                        $('.depth').hide()     
                      }
                      if(marker.data.magnitude != '') {
                        $('.magnitude').show()
                        $('.magnitude').html('Magnitude: ' + marker.data.magnitude);
                      } else {
                        $('.magnitude').hide()   
                      }
                      if(marker.data.minimum_distance != '') {
                        $('.minimum_distance').show()
                        $('.minimum_distance').html('Minimum Distance: ' + marker.data.minimum_distance);
                      } else {
                        $('.minimum_distance').hide()  
                      }
                      if(marker.data.azimuthal_gap != '') {
                        $('.azimuthal_gap').show()
                        $('.azimuthal_gap').html('Azimuthal Gap: ' + marker.data.azimuthal_gap);
                      } else {
                        $('.azimuthal_gap').hide()  
                      }
                      if(marker.data.origin_time != '') {
                        $('.origin_time').show()
                        $('.origin_time').html('Origin Time: ' + marker.data.origin_time);
                      } else {
                        $('.origin_time').hide()   
                      }
                      if(marker.data.confidence != '') {
                        $('.confidence').show()
                        $('.confidence').html('Confidence: ' + marker.data.confidence);
                      } else {
                        $('.confidence').hide()  
                      }
                      if(marker.data.text != '') {
                        $('.text').show()
                        $('.text').html('Data: ' + marker.data.text);
                      } else {
                        $('.text').hide()     
                      }
                      if(marker.data.wattage != '') {
                        $('.wattage').show()
                        $('.wattage').html('Wattage: ' + marker.data.wattage);
                      } else {
                        $('.wattage').hide()    
                      }
                    $('#dialog').dialog('open');

                });
            }
        });
      });

      
      
      
    </script>
    
   

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhftpWqkNWN0DoXB95StMFofnsaD4AEA0&callback=initMap"
    async defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
</html>
