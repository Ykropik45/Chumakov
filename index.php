<?php

use chumakov\ChumakovException;
use chumakov\MyLog;
use chumakov\Kvadratnoe;

ini_set("display_errors", 1);
error_reporting(-1);

require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');

require_once('chumakov\ChumakovException.php');
require_once('chumakov\MyLog.php');
require_once('chumakov\Lineynoe.php');
require_once('chumakov\Kvadratnoe.php');

try {
    echo "Enter 3 parameters: a, b, c \n\r";

    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . " аргумент: ";
        $values[] = readline();
    }
    $a = $values[0];
    $b = $values[1];
    $c = $values[2];

    MyLog::log("\n\rThe equation is introduced:" . " $a*x^2 + $b*x + $c = 0");

    $kvadratEq = new Kvadratnoe();
    $result =$kvadratEq->solve($a, $b, $c);

    MyLog::log('Equation roots: ' . implode('; ', $result));
} catch (ChumakovException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();
