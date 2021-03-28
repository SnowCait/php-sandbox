<?php
// http://tanakahisateru.hatenablog.jp/entry/2016/05/25/232422

function plus1($n) {
    return $n + 1;
}

return [
    'array_map + Closure' => function ($targetArray) {
        return array_map(function($n) { return $n + 1; }, $targetArray);
    },
    'array_map + function' => function ($targetArray) {
        return array_map('plus1', $targetArray);
    },
    'foreach with key' => function ($targetArray) {
        $buf = [];
        foreach ($targetArray as $k => $v) {
            $buf[$k] = $v + 1;
        }
        return $buf;
    },
    'foreach without key' => function ($targetArray) {
        $buf = [];
        foreach ($targetArray as $v) {
            $buf[] = $v + 1;
        }
        return $buf;
    },
];
