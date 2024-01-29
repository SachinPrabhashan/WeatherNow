
<!-- resources/views/your-blade-file.blade.php -->

<!DOCTYPE html>
<html lang="en" ng-app="chatApp">
<head>
    <meta charset="UTF-8">
    <title>Chatbot App</title>
    <!-- Include AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body>
    <!-- Your HTML content and form here -->
    <form ng-controller="ChatController">
        <!-- Your existing form fields -->

        <!-- Add AngularJS-specific code -->
        <input type="text" ng-model="userMessage" placeholder="Type your message">
        <button type="button" ng-click="sendMessage()">Send</button>

        <!-- Display the chat response -->
        <div>@{{  chatResponse }}</div>
    </form>
    <!-- Include your AngularJS script -->
    <script src="{{ asset('chatApp.js') }}"></script>
</body>
</html>
