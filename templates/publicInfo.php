<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Public Page</title>
    <link rel="stylesheet" href="../static/css/public.css" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Publikus információk</h1>
        <div class="publicMessage">
            {{ messageContent }}
        </div>
        <div class="publicContainer">
            <a class="routeLink" href="/">Home</a>
            {{ visibleLink }}
        </div>
    </div>
</body>










