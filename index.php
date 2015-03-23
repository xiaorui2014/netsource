<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>基站数据查询</title>
	<!--<link href="./css/jcsjys.css" rel="stylesheet">-->

<script src="xianshi.js"></script>

</head>
<body>

<h1>基站数据查询</h1>

<form name="chaxun">
<input onchange="showCustomer(this.value)" type="text" size="15" onkeydown="keyDown();" />
<input type="button" id="btn" value="查找">

</form>

</br></br>
<b>查询结果</b>
<p><div id="txtHint"></div></p>

</body>
</html>