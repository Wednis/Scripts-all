//处理fastcoll生成的两个文件
<?php 
function readmyfile($path){
  $fh = fopen($path, "rb");
  $data = fread($fh, filesize($path));
  fclose($fh);
  return $data;
}
$a = urlencode(readmyfile("E:/a_msg1.txt"));
$b = urlencode(readmyfile("E:/a_msg2.txt"));
if(md5((string)urldecode($a))===md5((string)urldecode($b))){
echo $a;
}
if(urldecode($a)!=urldecode($b)){
echo $b;
}
