#不是自己写的，是扒拉到的脚本，可以获取对应方法的原生类，可以自己添加减少
<?php
$classes = get_declared_classes();
foreach ($classes as $class) {
    $methods = get_class_methods($class);
    foreach ($methods as $method) {
        if (in_array($method, array(
            '__destruct',
            '__toString',
            '__wakeup',
            '__call',
            '__callStatic',
            '__get',
            '__set',
            '__isset',
            '__unset',
            '__invoke',
            '__set_state',    //这里修改
        ))) {
            print $class . '::' . $method . "\n";
        }
    }
}
?>
