<?php
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'])) {
        echo 'Cześć, ' . $_POST['name'] . "!" . '<br>';
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
        <title>Zadanie 1</title>
    </head>
    <body>
        <form name="name" method="post">

            <input type="text" name="name" placeholder="name">
            <input type="submit" value="submit">

        </form>
    </body>
</html>
