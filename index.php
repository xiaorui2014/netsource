<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>基站数据查询</title>
	<link type="text/css" rel="stylesheet" href="./css/common.css">
	
    <script src="./js/sousuo.js"></script>

</head>
<body id="top">
<div class="container">
<div class="header">
<div class="head mod1024">

<div class="logo">
<a class="text-in" style="width:180px;" title="数据查询" href="/netsource"><h1>基站数据查询</h1></a>
<p class="slogan">便捷查询</p>
</div>

<div class="search fr">
<input id="txtSearch" onchange="showCustomer(this.value)" type="text" size="15" onkeydown="keyDown();" placeholder="请输入小区名或基站名" />
<!--<input type="button" id="btn" value="查找">-->
<span class="text-in" id="btn" onclick="search()">查找</span>
</div>

</div>
</div>

<div class="mod1024">

<!--menu start-->
        <div class="menu fl">
            <ul class="dropdown">
                <li class="selected"><a class="bigMenu">票房</a>
                    <ul class="leftTitleSmall" id="ulBoxOffice">
                        <li><a id="aLeft_Index" href="/movieday">单日票房</a></li>
                        <li><a id="aLeft_WeekInfo" href="/movieweek">单周票房</a></li>
                        
                    </ul>
                </li>
                <li class="selected"><a class="bigMenu">排片</a>
                    <ul class="leftTitleSmall" id="ulPaipian">
                        <li><a id="aLeft_Screen_Country" href="/paipian">单日排片</a></li>
                        <li><a id="aLeft_Screen_Trend" href="/paipiantrend">趋势分析</a></li>
                        
                    </ul>
                </li>
                </div>
        <!--menu end-->

<!--<b>查询结果</b>-->
<div class="mainbox fr">
	<div class="mainbox fr">
		<div class="row aposition">
			<span class="tips">基站信息</span>
			<div id="content" class="tabbox tabbox02">
				<div class="timebar">
					<span>更新日期：</span>
					<select id="selTimeElm" onchange="changeDate(this.value)">
						<option value="003">基站表20150204更新</option>
						<option value="002">基站表20141009更新</option>
						<option value="001">基站表20140703更新</option>
					</select>
				</div>
			


<div class="alldate">
<span>数据来源：优化室</span>
			</div>
		</div>

	</div>

</div>
<p><div id="txtHint"></div></p>

</div>


</div>

<div class=footer><p>Copyright 2014 spl All rights reserved. </p></div>

</body>
</html>