<?php
declare(strict_type=1);

// http://tanakahisateru.hatenablog.jp/entry/2016/05/25/232422

$size = 1000000;

$repeat = max([1, intval(5000000 / $size)]);
$targetArray = range(1, $size);

$functions = include('performance/array.php');
foreach ($functions as $function) {
    $s = microtime(true);
    for ($i=0; $i < $repeat; $i++) {
        $function($targetArray);
    }
    $t = microtime(true) - $s;
    printf("%0.4fms\n", $t * 1000 / $repeat);
}
