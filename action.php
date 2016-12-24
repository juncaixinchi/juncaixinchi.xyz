<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?php
echo "我的第一段 PHP 脚本！";

$con = mysql_connect("localhost","root","11345678");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
?>
<?php
phpinfo();
?> 

</body>
</html>