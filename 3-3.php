<?php

function calculate(int $one,int $two,$operation)
{
    try {
        if ($_POST['operation'] == '/' and $_POST['two'] == 0) {
            throw new Exception('На ноль делить нельзя');
        }
        switch ($operation) {
            case '+': $result = $one + $two; break;
            case '-': $result = $one - $two; break;
            case '*': $result = $one * $two; break;
            case '/': $result = $one / $two; break;
        }
    }
    catch (Exception $e) {
        return $e->getMessage();
    }

return $result;

}

$result = calculate($_POST['one'],$_POST['two'],$_POST['operation']);
print_r($result."\n");
