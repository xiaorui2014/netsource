<?php    //查询和结果显示文件分离
require_once ('search.php')


echo "<table border='1'>
<tr>
<th>小区名称</th>
<th>代维公司</th>
<th>基站名称</th>
</tr>";
   

while($row=mysql_fetch_array($result)){

echo "<tr>";
echo "<td>" . $row['xiaoquming'] . "</td>";
echo "<td>" . $row['daiwei'] . "</td>";
echo "<td>" . $row['jizhanming'] . "</td>";
echo "</tr>";
    	}

echo "</table>";

?>