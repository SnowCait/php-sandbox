<?php
declare(strict_types=1);

// http://tanakahisateru.hatenablog.jp/entry/2016/05/25/232422

function plus1(int $n): int {
    return $n + 1;
}

return [
    'array_map + Closure' => function (array $targetArray): array {
        return array_map(function(int $n): int { return $n + 1; }, $targetArray);
    },
    'array_map + function' => function (array $targetArray): array {
        return array_map('plus1', $targetArray);
    },
    'foreach with key' => function (array $targetArray): array {
        $buf = [];
        foreach ($targetArray as $k => $v) {
            $buf[$k] = $v + 1;
        }
        return $buf;
    },
    'foreach without key' => function (array $targetArray): array {
        $buf = [];
        foreach ($targetArray as $v) {
            $buf[] = $v + 1;
        }
        return $buf;
    },
];
