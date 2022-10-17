<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Autohaus Nettmann</title>
</head>
<header>
    <script src="js/main.js"></script>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nettmann</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                    aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#zutritt" id="zutritt_nav"
                           onclick="changeCurrentActiveNav('zutritt_nav')">Zutrittsversuche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" id="contact_nav"
                           onclick="changeCurrentActiveNav('contact_nav')">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bank" id="bank_nav" onclick="changeCurrentActiveNav('bank_nav')">Bankdaten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form" id="form_nav"
                           onclick="changeCurrentActiveNav('contact_nav')">Mietwagen</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Optionen</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>
                    </li>
                </ul>
                <!--                <form role="search">-->
                <!--                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">-->
                <!--                </form>-->
            </div>
        </div>
    </nav>
</header>

<body>
<script src="js/bootstrap.bundle.min.js"></script>
<!--<div class="bg-image norepeat"-->
<!--     style="background-image: url(img/nettmann.png);-->
<!--            height: 100vh";-->
<!--            :="no-repeat">-->
<img src="img/nettmann.png">
<h1 class="h1" id="zutritt">Zutrittsversuche</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Uhrzeit</th>
        <th>Chip</th>
        <th>Chip Besitzer</th>
        <th>Tür</th>
        <th>Ergebnis</th>
    </tr>
    <tr>
        <td>99</td>
        <td>2022-02-13 17:52:12</td>
        <td>3</td>
        <td>Schmidt</td>
        <td>Eingang Lager</td>
        <td>Zutritt abgelehnt</td>
    </tr>
    <tr>
        <td>100</td>
        <td>2022-02-13 17:52:25</td>
        <td>3</td>
        <td>Schmidt</td>
        <td>Eingang Lager</td>
        <td>Zutritt abgelehnt</td>
    </tr>
    <tr>
        <td>101</td>
        <td>2022-02-14 07:11:20</td>
        <td>1</td>
        <td>Nettmann</td>
        <td>Eingang Büro</td>
        <td>Zutritt gestattet</td>
    </tr>
</table>
<p class="bg-warning">Es ist zu beachten, dass das RFID System sich noch in der Test-Phase befindet!</p>
<hr>
<div class="row">
    <h2 id="contact">Kontakt:</h2>
    <ul>
        <li>Ottostraße 22, 90762 Fürth</li>
        <li>0911/11...</li>
        <li>info@autohaus-nettmann.de</li>
    </ul>
    <h2 id="bank">Bankdaten:</h2>
    <ul>
        <li>IBAN: DE76 1231 ...</li>
        <li>BIC: 123 ...</li>
        <li>Institut: Superbank</li>
    </ul>
</div>
<h2 id="contact">Mietwagen:</h2>
<form action="MietwagenForm.php" method="post">
    <p>Kundennummer:</p>
    <input type="text" name="txtKNr"><br>
    <fieldset>
        <p>Welche Fahrzeugklasse bevorzugen Sie:</p>
        <input type="radio" id="fzgkl_kw" name="zahlmethode" value="Kleinwagen">
        <label for="kw"> Kleinwagen</label><br>
        <input type="radio" id="fzgkl_kk" name="zahlmethode" value="Kompaktklasse">
        <label for="vi"> Kompaktklasse</label><br>
        <input type="radio" id="fzgkl_fw" name="zahlmethode" value="Familienwagen">
        <label for="ae"> Familienwagen</label><br>
        <input type="radio" id="fzgkl_lk" name="zahlmethode" value="Luxusklasse">
        <label for="ae"> Luxusklasse</label><br>
    </fieldset>
    <fieldset>
        <p>Welche Zusatzaussstattung wünschen Sie:</p>
        <input type="checkbox" name="zusatzausstattung[]" value="klimaanlage" id="check1" checked>
        <label for="check1">Klimaanlage</label><br>
        <input type="checkbox" name="zusatzausstattung[]" value="navigator" id="check2">
        <label for="check2">Navigator</label><br>
        <input type="checkbox" name="zusatzausstattung[]" value="standheizung" id="check3">
        <label for="check3">Standheizung</label><br>
    </fieldset>
    <label for="cars">Wo wollen Sie das Auto abholen:</label>
    <select name="cars" id="cars" name="abholort">
        <option value="autohaus_nettmann">Autohaus Nettmann</option>
        <option value="tankstelle">Tankstelle</option>
        <option value="zuhause">Zuhause</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</body>


<footer class="bg-dark text-center text-white">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <p class="text-white d-inline">Aron Kiesel</p>
    </div>
</footer>
</html>
