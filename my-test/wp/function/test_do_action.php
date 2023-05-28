<?php

/**
 * 在 WordPress 中，do_action() 函数用于触发（执行）特定的动作钩子（action hook）。
 *
 * 动作钩子是在特定时刻或特定位置被定义的标记点，允许开发者将自定义代码插入到这些点上，以实现特定的功能或扩展现有功能。
 *
 * do_action() 函数接受两个参数：动作钩子的名称和可选的参数。它会在指定的动作钩子处执行与之相关联的所有回调函数。
 *
 * 下面是使用 do_action() 函数的示例：
 */

// 定义一个动作钩子和回调函数
function my_custom_action_hook() {
    // 执行自定义功能
    echo 'Hello, World!';
}
add_action('my_custom_hook', 'my_custom_action_hook');

// 在适当的位置触发动作钩子
do_action('my_custom_hook');

/*
 * 在上述示例中，我们首先使用 add_action() 函数将回调函数 my_custom_action_hook() 添加到名为 my_custom_hook 的动作钩子上。然后，我们使用 do_action() 函数在适当的位置触发该动作钩子，从而执行与之关联的回调函数。
 *
 * 请确保您的代码在正确的 WordPress 环境中运行，这样才能正确使用 do_action() 函数和其他 WordPress 相关的函数
 */

// PHP Fatal error:  Uncaught Error: Call to undefined function do_action() in .../test_do_action.php:18

/*
 * do_action() 函数是 WordPress 提供的函数，只能在 WordPress 环境中使用。如果您在非 WordPress 的 PHP 脚本中尝试使用 do_action() 函数，会导致报错。
 *
 * do_action() 函数用于在 WordPress 中执行特定的动作钩子，并触发与之相关联的回调函数。它是 WordPress 提供的一种机制，用于实现插件和主题的扩展性。
 *
 * 如果您想在 WordPress 环境中使用 do_action() 函数，您需要确保您的代码运行在 WordPress 的上下文中，即在 WordPress 主题文件（如functions.php）或插件文件中。
 */