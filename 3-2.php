<?php

function viewDate(int $day,int $month)
{
    $months = [
        1 => 'Января',
        2 => 'Февраля',
        3 => 'Марта',
        4 => 'Апреля',
        5 => 'Мая',
        6 => 'Июня',
        7 => 'Июля',
        8 => 'Августа',
        9 => 'Сентября',
        10 => 'Октября',
        11 => 'Ноября',
        12 => 'Декабря',
    ];

    return $day." ".$months[$month];

}

$result = viewDate($_POST['day'],$_POST['month']);
print_r($result."\n");

