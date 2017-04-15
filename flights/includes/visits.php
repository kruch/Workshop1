<?php

if(!isset($_COOKIE['visits'])){
    setcookie('visits', 1, time()+strtotime('1year'));
    
    echo "Witaj pierwszy raz na naszej stronie!<br>";
}else{
    $nr=$_COOKIE['visits'];
    $nr++;
    echo "Witaj, odwiedziłeś nas już $nr";
    setcookie('visits', $nr, time()+strtotime('1year'));
}

