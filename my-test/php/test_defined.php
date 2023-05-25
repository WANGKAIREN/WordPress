<?php

/**
 * 在 PHP 中，defined() 函数用于检查常量是否已定义。
 *
 * 该函数接受一个参数，即要检查的常量的名称，然后返回一个布尔值。如果指定的常量已经被定义，则返回 true，否则返回 false。
 *
 * 以下是 defined() 函数的使用示例：
*/

if (defined('MY_CONSTANT')) {
    echo 'MY_CONSTANT 已定义';
} else {
    echo 'MY_CONSTANT 未定义';
}

/*
在这个示例中，我们检查名为 MY_CONSTANT 的常量是否已定义。如果该常量已经被定义，则输出 "MY_CONSTANT 已定义"；否则输出 "MY_CONSTANT 未定义"。

defined() 函数通常用于在代码中检查常量的存在与否，以便根据不同的情况执行相应的逻辑。
*/

/**
 * defined() 函数和 define() 函数在 PHP 中用于处理常量，但它们有不同的作用和用法。
 *
 * define(): define() 函数用于定义常量。它接受两个参数，第一个参数是常量的名称，第二个参数是常量的值。常量一旦被定义，其值在整个脚本执行期间是不可改变的。
*/

define('MY_CONSTANT', 'Hello, World!');

/*
在上面的例子中，我们使用 define() 函数定义了一个名为 MY_CONSTANT 的常量，并赋予它字符串值 'Hello, World!'。
*/

/**
 * defined(): defined() 函数用于检查常量是否已定义。它接受一个参数，即要检查的常量的名称，然后返回一个布尔值。如果指定的常量已经被定义，则返回 true，否则返回 false。
 */
if (defined('MY_CONSTANT')) {
    echo 'MY_CONSTANT 已定义';
} else {
    echo 'MY_CONSTANT 未定义';
}

/*
在上面的例子中，我们使用 defined() 函数检查名为 MY_CONSTANT 的常量是否已定义，并根据结果输出相应的信息。

总结：

define() 用于定义常量，一旦定义后，其值无法修改。
defined() 用于检查常量是否已定义，返回布尔值。
需要注意的是，常量的名称通常要使用大写字母，以便与变量区分开来，并表达其常量的特性。
*/