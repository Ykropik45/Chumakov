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
    $dir = 'log\\';
    if (!file_exists($dir)) {
        mkdir($dir, 0700);
    }

    $file_handle = fopen("version", "r");
    MyLog::log("Version program: " . fgets($file_handle));
    fclose($file_handle);

    echo "Enter 3 parameters: a, b, c \n\r";

    $a = (float)readline();
    $b = (float)readline();
    $c = (float)readline();

    MyLog::log("The equation is introduced:" . " $a*x^2 + $b*x + $c = 0");

    $kvadratEq = new Kvadratnoe();
    $result =$kvadratEq->solve($a, $b, $c);

    MyLog::log('Equation roots: ' . implode('; ', $result));
} catch (ChumakovException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();
