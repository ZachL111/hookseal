<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(56, 86, 8, 13, 9);
assert(Policy::score($signal_case_1) === 145);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(63, 101, 8, 6, 8);
assert(Policy::score($signal_case_2) === 217);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(104, 74, 20, 18, 9);
assert(Policy::score($signal_case_3) === 170);
assert(Policy::classify($signal_case_3) === "accept");
