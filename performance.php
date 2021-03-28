<?php
declare(strict_types=1);

// http://tanakahisateru.hatenablog.jp/entry/2016/05/25/232422

$size = 1000000;

$repeat = max([1, intval(5000000 / $size)]);
$targetArray = range(1, $size);

$functions = include('performance/array.php');
$max_length = max(array_map(function (string $str): int { return strlen($str); }, array_keys($functions)));
foreach ($functions as $title => $function) {
    $s = microtime(true);
    for ($i=0; $i < $repeat; $i++) {
        $function($targetArray);
    }
    $t = microtime(true) - $s;
    printf("%s: %0.4fms\n", str_pad($title, $max_length), $t * 1000 / $repeat);
}
