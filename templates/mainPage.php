<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="../static/css/main.css" type="text/css">
</head>
<body>
    <div class="container">
        <h1 class="title">Let me introduce myself</h1>
        <div class="welcomeMessage">
            <h3>Üdvözöllek {{ messageContent }}!</h3>
            <p>
                Baranyai Virág vagyok. 2020. március 2-ikán kezdtem a Full Stack developer kurzust
                a Codecoolban, előtte közvetlenül Angliában éltem, Bristolban, ahova azért költöztem,
                mert szerettem volna kipróbálni milyen külföldön élni. 1 évig éltem ott és nagyon megérte.
                Korábban Budapesten éltem, pincérnőként és pénzügyi munkatársként dolgoztam egy mégdia vállalatnál.
                Végzettségem szerint természetvédelmi mérnök vagyok, a diplomát a Nyugat-magyarországi Egyetemen
                szereztem. A programozást azért kezdtem el, mert szerettem volna hamar egy olyan kézzel fogható
                szakmát szerezni, ahol meg tudom élni a matematikai, logikus gondolkodás iránti érdeklődésemet.
                Általános információkért látogass el a Public Infos oldalra,
                személyesebb információkat pedig a Private Info oldalon találod.
                A Private Info oldal eléréséhez először be kell jelentkezned, utána válik láthatóvá
                az oldalra vezető gomb formájú link és elérhetővé a route. Az oldalhoz regisztrációs lehetőség nincsen,
                így az sql file futtatása után az insertált userek valamelyikével tudsz bejelentkezni.
                Jelszó szintén az sql file-ban. Remélem tetszeni fog az oldal és a megoldásom is. Virág"
            </p>
        </div>
        <div class="buttonContainer">
            <a class="routeLink" href="/publicInfo">Public Infos</a>
            {{ visibleLinks }}
        </div>
    </div>
</body>
</html>