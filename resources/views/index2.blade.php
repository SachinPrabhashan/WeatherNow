<!-- index.html -->
<!DOCTYPE html>
<html lang="en" ng-app="weatherApp">

<head>
    <meta charset="UTF-8">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('main.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Weather Now</title>
</head>
<div>

</div>

<body ng-controller="WeatherController as vm">
    <!-- Your app content here -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="app.js"></script>
    <!-- index.html (continued) -->
    <!-- Add this section inside the body tag -->

    <div class="dev-search">
        <h1>Weather Now </h1>
        <div class="powered">
            <p>Powered by <img src="{{ asset('openweather-logo-3CE20F48B5-seeklogo.com.png') }}" alt="Open Weather Logo"
                    height="30px"></p>
        </div>

        <input class="form-control" type="text" id="cityInput" ng-model="vm.city" placeholder="Which City?">
        <button class="btn btn-success" ng-click="vm.getWeather(vm.city)">Get Weather <i
                class="fa-solid fa-magnifying-glass ms-1" style="color: #ff833b;"></i></button>
    </div>

    <div class="w-result" ng-if="vm.weatherData.name">
        <h2>@{{ vm.weatherData.name }} Weather</h2>
        <p>@{{ vm.weatherData.weather[0].main }} <img class="w-img" ng-src="@{{ 'https://openweathermap.org/img/wn/' + vm.weatherData.weather[0].icon + '.png' }}" alt="No Image" height="50px"></p>
        <p>@{{ vm.weatherData.weather[0].description }}</p>
        <p>Temperature: @{{ vm.weatherData.main.temp }}°C</p>
        <!-- Add more details as needed -->
    </div>

</body>


</html>
