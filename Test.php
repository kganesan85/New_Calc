<?php

require_once 'Calc.php';

$calc = new Calc();

$answer = $calc->evaluate('1 + 3 * 5');
var_dump($answer);
// int(20)

