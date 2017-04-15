<?php

function lottoSave() {
//var_dump($_POST);
    $lottoArr = array();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['num1']) && is_numeric($_POST['num1']) && $_POST['num1'] <= 49 && $_POST['num1'] > 0) {

            $lottoArr[] = $_POST['num1'];
        }
        if (isset($_POST['num2']) && is_numeric($_POST['num2']) && $_POST['num2'] <= 49 && $_POST['num2'] > 0 && !in_array($_POST['num2'], $lottoArr)) {

            $lottoArr[] = $_POST['num2'];
        }
        if (isset($_POST['num3']) && is_numeric($_POST['num3']) && $_POST['num3'] <= 49 && $_POST['num3'] > 0 && !in_array($_POST['num3'], $lottoArr)) {
            $lottoArr[] = $_POST['num3'];
        }
        if (isset($_POST['num4']) && is_numeric($_POST['num4']) && $_POST['num4'] <= 49 && $_POST['num4'] > 0 && !in_array($_POST['num4'], $lottoArr)) {
            $lottoArr[] = $_POST['num4'];
        }
        if (isset($_POST['num5']) && is_numeric($_POST['num5']) && $_POST['num5'] <= 49 && $_POST['num5'] > 0 && !in_array($_POST['num5'], $lottoArr)) {
            $lottoArr[] = $_POST['num5'];
        }
        if (isset($_POST['num6']) && is_numeric($_POST['num6']) && $_POST['num6'] <= 49 && $_POST['num6'] > 0 && !in_array($_POST['num6'], $lottoArr)) {
            $lottoArr[] = $_POST['num6'];
        }
        return $lottoArr;
    }

//var_dump($lottoArr);
}

function lottoGen() {
    $lottoRand = [];
    for ($i = 0; $i < 6; $i++) {

        $lottoRand[$i] = rand(1, 49);
    }
    // var_dump($lottoRand);

    return $lottoRand;
}
function lottoCheck($userArr,$randArr){
    
    var_dump($userArr);
    var_dump($randArr);
    
    for ($i = 0; $i < count($userArr); $i++) {
        if(in_array($userArr[$i], $randArr)){
            echo "pokrywają się wartości liczby".$userArr[$i]."<br>";
        }
    } 
    
}

$save=lottoSave();
$rand=lottoGen();
lottoCheck($save,$rand);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Zadanie 2</title>
    </head>
    <body>
        <form name="lotto" method="post">
            <input type="number" name="num1" placeholder="num1">
            <input type="number" name="num2" placeholder="num2">
            <input type="number" name="num3" placeholder="num3">
            <input type="number" name="num4" placeholder="num4">
            <input type="number" name="num5" placeholder="num5">
            <input type="number" name="num6" placeholder="num6">
            <input type="submit" value="submit">
        </form>
        <?php
        ?>
    </body>
</html>
