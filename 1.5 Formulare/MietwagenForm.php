<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autohaus Nettmann - Kundenbeleg</title>
</head>
<?php
$_SESSION["txtKNr"] = $_POST['txtKNr'];
$_SESSION["zahlmethode"] = $_POST['zahlmethode'];
$_SESSION["zusatzausstattung"] = $_POST['zusatzausstattung'];
$_SESSION["abholort"] = $_POST['abholort'];
?>
<form action="MietwagenBeleg.php" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw">

        <button type="submit">Login</button>
    </div>

</form>