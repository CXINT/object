<?php
session_start();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>聚美优品后台管理系统---左侧边栏</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../images/left.gif);
}
</style>

</head>
<script language=Javascript>
function tupian(idt){
    var nametu="xiaotu"+idt;
    var tp = document.getElementById(nametu);
    tp.src="../images/ico05.gif";//图片ico04为白色的正方形
	
	for(var i=1;i<30;i++)
	{
	  
	  var nametu2="xiaotu"+i;
	  if(i!=idt*1)
	  {
	    var tp2=document.getElementById('xiaotu'+i);
		if(tp2!=undefined)
	    {tp2.src="../images/ico06.gif";}//图片ico06为蓝色的正方形
	  }
	}
}

function list(idstr){
	var name1="subtree"+idstr;
	var name2="img"+idstr;
	var objectobj=document.all(name1);
	var imgobj=document.all(name2);
	
	
	//alert(imgobj);
	
	if(objectobj.style.display=="none"){
		for(i=1;i<10;i++){
			var name3="img"+i;
			var name="subtree"+i;
			var o=document.all(name);
			if(o!=undefined){
				o.style.display="none";
				var image=document.all(name3);
				//alert(image);
				image.src="../images/ico04.gif";
			}
		}
		objectobj.style.display="";
		imgobj.src="../images/ico03.gif";
	}
	else{
		objectobj.style.display="none";
		imgobj.src="../images/ico04.gif";
	}
}

</script>

<body>
	<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
	  	<tr>
		    <td>
		    	<!-- 用户登录欢迎开始 -->
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				  	<tr>
						<td width="207" height="55" background="../images/nav01.gif">
							<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
							  	<tr>
									<td width="75%" height="22" class="left-font01">您好，<span class="left-font02"><?=$_SESSION['adminInfo']['username']?></span>
									</td>
							 	</tr>
						  		<tr>
									<td height="22" class="left-font01">
									[&nbsp;<a href="../action.php?a=logout" target="_top" class="left-font01">退出</a>&nbsp;]
									</td>
						  		</tr>
							</table>
						</td>
				  	</tr>
				</table>
				<!-- 用户登录欢迎结束 -->


				<!--  用户管理开始    -->
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
		          	<tr>
		            	<td height="29">
							<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td width="8%">
										<img name="img8" id="img8" src="../images/ico04.gif" width="8" height="11" />
									</td>
									<td width="92%">
										<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('8');" >用户管理</a>
									</td>
								</tr>
							</table>
						</td>
		          	</tr>		  
		        </table>
				<table id="subtree8" style="display: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
					<tr>
						<td width="9%" height="21" >
						  	<img id="xiaotu21" src="../images/ico06.gif" width="8" height="12" />
						</td>
						<td width="91%">
						  	<a href="../Users/index.php" target="mainFrame" class="left-font03" onClick="tupian('21');">查看用户信息</a>
						</td>
					</tr>
					<tr>
						<td width="9%" height="20" >
						  	<img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" />
						</td>
						<td width="91%">
						  	<a href="../Users/add.php" target="mainFrame" class="left-font03" onClick="tupian('20');">创建用户</a>
						</td>
					</tr>
		      	</table>
				<!--  用户管理结束    -->

				
				<!--  分类管理开始    -->
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
		          	<tr>
		            	<td height="29">
							<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td width="8%">
										<img name="img7" id="img7" src="../images/ico04.gif" width="8" height="11" />
									</td>
									<td width="92%">
										<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('7');" >分类管理</a>
									</td>
								</tr>
							</table>
						</td>
		          	</tr>		  
		        </table>
				<table id="subtree7" style="display: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">	
					<tr>
						<td width="9%" height="20" >
							<img id="xiaotu18" src="../images/ico06.gif" width="8" height="12" />
						</td>
						<td width="91%">
							<a href="../Type/index.php" target="mainFrame" class="left-font03" onClick="tupian('18');">查看分类</a>
						</td>
					</tr>
					<tr>
						<td width="9%" height="20" >
						  	<img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" />
						</td>
						<td width="91%">
							<a href="../Type/add.php" target="mainFrame" class="left-font03" onClick="tupian('17');">添加顶级分类</a>
						</td>
					</tr>
		      	</table>
				<!--  分类管理结束    -->


				<!--  商品管理开始   -->
	        	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
	          		<tr>
	            		<td height="29">
							<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td width="8%">
										<img name="img1" id="img1" src="../images/ico04.gif" width="8" height="11" />
									</td>
									<td width="92%">
										<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('1');" >商品管理</a>
									</td>
								</tr>
							</table>
						</td>
	          		</tr>		  
	        	</table>
				<table id="subtree1" style="display: none" width="80%" border="0" align="center" cellpadding="0" 
					cellspacing="0" class="left-table02">
					<tr>
					  	<td width="9%" height="20" >
					  		<img id="xiaotu4" src="../images/ico06.gif" width="8" height="12" />
					  	</td>
					  	<td width="91%">
					  		<a href="../Goods/index.php" target="mainFrame" class="left-font03" onClick="tupian('4');">查看商品</a>
					  	</td>
					</tr>
					<tr>
					  	<td width="9%" height="20" >
					  		<img id="xiaotu1" src="../images/ico06.gif" width="8" height="12" />
					  	</td>
					  	<td width="91%">
					  		<a href="../Goods/add.php" target="mainFrame" class="left-font03" onClick="tupian('1');">添加商品</a>
					  	</td>
					</tr>					
	      		</table>
				<!--  商品管理结束    -->

				<!--  订单管理开始    -->
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
			        <tr>
			            <td height="29">
				            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
				                <tr>
				                  	<td width="8%" height="12">
				                  		<img name="img2" id="img2" src="../images/ico04.gif" width="8" height="11" />
				                  	</td>
				                  	<td width="92%">
				                  		<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('2');" >订单系统</a>
				                  	</td>
				                </tr>
				            </table>
			            </td>
			        </tr>
			    </table>
				<table id="subtree2" style="display: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
					<tr>
			            <td width="9%" height="20" >
			            	<img id="xiaotu7" src="../images/ico06.gif" width="8" height="12" />
			            </td>
			            <td width="91%">
			            	<a href="../Order/index.php" target="mainFrame" class="left-font03" onClick="tupian('7');">查看订单</a>
			            </td>
			        </tr>
			        <tr>   
			            <td width="9%" height="20" >
			            	<img id="xiaotu7" src="../images/ico06.gif" width="8" height="12" />
			            </td>
			            <td width="91%">
			            	<a href="../Order/index_appraise.php" target="mainFrame" class="left-font03" onClick="tupian('7');">查看订单评价</a>
			            </td>
			        </tr>
			    </table>
				<!--  订单管理结束    -->
		  	</td>
	  	</tr>
	</table>
</body>
</html>

