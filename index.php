
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>基站数据查询</title>
	<link href="./css/jcsjys.css" rel="stylesheet">

<script type="text/javascript">

var xmlHttp

function showCustomer(str)
{ 
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("您的浏览器不支持AJAX！");
  return;
  } 
var url="search.php";
url=url+"?q="+str;
url=url+"&sid="+Math.random();
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function stateChanged()
{ 
if (xmlHttp.readyState==4)
{ 
document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}
</script>

</head>
<body>

<div id="container">
<div id="header">
	<h1>基站数据查询</h1>

</div>
<!--<div id="menu">
	<h2>menu1</h2>
	<ul>
		<li>menu2</li>
		<li>menu3</li>
		<li>menu4</li>
	</ul>

</div>-->
<div id="search">
<form>
<input onchange="showCustomer(this.value)" type="text" size="15" />
<!--<button type="button" onclick="loadXMLDoc()">查询</button>-->

</form>
</div>
<div id="content">
<!--带搜索框的数据展示-->

<h3>查询结果</h3>
<div id="txtHint"></div>

</div>
<div id="footer"></div>
</div>






<!-- 直接查看全部数据，无搜索框，只能显示1000行以下。
<?php
    $link = mysql_connect('localhost','admin','admin');

    mysql_query("SET NAMES 'UTF8'");

    if(!$link){

    	die('链接数据库失败，错误代码：'.mysql_errno());
    }

    mysql_select_db('jichushuju', $link);
    $sql="SELECT xiaoquming,daiwei,jizhanming from jizhanbiao";
    $result = mysql_query($sql,$link);
    $table="<table>";
    $table.='<td>小区名称</td>';
    $table.='<td>代维公司</td>';
    $table.='<td>基站名称</td>';
    if($result&&mysql_num_rows($result)>0){

    	while($row=mysql_fetch_assoc($result)){

    		$table.='<tr>';
    		$table.='<td align="center">'.$row['xiaoquming'].'</td>';
    		$table.='<td align="center">'.$row['daiwei'].'</td>';
    		$table.='<td align="center">'.$row['jizhanming'].'</td>';
    		$table.="</tr>";
    	}
    }

    else {

    	$table.= '<tr><td colspan="3" align="center">没有找到数据</td></tr>';
    }
    $table.='</table>';

    echo $table;



?> -->
 
 <!-- <table>
      <tr>
          <td>小区名称</td>
          <td>代维公司</td>
          <td>基站名称</td>
      </tr>    先把标题写好 
          <?php// while ($row =// mysql_fetch_assoc($result)) ?>
          <tr>
              <td><?php// echo $row["xiaoquming"] ?></td>
              <td><?php// echo $row["daiwei"] ?></td>
              <td><?php// echo $row["jizhanming"] ?></td>
           </tr>
           <?php// endwhile;    //数据操作完，结束循环
      //  mysql_close($link); ?>    
  </table> -->

</body>
</html>