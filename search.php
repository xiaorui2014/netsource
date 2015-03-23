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
   

while($row=mysql_fetch_array($result)){

echo "<tr>";
echo "<td>" . $row['xiaoquming'] . "</td>";
echo "<td>" . $row['daiwei'] . "</td>";
echo "<td>" . $row['jizhanming'] . "</td>";
echo "</tr>";
    	}

echo "</table>";
   
?>
