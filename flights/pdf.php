<?php
require_once './vendor/autoload.php';
require_once './vendor/fzaninotto/faker/src/autoload.php';
require_once './vendor/kwn/number-to-words/src/NumberToWords.php';


use NumberToWords\NumberToWords;

include './includes/airports.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticketArr = [];
    if (isset($_POST['departure']) && (isset($_POST['arrival']))) {
        if ($_POST['departure'] !== $_POST['arrival']) {
            //echo "good<br>";
            $ticketArr['departure'] = $airports[$_POST['departure']]['name'];
            $ticketArr['codeDep'] = $airports[$_POST['departure']]['code'];
            $ticketArr['departureTZ'] = $airports[$_POST['departure']]['timezone'];
            $ticketArr['arrival'] = $airports[$_POST['arrival']]['name'];
            $ticketArr['codeArr'] = $airports[$_POST['arrival']]['code'];
            $ticketArr['arrivalTZ'] = $airports[$_POST['arrival']]['timezone'];
        } else {
            echo "departure=arrival<br>";
        }
    }
    if (isset($_POST['startTime']) && isset($_POST['lenght'])) {
        $ticketArr['flight-time'] = $_POST['startTime'];
        $ticketArr['flight-time'] = str_replace('T', ' ', $ticketArr['flight-time']);
        $ticketArr['lenght'] = $_POST['lenght'];

        //$ticketArr[]=$_POST[''];
    }
    if (isset($_POST['price']) && $_POST['price'] > 0) {
        $ticketArr['price'] = $_POST['price'];
    }

    $timezone_departure = new DateTimeZone($ticketArr['departureTZ']);
    $timezone_arrival = new datetimezone($ticketArr['arrivalTZ']);

    $date_Dep = new DateTime($ticketArr['flight-time']);
    $date_Dep->setTimezone($timezone_departure);
    $date_Dep->format('DD.MM.RRRR GG:MM:SS');
    $date_Arr = $date_Dep->modify('+' . $ticketArr['lenght'] . ' hours');
    $date_Arr->setTimezone($timezone_arrival);
    var_dump($ticketArr);
    var_dump($date_Arr);
    $faker = Faker\Factory::create();
    $numberToWords = new NumberToWords();
    $currencyTransformer = $numberToWords->getCurrencyTransformer('pl');
   // echo $currencyTransformer->toWords($ticketArr['price'], 'PLN');
  
    $mpdf = new mPDF();
    $mpdf->WriteHTML('asdasd');
    $mpdf->Output();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PDF</title>
        <style>
            table, th, td {
    border: 1px solid black;
}
            </style>
    </head>
    <body>
        <table>
            <td>Imię i nazwisko:</td>><td>
                <?php
                echo $faker->name;
                ?>
            </td>
        </table>
        <table>
            <tr>
                <th>Lotnisko wylotu</th>
                <th>Kod lotniska odlotu</th>
                <th>Lotnisko przylotu</th>
                <th>Kod lotniska przylotu</th>
                <th>Czas lotu</th>
                <th>Cena lotu</th>
            </tr>
            <tr>
                <td><?php echo $ticketArr['departure'] . "<br> " . $ticketArr['flight-time'] ?></td>
                <td><?php echo $ticketArr['codeDep'] ?></td>
                <td><?php echo $ticketArr['arrival'] ?></td>
                <td><?php echo $ticketArr['codeArr'] ?></td>
                <td><?php echo $ticketArr['lenght'] ?></td>
                <td><?php echo $ticketArr['price']."<br>". $currencyTransformer->toWords($ticketArr['price'], 'PLN'); ?></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php

?>