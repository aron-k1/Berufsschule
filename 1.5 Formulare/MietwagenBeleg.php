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
    <title>Autohaus Nettmann - Kundenbeleg</title>
</head>
<h1>Mietwagen - Kundenbeleg</h1>
<br>
<table class="table">
    <tr>
        <th>Kundennummer</th>
        <th>Zahlungsmethode</th>
        <th>Zusatzausstattung</th>
        <th>Abholort</th>
    </tr>
    <?php
    if (isset($_SESSION) && ['txtKNr'] !== null) {
        echo "<td>", $_SESSION['txtKNr'], "</td>";

    }
    echo "<td>", $_SESSION['zahlmethode'], "</td>";
    echo "<td>";
    foreach ($_SESSION['zusatzausstattung'] as $extras) {
        echo $extras, ", ";
    }
    echo "</td>";
     echo "<td>", $_SESSION['abholort'], "</td>";
    ?>
</table>
<?php
?>
<div class="row">
    <div class="col-6">
        <h2 id="contact">Kontakt:</h2>
        <ul>
            <li>Ottostraße 22, 90762 Fürth</li>
            <li>0911/11...</li>
            <li>info@autohaus-nettmann.de</li>
        </ul>
    </div>
    <div class="col-6">
        <h2 id="bank">Bankdaten:</h2>
        <ul>
            <li>IBAN: DE76 1231 ...</li>
            <li>BIC: 123 ...</li>
            <li>Institut: Superbank</li>
        </ul>
    </div>
</div>