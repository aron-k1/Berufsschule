<?php

require('Funktions.inc.php');
session_start();
if (!isset($_SESSION['n1'])) {
    $_SESSION['n1'] = 0;
} elseif (isset($_POST['n1'])) {
    $_SESSION['n1'] = $_POST['n1'];
}
if (!isset($_SESSION['n2'])) {
    $_SESSION['n2'] = 0;
} elseif (isset($_POST['n2'])) {
    $_SESSION['n2'] = $_POST['n2'];
}
compare($_SESSION['n1'], $_SESSION['n2']);
?>
<html>
<head>
</head>
<body>
<h1>Zahl vergleichen und Tauschen</h1>
<form action="" method="post">
    <input type="number" name="n1" value=<?php echo $_SESSION['n1'] ?>>
    <input type="number" name="n2" value=<?php echo $_SESSION['n2'] ?>>
    <input type="submit" name="btnCompare" value="Compare"/>
</form>
</body>
</html>