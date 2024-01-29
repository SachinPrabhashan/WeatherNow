var app = angular.module('weatherApp', []);

app.controller('WeatherController', ['$http', function($http) {
    var vm = this;
    var apiKey = 'd9333bbb6a72562a8c444f227aa4ffd7';
    var apiUrl = 'https://api.openweathermap.org/data/2.5/weather';
    vm.weatherData = {};

    vm.getWeather = function(city) {
        var config = {
            params: {
                q: city,
                appid: apiKey,
                units: 'metric'
            }
        };

        $http.get(apiUrl, config)
            .then(function(response) {
                vm.weatherData = response.data;
            })
            .catch(function(error) {
                console.error('Error fetching weather data:', error);
            });
    };
}]);
