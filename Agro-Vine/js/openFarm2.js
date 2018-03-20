"use strict";
let temperatureCelsius = 0;
let temperatureFahrenheit = 0;
function convertTemperature() {
  if ($("button").html() === "°F") {
    $("button").html("&degC");
    $("#temp").html(temperatureCelsius);
  } else {
    $("button").html("&degF");
    $("#temp").html(temperatureFahrenheit);
  }
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, error);
  } else {
    alert("Geolocation is not supported by this browser.");
  }

  function showPosition(position) {
    let lat = Math.round(position.coords.latitude * 100) / 100;
    let lon = Math.round(position.coords.longitude * 100) / 100;
    let wurl = `https://fcc-weather-api.glitch.me/api/current?lat=${lat}&lon=${lon}`;
    $.ajax({
      url: wurl,
      dataType: "json",
      success: function(response) {
        $(".weather-icon").attr("src", response.weather[0].icon);
        let locationName = response.name + "," + response.sys.country;
        $(".weather-place").html(locationName);
        $(".weather-description ").html(response.weather[0].description);
        $(".weather-humidity ").html(response.main.humidity);
        $(".weather-pressure ").html(response.main.pressure);
        // $(".weather-rain").html(response.rain['3h']);
        $(".weather-wind").html(response.wind.speed);
        $(".wind-direction").html(response.wind.deg);
        $(".weather-max-temperature").html(response.main.temp_max);
        $(".weather-min-temperature").html(response.main.temp_min);

        temperatureCelsius = Math.round(response.main.temp * 10) / 10;
        temperatureFahrenheit = Math.round(temperatureCelsius * 18 + 320) / 10;
        $(".weather-temperature").text(temperatureCelsius);
        $("#conversion").click(convertTemperature);
      }
    });
  }

  function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
  }
}

$(document).ready(function() {
  let linkBackGroundColor = $("body").css("background-color");
  getLocation();
});
