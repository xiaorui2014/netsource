<?php

$dbhost="localhost";
$dbuser="admin";
$dbpassword="admin";
$dbname="jichushuju";
$dbcharset="UTF8";

$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_query("SET NAMES $dbcharset");
mysql_select_db($dbname,$conn) or die('链接数据库失败，错误代码：'.mysql_errno());


?>