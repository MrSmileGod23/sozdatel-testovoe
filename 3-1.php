<?php


function profitability (int $deposit,int $months,int $percent){

    $result = (($deposit*$percent*($months*30))/(365*100));
    return round($result) + $deposit;

}


$result = profitability($_POST['deposit'],$_POST['months'],$_POST['percent']);
print_r($result."\n");

