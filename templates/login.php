<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login for Infos</title>
<!--    <link rel="icon" type="image/png" href="/Static/image/logo.png">-->
<!--    <link rel="stylesheet"-->
<!--          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="/Static/css/form.css">-->
    <link rel="stylesheet" href="../static/css/login.css" type="text/css">

</head>
<body>
<div>
    <div class="container">
        <h1 class="title">Login</h1>
        <div class="header">
            <a class="submitButton" href="/">Home</a>
            <a class="submitButton" href="/publicInfo">Public Infos</a>
        </div>
        <div class="loginMessage">
            <p1>Texttttt</p1>
        </div>
        <div class="loginForm">
            <form action="/login" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name=email placeholder="Enter your email...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Password:</label>
                    </div>
                    <div class="col-75">
                        <input type=password id="password" name=password placeholder="Enter your password....">
                    </div>
                </div>
                    <input class="submitButton" type=submit value=Login>
            </form>
        </div>
    </div>
</div>
</body>
</html>