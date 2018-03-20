"use strict";
let temperatureCelsius = 0;
let temperatureFahrenheit = 0;
function convertTemperature() {
  if ($("#conversion").html() === "F") {
    $("#conversion").html("C");
    $(".weather-temperature").html(temperatureCelsius + '°');
  } else {
    $("#conversion").html("F");
    $(".weather-temperature").html(temperatureFahrenheit + '°');
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
        $(".weather-description ").html(response.weather[0].description);
        $(".weather-humidity ").html(response.main.humidity);
        const pressure = response.main.pressure * 0.02953;
        $(".weather-pressure ").html(pressure.toFixed(2));
        if (response.rain){
        $(".weather-rain").html(response.rain['3h']);
        }
        $(".weather-wind").html(Math.trunc(response.wind.speed));
        const windDirection = Math.trunc(response.wind.deg) || 0;
        $(".wind-direction").html(windDirection);

        const degToCard = function(deg){
          if (deg>11.25 && deg<33.75){
            return "NNE";
          }else if (deg>33.75 && deg<56.25){
            return "ENE";
          }else if (deg>56.25 && deg<78.75){
            return "E";
          }else if (deg>78.75 && deg<101.25){
            return "ESE";
          }else if (deg>101.25 && deg<123.75){
            return "ESE";
          }else if (deg>123.75 && deg<146.25){
            return "SE";
          }else if (deg>146.25 && deg<168.75){
            return "SSE";
          }else if (deg>168.75 && deg<191.25){
            return "S";
          }else if (deg>191.25 && deg<213.75){
            return "SSW";
          }else if (deg>213.75 && deg<236.25){
            return "SW";
          }else if (deg>236.25 && deg<258.75){
            return "WSW";
          }else if (deg>258.75 && deg<281.25){
            return "W";
          }else if (deg>281.25 && deg<303.75){
            return "WNW";
          }else if (deg>303.75 && deg<326.25){
            return "NW";
          }else if (deg>326.25 && deg<348.75){
            return "NNW";
          }else{
            return "N";
          }
        }
          const windDirection2 = degToCard(windDirection);
        $(".wind-direction2").html(windDirection2);


        $(".weather-max-temperature").html(response.main.temp_max);
        $(".weather-min-temperature").html(response.main.temp_min);

        temperatureCelsius = Math.round(response.main.temp * 10) / 10;
        temperatureFahrenheit = Math.round(temperatureCelsius * 18 + 320) / 10;
        $(".weather-temperature").text(temperatureCelsius + '°');
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
