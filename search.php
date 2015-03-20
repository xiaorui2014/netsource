<?php

$con = mysql_connect('localhost','admin','admin');
mysql_query("SET NAMES 'UTF8'");
 if(!$con){

        die('链接数据库失败，错误代码：'.mysql_errno());
    }
mysql_select_db('jichushuju', $con);


            //$searchs=$_GET['q'];
      //$searchs=trim($searchs);
$sql="SELECT * from jizhanbiao where xiaoquming=".$_GET['q'];
$result = mysql_query($sql,$conn);
mysql_close($con);

    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';

    $table="<table>";
    $table.='<td>小区名称</td>';
    $table.='<td>代维公司</td>';
    $table.='<td>基站名称</td>';
    if (mysql_num_rows($result) < 1) echo '没有数据';

    	while($row=mysql_fetch_array($result)){

    		$table.='<tr>';
    		$table.='<td align="center">'.$row['xiaoquming'].'</td>';
    		$table.='<td align="center">'.$row['daiwei'].'</td>';
    		$table.='<td align="center">'.$row['jizhanming'].'</td>';
    		$table.="</tr>";
    	}


    echo $table;
   
    
?>
