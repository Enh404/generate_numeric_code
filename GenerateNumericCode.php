<?php

$withoutControlDigit = rand(9889880000000, 9889889999999);
echo 'Генерируем набор цифр без конрольного числа: ' . $withoutControlDigit . 'X' . PHP_EOL;

$digits = array_reverse(str_split((string)$withoutControlDigit));
$sumEven = 0;
$sumOdd = 0;
foreach ($digits as $key => $item) {
    if (($key + 1) % 2 == 0) {
        $sumEven += (int)$item;
    } else {
        $sumOdd += (int)$item;
    }
}
echo 'Сумма цифр, стоящих на четных местах: ' . $sumEven . PHP_EOL;
echo 'Сумма цифр, стоящих на нечетных местах: ' . $sumOdd . PHP_EOL;

$evenPlusTripleOdd = $sumEven + $sumOdd * 3;
echo 'Сумма цифр, стоящих на четных местах с утроенной суммой цифр на нечетных местах: ' . $evenPlusTripleOdd . PHP_EOL;

$evenPlusTripleOddAsArray = str_split((string)$evenPlusTripleOdd);
$lastDigit = end($evenPlusTripleOddAsArray);
echo 'Цифра единиц полученного результата: ' . $lastDigit . PHP_EOL;

$controlDigit = $lastDigit == 0 ? 0 : 10 - $lastDigit;
echo 'Контрольная цифра: ' . $controlDigit . PHP_EOL;

$withControlDigit = $withoutControlDigit . $controlDigit;
echo 'Итоговый код: ' . $withControlDigit;
