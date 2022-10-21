<?php
session_start();
if (!isset($_SESSION['ans'])) {
    $_SESSION['ans'] = 0;
}
if (!isset($_SESSION['num1'])) {
    $_SESSION['num1'] = 0;
}
if (!isset($_SESSION['num2'])) {
    $_SESSION['num2'] = 0;
}
if (!isset($_SESSION['lastAns'])) {
    $_SESSION['lastAns'] = [];
}

?>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taschenrechner</title>
</head>
<body>
<h1>Taschenrechner</h1><br/>
<form action="" method="post">
    Erster Wert:<input name="n1" <?php echo "value='", $_SESSION['num1'], "'" ?>'"><br>
    <br/>
    Zweiter Wert:<input name="n2" <?php echo "value='", $_SESSION['num2'], "'" ?>'"><br>
    <br/>
    <input type="submit" name="sub" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="sub" value="x">
    <input type="submit" name="sub" value="/"><br>
    <button name="clear">Clear</button>
</form>

<?php
if (isset($_POST['sub'])) {
    $_SESSION['n1'] = $_POST['n1'];
    $_SESSION['n2'] = $_POST['n2'];
    $oprnd = $_POST['sub'];
    if ($oprnd == "+") {
        $_SESSION['ans'] = $_SESSION['n1'] + $_SESSION['n2'];
    } else if ($oprnd == "-")
        $_SESSION['ans'] = $_SESSION['n1'] - $_SESSION['n2'];
    else if ($oprnd == "x")
        $_SESSION['ans'] = $_SESSION['n1'] * $_SESSION['n2'];
    else if ($oprnd == "/")
        if (!$_SESSION['n2'] == '0') {
            $_SESSION['ans'] = $_SESSION['n1'] / $_SESSION['n2'];
        } else {
            echo "<h2> Durch null wird nicht geteil!</h2>";
            $_SESSION['ans'] = null;
        }
}
if (isset($_POST['mr'])) {
    $_SESSION['mr'] = $_SESSION['ans'];
}
if (isset($_POST['m+'])) {
    $_SESSION['m+'] = $_SESSION['ans'];
}

//        $ans=$num1+$num2;
//    else if($oprnd=="-")
//        $ans=$num1-$num2;
//    else if($oprnd=="x")
//        $ans=$num1*$num2;
//    else if($oprnd=="/")
//        $ans=$num1/$num2;

?>
<br>Result: <input type='text' disabled="true" value="<?php echo $_SESSION['ans'] ?>"><br>
</body>
</html>