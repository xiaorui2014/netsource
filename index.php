<?php 
require_once('conn.php'); 
require_once ('../jpgraph/src/jpgraph.php');
require_once ('../jpgraph/src/jpgraph_line.php');
require_once ('../jpgraph/src/jpgraph_bar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>基站数据查询</title>
	<!--<script type="text/javascript">
       function show_root(){
         var root=document.getElementById("file").value;
         myform.root.value=root;

       }

	</script>-->
	<link href="./css/jcsjys.css" rel="stylesheet">


</head>
<body>



<!--<form action="upload.php" method="post" enctype="multipart/form-data">
<label for="file">导入文件：</label>
<input type="file" name="file" id="file" />
//<input type="text" id="root" type="hidden" name="root" />
//<input type="submit" name="submit" onclick="show_root()"/> 
<input type="submit" name="submit" value="上传" />
	
</form>-->
<div id="container">
<div id="header">
	<h1>基站数据查询</h1>

</div>
<div id="menu">
	<h2>menu1</h2>
	<ul>
		<li>menu2</li>
		<li>menu3</li>
		<li>menu4</li>
	</ul>

</div>
<div id="search">
<form method="post" action="index.php" name="search">  
<input name="search" type="text" value="" size="15">   
<input type="submit" value="search">  
</form>
</div>
<div id="content">
<!--带搜索框的数据展示-->

<!--<select name="jzb" id="jzb">
<option value="1">请选择</option>
<option value="2">基站表20150204</option>

<!--<?php
$sql="select * from jizhanbiao";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_assoc($result)){
?>

<option value="<?php echo $row['*'] ?>"><?php echo $row['xiaoquming'] ?></option> //这个值要用php的方法取出来
<?php
}

?>-->
</select>
<!--
<?php

$type=$_GET['jzb'];
    switch ($type) {
    	case '2':
        $sql="SELECT * from jizhanbiao";
        $result = mysql_query($sql);
    
    

    $table="<table>";
    $table.='<td>小区名称</td>';
    $table.='<td>代维公司</td>';
    $table.='<td>基站名称</td>';
    if (mysql_num_rows($result) < 1) echo '没有数据';

    	while($row=mysql_fetch_assoc($result)){

    		$table.='<tr>';
    		$table.='<td align="center">'.$row['xiaoquming'].'</td>';
    		$table.='<td align="center">'.$row['daiwei'].'</td>';
    		$table.='<td align="center">'.$row['jizhanming'].'</td>';
    		$table.="</tr>";
    	}


    echo $table;

    break;
    }


    


?>

-->





<?php
  
    
      $searchs=$_POST['search'];
      $searchs=trim($searchs);
      if(!$searchs){

        echo '搜索框不能为空';
        exit;
      }

    $sql="SELECT * from jizhanbiao where xiaoquming like '%$searchs%'";
    $result = mysql_query($sql,$con);

    
    echo '</br>';
    echo '</br>';
    echo '</br>';

    $table="<table>";
    $table.='<td>小区名称</td>';
    $table.='<td>代维公司</td>';
    $table.='<td>基站名称</td>';
    if (mysql_num_rows($result) < 1) echo '没有数据';

    	while($row=mysql_fetch_assoc($result)){

    		$table.='<tr>';
    		$table.='<td align="center">'.$row['xiaoquming'].'</td>';
    		$table.='<td align="center">'.$row['daiwei'].'</td>';
    		$table.='<td align="center">'.$row['jizhanming'].'</td>';
    		$table.="</tr>";
    	}


    echo $table;
    
?>





</div>






</div>
<div id="footer">copy</div>





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