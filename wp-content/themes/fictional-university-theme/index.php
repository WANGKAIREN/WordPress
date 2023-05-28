<h1> This is out amazing custom theme. </h1>

<?php

function myFirstFunction($name, $color)
{
    echo "Hello World! $name ~~ $color";
}

myFirstFunction('John', 'blue');

?>

<h1><?php bloginfo('name'); ?></h1>
<h1><?php bloginfo('description'); ?></h1>

<?php
$names = array('name1', 'name2', 'name3');

?>
<p>Hi, my name is <?php echo $names[0]; ?></p>


<?php
$count = 0;
while ($count < count($names)) {
    echo "<li>$count, $names[$count]</li>";
    $count++;
}
?>

<?php
/*while (have_posts()) {
    echo 'haha';
    the_post();
     */?><!--
    <h1> <?php /*the_title() */?> </h1>
    <h2><a href="<?php /*the_permalink(); */?>"><?php /*the_title(); */?></a>=</h2>
    <?php /*the_content() */?>
--><?php /*} */?>

<?php

function my_custom_action_hook() {
    // 执行自定义功能
    echo 'Hello, World!';
}
add_action('my_custom_hook', 'my_custom_action_hook');

// 在适当的位置触发动作钩子
do_action('my_custom_hook');