<!-- ZD1-->
<?
$name = "Maksym!";
echo "name";
?> 

<!-- ZD2 -->
<?
$a = 5;
$b = 10;
echo "a" + "b";
?>

<!-- ZD3 -->
<?php
$a = 5;
$b = 10;
[$a, $b] = [$b, $a];

echo "a: $a, b: $b"; 
?>

<!-- ZD4 -->
<?
$dl = 4000;
$sz = 2000;
echo "dl" * "sz";
?>

<!-- ZD5 -->
<?
$a = 5;
$g = 89;
$e = 21;
echo ("a" + "g" + "e")/3;
?>

<!-- ZD6 -->
<?
$price = 240000000000;
echo "prise" - 23%;
?>

<!-- ZD7 -->
<?
$u = 85;
var_dump($zmienna);
?> 

<!-- ZD8 -->
<?
$t = 15;
$r = 4.8;
$yu = "ugaga";
echo "t", "r", "yu";
?>

<!-- ZD9 -->
<?
$im = "Jan";
$naz = "Kowalski";
$dO = $im . " " . $naz;
echo $dO;
?> 

<!-- ZD10 -->
<?php
$l1 = 10;
$l2 = 3;
$re = $l1 % $l2;
echo "Reszta z dzielenia $l1 przez $l2 wynosi: " . $re;
?>

<!-- Instrukcje Warunkowe -->
<!-- ZD1 -->
<?php
$l = 10;

if ($l > 0) {
    echo $l . " jest liczbą dodatnią.";
} elseif ($l < 0) {
    echo $l . " jest liczbą ujemną.";
} else {
    echo "Liczba to zero.";
}
?>

<!-- ZD2 -->
<?php
$li1 = 10;
if ($li1 % 2 == 0) {
    echo "Liczba $li1 jest parzysta.";
} else {
    echo "Liczba $li1 jest nieparzysta.";
}
?>

<!-- ZD3 -->
<?php
$an = 15;
$bn = 27;
echo "Liczba 1: $an <br>";
echo "Liczba 2: $bn <br>";
if ($an > $bn) {
    echo "Większa liczba to a: " . $an;
} elseif ($bn > $an) {
    echo "Większa liczba to b: " . $bn;
} else {
    echo "Liczby są równe.";
}
?>

<!-- ZD4 -->
<?php

$wk = 24;

if ($wk >= 18) {
    echo "Jesteś pełnoletni.";
} else {
    echo "Nie jesteś jeszcze pełnoletni.";
}

?>

<!-- ZD5 -->
<?php
$pu = 85; 
if ($pu < 0 || $pu > 100) {
    echo "Błąd: Punkty muszą być z zakresu 0-100.";
} else {
    if ($pu == 100) {
        $oc = "Celujący";
    } elseif ($pu >= 91) {
        $oc = "Bardzo dobry";
    } elseif ($pu >= 71) {
        $oc = "Dobry";
    } elseif ($pu >= 51) {
        $oc = "Dostateczny";
    } elseif ($pu >= 35) {
        $oc = "Dopuszczający";
    } else {
        $oc = "Niedostateczny";
    }
    echo "Punkty: $pu, Ocena: $oc";
}
?>

<!-- ZD6 -->
<?php
$gr = 2026;
if (($gr % 4 == 0 && $rok % 100 != 0) || ($gr % 400 == 0)) {
    echo "Rok $gr jest przestępny.";
} else {
    echo "Rok $gr nie jest przestępny.";
}
?>

<!-- ZD7 -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prosty Kalkulator PHP</title>
</head>
<body>

    <h2>Kalkulator if/else</h2>
    <form method="post" action="">
        <input type="number" name="num1" step="any" required placeholder="Liczba 1">
        
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        
        <input type="number" name="num2" step="any" required placeholder="Liczba 2">
        <input type="submit" name="submit" value="Oblicz">
    </form>

    <br>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = '';
        if ($operator == "add") {
            $result = $num1 + $num2;
        } 
        elseif ($operator == "sub") {
            $result = $num1 - $num2;
        } 
        elseif ($operator == "mul") {
            $result = $num1 * $num2;
        } 
        elseif ($operator == "div") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Błąd! Dzielenie przez zero.";
            }
        }

        echo "<h3>Wynik: $result</h3>";
    }
    ?>

</body>
</html>

<!-- ZD8 -->
<?
$tek = "";

if (empty($tek)) {
    echo "String jest pusty!";
} else {
    echo "String nie jest pusty.";
}

?>

<!-- ZD9 -->
<?
$licz = 10;
$wyn = ($licz % 2 == 0) ? "Parzysta" : "Nieparzysta";
echo "Liczba $licz jest: " . $wyn; 

?>

<!-- ZD10 -->
<?php
$dN = date('w');
switch ($dN) {
    case 1:
        $dN = "Poniedziałek";
        break;
    case 2:
        $dN = "Wtorek";
        break;
    case 3:
        $dN = "Środa";
        break;
    case 4:
        $dN = "Czwartek";
        break;
    case 5:
        $dN = "Piątek";
        break;
    case 6:
        $dN = "Sobota";
        break;
    case 0:
        $dN = "Niedziela";
        break;
    default:
        $dN = "Nieznany dzień";
        break
}
echo "Dzisiaj jest: " . $dN;
?>



