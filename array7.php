<?php

$names = ["Andy", "BEtty", "carol"];

$temp = $names[0];

$names[0] = $names[2];

$names[2] = $temp;

var_dump($names);