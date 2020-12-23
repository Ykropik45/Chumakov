<?php

use chumakov\Kvadratnoe;
use chumakov\Lineynoe;

ini_set("display_errors", 1);
error_reporting(-1);

require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');

require_once('chumakov\Lineynoe.php');
require_once('chumakov\Kvadratnoe.php');

$lineEq = new Lineynoe();
var_dump($lineEq->solveLine(4, 2));

$squareEq = new Kvadratnoe();
var_dump($squareEq->solve(1, 17, -18));
