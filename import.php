<?php 
header("Content-Type:text/html;charset=utf-8"); 
//header("Content-Type:application/vnd.ms-excel;charset=UTF-8")
require_once 'plug/phpexcelreader/excel/reader.php'; 
 
session_start();
//require_once 'plug/phpexcelreader/excel/oleread.inc';

set_time_limit(20000); 
ini_set("memory_limit","2000M"); 
//使用pdo连接数据库 
$dsn = "mysql:host=localhost;dbname=jichushuju"; 
$user = "root"; 
$password = "root"; 
try{
$dbh = new PDO($dsn,'root','root'); 
$dbh->query('set names GBK'); 
}catch(PDOException $e){ 
echo "连接失败".$e->getMessage(); 
} 

//创建数据库
/*if (mysql_query("CREATE DATABASE jizhanbiao",$dbh))
{
echo "数据库已创建";

}
else
{
	echo "创建失败"
}

mysql_select_db(jizhanbiao);
$sql="CREATE TABLE 20150204(xiaoquming varchar(15),daiweigongsi varchar(15),jizhanming varchar(15))";
mysql_query($sql,$dbh);
mysql_close($dbh)*/


//pdo绑定参数操作 
$stmt = $dbh->prepare("INSERT INTO jizhanbiao(xiaoquming,daiweigongsi,jizhanming) values (:xiaoquming,:daiweigongsi,:jizhanming)"); 
$stmt->bindParam(":xiaoquming", $xiaoquming,PDO::PARAM_STR);
$stmt->bindParam(":daiweigongsi", $daiweigongsi,PDO::PARAM_STR);
$stmt->bindParam(":jizhanming", $jizhanming,PDO::PARAM_STR); 
//使用php-excel-reader读取excel内容 
$data = new Spreadsheet_Excel_Reader(); 
$data->setOutputEncoding('utf-8'); 
$data->read($_SESSION['filepath']); 
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) { 
for ($j = 1; $j <= 3; $j++) { 
$xiaoquming = $data->sheets[0]['cells'][$i][1]; 
$daiweigongsi = $data->sheets[0]['cells'][$i][2]; 
$jizhanming = $data->sheets[0]['cells'][$i][3]; 
} 
//将获取的excel内容插入到数据库 
$stmt->execute(); 
} 
echo "执行成功"; 
echo "最后插入的ID：".$dbh->lastInsertId(); 
?> 
