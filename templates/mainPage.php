<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="../static/css/main.css" type="text/css">
</head>
<body>
    <div class="container">
        <h1 class="title">Virág's introduction to Prioris</h1>
        <div class="welcomeMessage">
            {{ messageContent }}
        </div>
        <div class="buttonContainer">
            <a class="routeLink" href="/publicInfo">Public Infos</a>
            {{ visibleLinks }}
        </div>
    </div>
</body>
</html>