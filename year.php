<?php
$year = 2022;

$out = explode(' ', `echo -n $year{01..12}`);

var_dump($out);
