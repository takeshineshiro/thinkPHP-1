<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/css/common.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/PersonalCenter/FarmMallPersonal/JIC/css/seller.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/common.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/footer.js"></script>
	<!--[if IE 8.0]><link href="/Public/mall/wuhelong/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="/Public/mall/wuhelong/IE8.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body>
	<div class="header"><!-- 头部开始 -->
		<div class="header-wrap">
			<div class="header-top"><!-- 头部上面部分 -->
				<div class="left">
					<img src="/Public/mall/wuhelong/images/bslogo.png" alt=""><!-- logo -->
				</div>
				<div class="right"><!-- 右边内容 -->
					<ul class="ul1 clear"><!-- 帮助中心 -->
						<li style="cursor: default;">服务热线：0571-87661678</li>
						<li onclick="AddFavorite('中农在线','http://www.baidu.com')">收藏本站</li>
						<li><a href="" class="f12 cf">帮助中心</a></li>
						<li class="name">Hi,ceshiyi<img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/headLoginNameUp.png">
							<div class="nameCont">
								<a href="">退出登录</a>
								<a href="">帐号管理</a>
							</div>
						</li>
						<li>请登录</li>
					</ul>
					<ul class="ul2 clear"><!-- 商城链接 -->
						<li><a href="">中农在线</a></li>
						<li><a href="">网上庄稼医院</a><span>|</span></li>
						<li><a href="">农资商城</a><span>|</span></li>	
					</ul>
				</div>
			</div>
		</div><!-- 头部上面部分end -->
		<div class="header-nav"><!-- 头部导航部分 -->
			<div class="navCont">
				<a href="" class="active"><span>首页</span></a>
				<a href="" class="active1"><span class="active2">会员设置</span></a>
				<a href="" class="active"><span>农资商城管理</span></a>
				<a href="" class="active"><span>网上庄稼医院管理</span></a>
			</div>
		</div><!-- 头部上面部分end -->
	</div><!-- 头部开始end -->
	<section class="containar"><!-- 主体内容开始 -->
		<div class="containarWrap clear">
						<div class="leftBar"><!-- 左边导航公共部分 -->
				<div class="lb-head"><!-- 头像 -->
					<div class="lb-head-bj">
						<img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/lufei.jpg" alt="">
						<a href="" class="membrane">编辑资料</a><!-- 阴影 -->
					</div>
				</div><!-- 头像end -->
				<div class="lb-nav"><!-- 左边导航 -->
					<dl>
						<dt>交易管理</dt>
						<dd><a href="" class="active">已卖出的商品</a></dd>
						<dd><a href="">评价管理</a></dd>
					</dl>
					<dl>
						<dt>商品管理</dt>
						<dd><a href="">发布商品</a></dd>
						<dd><a href="">出售中的商品</a></dd>
						<dd><a href="">仓库中的商品</a></dd>
						<dd><a href="">商品分类管理</a></dd>
					</dl>
					<dl>
						<dt>商铺管理</dt>
						<dd><a href="">查看我的商铺</a></dd>
						<dd><a href="">商铺设置</a></dd>
						<dd><a href="">掌柜推荐</a></dd>
						<dd><a href="">运费模板</a></dd>
						<dd><a href="">子账号设置</a></dd>
					</dl>
					<dl>
						<dt>进货渠道</dt>
						<dd><a href="">我代理的</a></dd>
						<dd><a href="">代理我的</a></dd>
					</dl>
					<dl>
						<dt>客户管理</dt>
						<dd><a href="">认证客户</a></dd>
						<dd><a href="">级别设置</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dt>授信管理</dt>
						<dd><a href="">授信关系</a></dd>
						<dd><a href="">额度调整</a></dd>
						<dd><a href="">使用记录</a></dd>
					</dl>
				</div><!-- 左边导航end -->
			</div><!-- 左边导航公共结束 -->
			<div class="rightBar"><!-- 右边内容开始 -->
				<div class="rightPart"> <!-- 右边主体内容 -->
					<div class="myPlace"> <!-- 所在位置开始 -->
						<span>当前位置:</span>
						<a href="">首页</a>
						<span>&gt;</span>
						<a href="">卖家中心</a>
						<span>&gt;</span>
						<a href="">额度调整</a>
					</div> <!-- 所在位置结束 -->
					<!-- 右边的正文内容开始 -->
					<div class="rightCont creditAdjustment" style="min-height: 114px;"> 
						<h3>授信关系</h3>
						<form action="" method="">
							<div>
								<label for="">申请人：</label>
								<input type="text" name="" id="" placeholder="填写申请人名字">
								<label for="">会员号：</label>
								<input type="text" name="" id="" placeholder="输入会员号">
								<label for="">审核状态：</label>
								<select name="" id="">
									<option value="">全部</option>
									<option value="">新申请</option>
									<option value="">审核通过</option>
								</select>
							</div>
							<div>
								<label for="">授信额度：</label>
								<input type="text" name="" id="" style="width: 100px;margin:0;">
								<span>-</span>
								<input type="text" name="" id="" style="width: 100px;">
								<label for="">会员性质：</label>
								<select name="" id="">
									<option value="">厂家</option>
									<option value="">合作社</option>
								</select>
								<input type="button" value="搜索">
							</div>
						</form>
						<div class="creditRelations">
							<div class="box1">
								<ul class="clear">
									<li>新申请(2)</li>
									<li>审核中(47)</li>
									<li class="active">审核通过(316)</li>
									<li>拒绝(1)</li>
									<li>终止(9)</li>
								</ul>
							</div>
							<div class="showBox">
								<div class="showCont hide">
									<!-- 新申请 -->
									<div class="newReview">
										<table>
												<tr style="border:1px solid #e5e5e5;">
													<th style="width: 130px;">申请时间</th>
													<th style="width: 114px;">申请人</th>
													<th style="width: 174px;">会员号 </th>
													<th style="width: 132px;">会员性质</th>
													<th style="width: 150px;">授信额度</th>
													<th style="width: 235px;">操作</th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>王思聪</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="orange fb">20000.00</td>
													<td class="green fb"><i class="go f14">我去审核</i></td>
												</tr>
											</table>
										</div>
									<!-- 新申请结束 -->
								</div>
								<div class="showCont hide">
									<!-- 审核中 -->
									<div class="underReview">
										<table>
											<tr style="border:1px solid #e5e5e5;">
												<th style="width: 130px;">申请时间</th>
												<th style="width: 114px;">申请人</th>
												<th style="width: 174px;">会员号 </th>
												<th style="width: 132px;">会员性质</th>
												<th style="width: 150px;">授信额度</th>
												<th style="width: 235px;">操作</th>
											</tr>
											<tr>
												<td>2015-06-09</td>
												<td>王思聪</td>
												<td>12015052517311</td>
												<td>厂家</td>
												<td class="orange fb">20000.00</td>
												<td class="orange fb"><span class="underPass f14">通过</span><span class="underDeny f14">拒绝</span></td>
											</tr>
											<tr>
												<td>2015-06-09</td>
												<td>王思聪</td>
												<td>12015052517311</td>
												<td>厂家</td>
												<td class="orange fb">20000.00</td>
												<td class="orange fb"><span class="underPass f14">通过</span><span class="underDeny f14">拒绝</span></td>
											</tr>
										</table>	
									</div>
									<!-- 审核中结束 -->
								</div>
								<div class="showCont show">
									<!-- 审核通过 -->
										<div class="passed">
											<table>
												<tr style="border:1px solid #e5e5e5;">
													<th style="width: 110px;">申请时间</th>
													<th style="width: 108px;">申请人</th>
													<th style="width: 124px;">会员号 </th>
													<th style="width: 106px;">会员性质</th>
													<th style="width: 104px;">授信额度</th>
													<th style="width: 132px;">授信余额</th>
													<th style="width: 114px;">需还款</th>
													<th style="width: 144px;">操作</th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>王思聪</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="orange fb">20000.00</td>
													<td>900.00</td>
													<td class="green fb">110000.00</td>
													<td class="green fb"><span class="passed-adjustment f14">调整额度</span><span class="passed-termination f14">终止</span></td>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>王思聪</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="orange fb">20000.00</td>
													<td>900.00</td>
													<td class="green fb">110000.00</td>
													<td class="green fb"><span class="passed-adjustment f14">调整额度</span><span class="passed-termination f14">终止</span></td>
												</tr>
											</table>
										</div>
									<!-- 审核通过结束 -->
								</div>
								<div class="showCont hide">
									<!-- 拒绝 -->
										<div class="denys">
											<table>
												<tr style="border:1px solid #e5e5e5;">
													<th style="width: 110px;">申请时间</th>
													<th style="width: 108px;">申请人</th>
													<th style="width: 124px;">会员号 </th>
													<th style="width: 106px;">会员性质</th>
													<th style="width: 104px;">授信额度</th>
													<th style="width: 132px;">授信余额</th>
													<th style="width: 114px;">需还款</th>
													<th style="width: 144px;">操作</th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>王思聪</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="orange fb">20000.00</td>
													<td>900.00</td>
													<td class="green fb">110000.00</td>
													<td class="orange fb restore"></td>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>王思聪</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="orange fb">20000.00</td>
													<td>900.00</td>
													<td class="green fb">110000.00</td>
													<td class="orange fb restore"></td>
												</tr>
											</table>
										</div>
									<!-- 拒绝结束 -->
								</div>
								<div class="showCont hide">
									<!-- 终止列表 -->
									<div class="terminationList">
										<table>
											<tr style="border:1px solid #e5e5e5;">
												<th style="width: 110px;">申请时间</th>
												<th style="width: 108px;">申请人</th>
												<th style="width: 124px;">会员号 </th>
												<th style="width: 106px;">会员性质</th>
												<th style="width: 104px;">授信额度</th>
												<th style="width: 132px;">授信余额</th>
												<th style="width: 114px;">需还款</th>
												<th style="width: 144px;">操作</th>
											</tr>
											<tr>
												<td>2015-06-09</td>
												<td>王思聪</td>
												<td>12015052517311</td>
												<td>厂家</td>
												<td class="orange fb">20000.00</td>
												<td>900.00</td>
												<td class="green fb">110000.00</td>
												<td class="orange fb restore"><i class="f14">恢复</i></td>
											</tr>
											<tr>
												<td>2015-06-09</td>
												<td>王思聪</td>
												<td>12015052517311</td>
												<td>厂家</td>
												<td class="orange fb">20000.00</td>
												<td>900.00</td>
												<td class="green fb">110000.00</td>
												<td class="orange fb restore"><i class="f14">恢复</i></td>
											</tr>
										</table>
									</div>
									<!-- 终止列表结束 -->
								</div>
							</div>
						</div>
					</div>
					<!-- 右边的正文内容结束 -->
				</div>
			</div><!-- 右边内容开始end -->
		</div>
	</section>
	<div class="footer"><!-- 公共底部 -->
		<div class="footerWrap">
			<dl class="clear">
				<dt>猜你喜欢</dt>
				<dd><a href="" class="more">更多</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href="">钾肥 </a></dd>
				<dd><a href="">钙肥</a></dd>
				<dd><a href="">棉花种子</a></dd>
				<dd><a href="">大豆种子 </a></dd>
				<dd><a href="">花生种子</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href=""> 棉花种子 </a></dd>
				<dd><a href="">大豆种子</a></dd>
				<dd><a href="">花生种子</a></dd>
			</dl>
			<div style="height: 236px;margin-top: 20px;"><!-- 底部轮播 -->
				<div class="Div1">
				    <!-- <b class="Div1_prev Div1_prev1" ><img src="images/lizi_img011.jpg" title="上一页" /></b>
				    <b class="Div1_next Div1_next1" ><img src="images/lizi_img012.jpg"  title="下一页"/></b> -->
				    <div class="Div1_main">
				    	<div>
				        	<span class="Div1_main_span1">
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>     
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥击</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>  
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>         
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				    </div>
				    <div class="smallNav">
				    	<div class="list1 navs active"></div>
				    	<div class="list2 navs"></div>
				    	<div class="list3 navs"></div>
				    	<div class="list4 navs"></div>
				    	<div class="list5 navs"></div>
				    </div>
				</div>
			</div><!-- 底部轮播end -->
		</div>
	</div><!-- 公共底部结束 -->
	<div class="footNav">
		<ul class="clear">
			<li><a href="">公司简介</a><span>|</span></li>
			<li><a href="">帮助中心</a><span>|</span></li>
			<li><a href="">招商入驻</a><span>|</span></li>
			<li><a href="">网站合作</a><span>|</span></li>
			<li><a href="">法律申明</a><span>|</span></li>
			<li><a href="">联系我们</a><span>|</span></li>
			<li><a href="">举报中心</a></li>
		</ul>
		<p>© 2015 中农在线 版权所有，并保留所有权利增值电信业务经营许可证:浙B2-20150086</p>
	</div>
	<script type="text/javascript">
		(function(){
			//卡片切换
			$('.creditRelations li').click(function(){
				$(this).addClass('active').siblings().removeClass('active');
				$('.showBox .showCont:eq('+$(this).index()+')').show().siblings().hide();
			});
		})();
	</script>
</body>
</html>