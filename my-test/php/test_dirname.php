<?php
/**
 * 获取 指定目录 或 指定文件 的 父级目录路径
 */

define( 'ABSPATH', __DIR__ . '/123' );

echo ABSPATH;

echo "\n";

$directory = dirname(ABSPATH);

echo $directory;