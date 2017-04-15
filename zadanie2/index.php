<?php
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'])) {
      
    }
}
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
    </body>
</html>
