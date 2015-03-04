
(function() {
    var weatherDisplay = $('#weather');
    // var weatherHtml = '';
    var forecastHtml = '';

    var currentWeather = $.ajax('http://api.openweathermap.org/data/2.5/weather?q=San+Antonio,TX');

    currentWeather.done(function(data) {
        // console.log(data);

        var currentTemp = '<p>' + parseInt((data.main.temp-273.15) * 1.8 + 32) + '°F</p>';
        var icon = '<img src="http://openweathermap.org/img/w/' + data.weather[0].icon + '.png">';
        var windSpeed = '<p>Wind speed: ' + data.wind.speed + '</p>';
        var humidity = '<p>Humidity:' + data.main.humidity + '</p>';
        var pressure = '<p>Pressure:' + data.main.humidity + '</p>';

        var weatherToDisplay = currentTemp + icon + windSpeed + humidity + pressure;

        $('#weather').html(weatherToDisplay);
    });

        var forecastWeather = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?lat=29.423017&lon=-98.48527&cnt=3&mode=json');
        
        forecastWeather.done(function(data) {
        	// console.log(data);
        	

         $(data.list).each(function(index, element){
        		console.log(element);

            forecastHtml += '<div class="col-md-4"><img src="http://openweathermap.org/img/w/' + element.weather[0].icon + '.png">'
    
            forecastHtml += '<p>Day Temp: ' + parseInt((element.temp.day-273.15) * 1.8 + 32) + '°F</p>';

        	forecastHtml += '<p>Evening Temp: ' + parseInt((element.temp.eve-273.15) * 1.8 + 32) + '°F</p>';

            forecastHtml += '<p>' + element.weather[0].main + ": " + element.weather[0].description + '</p>';

        	forecastHtml += '<p>Humidity: ' + element.humidity + '</p>';

        	forecastHtml += '<p>Pressure: ' + element.pressure + '</p></div>';


        	$('#forecast').html(forecastHtml);


        	});
        	


// Set our map options
    var mapOptions = {
      // Set the zoom level
      zoom: 5,
      // This sets the center of the map at our location
      center: { lat: 37.6014, lng: 120.9572 }
    };

    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    // Add the marker to our existing map
    var marker = new google.maps.Marker({
      position: mapOptions.center,
      draggable: true,
      // animation: google.maps.Animation
      map: map
    });

    // Get lat and long for our marker position
   // google.maps.event.addListener(marker, 'dragend', function (event) 

    

    // // Create a new infoWindow object with content
    // var infowindow = new google.maps.InfoWindow({
    //     content: 'Gaining weight, one rolled taco at a time.'
    // });

    // // Open the window using our map and marker
    // infowindow.open(map,marker);


    });

    

    currentWeather.fail(function() {
    	console.log('500, error connecting to openweathermap API');

    });

    forecastWeather.fail(function() {
    	console.log('Error Connecting to openweathermap forecast API');
    });

    // weatherMap.fail(function() {
    //     console.log('Error connecting to google maps api');
    // });


})();
