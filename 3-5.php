<?php

function angleClock(int $hour,int $minute)
{
    /* 360 градусов проходит минутная стрелка за 60 минут
     *  360/60 = градус за минуту
     *  *$minute = сколько прошла градусов за n кол-во минут
     */
    $angle_minute = 360/60*$minute;


    /* Раз в час - часовая стрелка проходит 30 градусов
     * Раз в минуту - часовая стрелка проходит 0.5 градусов
     * Считаем точное положение часовой стрелки, 30 * на час + 0.5 на минуты
     */
    $angle_hour = 30 * $hour + 0.5 * $minute;

    // считаем разницу
    $angle = abs($angle_hour - $angle_minute);

    // Возвращаем минимальный угол
    if($angle > 180){
        $min_agle = min($angle,360-$angle);
        return round($min_agle,3);
    }
    else{
        return round($angle,3);
    }

}

$result = angleClock($_POST['hour'],$_POST['minute']);
print_r($result."\n");

