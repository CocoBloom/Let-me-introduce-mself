<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Private Page</title>
    <link rel="stylesheet" href="../static/css/private.css" type="text/css">
</head>
<body>
    <div>
        <div class="container">
            <h1 class="title"> Privát információk</h1>
            <div class="privateMessage">
                {{ messageContent }}
            </div>
            <div class="header">
                <a class="routeLink" href="/">Home</a>
                <a class="routeLink" href="/publicInfo">Public Infos</a>
                {{ visibleLink }}
            </div>

        </div>
    </div>
</body>