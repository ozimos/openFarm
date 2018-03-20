function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, error);
  } else {
    alert("Geolocation is not supported by this browser.");
  }

  function showPosition(position) {
    let lat = Math.round(position.coords.latitude * 100) / 100;
    let lon = Math.round(position.coords.longitude * 100) / 100;
  }
  $(function () {

    $('.weather-temperature').openWeather({
      city: 'Toronto, ON', // city name, country / province/ state
      // lat: '10' // defines the latitude
      // lng: '10' // defines the longitude
      key: '43f506f0627e0dd7378b115da694e3d7'
      units: "c" // defines the type of units (c or f).
      lang: 'en',
      descriptionTarget: '.weather-description',
      windSpeedTarget: '.weather-wind-speed',
      minTemperatureTarget: '.weather-min-temperature',
      maxTemperatureTarget: '.weather-max-temperature',
      humidityTarget: '.weather-humidity',
      sunriseTarget: '.weather-sunrise',
      sunsetTarget: '.weather-sunset',
      placeTarget: '.weather-place',
      iconTarget: '.weather-icon',
      customIcons: 'src/img/icons/weather/',
      success: function () {

        //show weather
        $('.weather-wrapper').show();

      },
      error: function (message) {}
    });

  });