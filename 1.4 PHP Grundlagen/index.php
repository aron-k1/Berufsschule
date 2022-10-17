<table border="1">
<?php
    for ($x=1; $x <= 100; $x++){
        if($x%10 ==1) {
            echo "<tr>";
        }
        if(primeCheck($x)){
            echo "<td style='background-color: yellow' '>" . $x . "</td>" ;
        } else {
            echo "<td>" . $x . "</td>" ;
        }
    }
function primeCheck($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
?>
</table>
