
<?php
require_once ('conn.php');


$searchs=$_GET['q'];
$searchs=trim($searchs);
$q=$_GET["q"];
$sql="SELECT * from jizhanbiao where xiaoquming like '%$searchs%'";
$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>小区名称</th>
<th>代维公司</th>
<th>基站名称</th>
</tr>";

/*echo "<div id="tabcont" style="display:block;">
<table id="tbContent" class="date date01">
<tbody>
<tr>
<th width="200">排名：影片名</th>
<th>排名变化</th>
<th>
周末票房（万）
<span>环比变化</span>
</th>
<th>累计票房（万）</th>
<th>国家及地区数</th>
<th>上映周数</th>
</tr>
</tbody>
</table>
</div>";*/
   

while($row=mysql_fetch_array($result)){

echo "<tr>";
echo "<td>" . $row['xiaoquming'] . "</td>";
echo "<td>" . $row['daiwei'] . "</td>";
echo "<td>" . $row['jizhanming'] . "</td>";
echo "</tr>";
        }

echo "</table>";

?>
