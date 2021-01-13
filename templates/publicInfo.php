<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Public Page</title>
    <link rel="stylesheet" href="../static/css/public.css" type="text/css">
    <link rel="stylesheet" href="../static/css/main.css" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Publikus információk</h1>
        <div class="welcomeMessage">
            {{ MessageContent }}
        </div>
        <div class="buttonContainer">
            <a class="routeLink" href="/">Home</a>
            {{ visibleLinks }}
        </div>
    </div>
</body>