<?php
 get_header('meta');
 get_header();
 ?>
<div class="heading-top">
当前位置：<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a> > <?php the_title(); ?>
</div>
<!-- Main Container -->
<div id="body-wrapper">
 <!-- Content -->
    <div id="content" class="clearfix">
        <!-- Main Content -->
        <div class="main">
            <div class="divleft">
                <div class="single_list">
                    <span class="comment-count"></span><h2></h2>
                    <div class="hr-line" style="margin-bottom: 8px;"></div>
                    <div class="post-entry">
<style>
	.table
	{
		padding:10px;
		border:1px solid #ccc;
	}
</style>
<label id="taishutishi"></label>
<label id="dingshutishi"></label>
<label id="shoufutishi"></label>
<label id="fahuoqianfudaotishi"></label>
<label id="fahuoqianfudaodayushoufutishi"></label>
<label id="anzhuangtiaoshiwantishi"></label>
<legend>顾客信息</legend>
<table class="table" width="100%">
	<tr>
		<td>
			<label>姓名：</label>
			<input id="name" type="text" value=<?php if(isset($_COOKIE['name'])) echo $_COOKIE['name'];?>>
		</td>
		<td>
			<label>电话：</label>
			<input id="tel" type="text" value=<?php if(isset($_COOKIE['tel'])) echo $_COOKIE['tel'];?>>
		</td>
		<td>
			<label>邮箱：</label>
			<input id="email" type="text" value=<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>>
		</td>
	</tr>
</table>
<legend>报价方案</legend>
<table class="table" width="100%">
	<tr>
		<td colspan="2">
			<label>机种：</label>
			<select id="jizhong">
				<option value='YZJ-1型走架细纱机' selected>YZJ-1型走架细纱机</option>
			</select>
		<td>
			<label>台数：</label>
			<input type="text" id="taishu" value="1" style="width:52px" onblur="validate_taishu();"></td>
		<td>
			<input type="checkbox" id="shifoubaoliuzhibaojin">保留质保金5%
		</td>
	</tr>
	<tr>
		<td>
			<label>绽数(800以内整数)：</label>
			<input type="text" id="dingshu" style="width:80px" onblur="validate_dingshu();">
		</td>
		<td>
			<label>绽距：</label>
			<select id="dingju">
				<option value=<?php echo get_option('dingju_key_1');?>><?php echo get_option('dingju_value_1');?>P</option>
				<option value=<?php echo get_option('dingju_key_2');?>><?php echo get_option('dingju_value_2');?>P</option>
				<option value=<?php echo get_option('dingju_key_3');?>><?php echo get_option('dingju_value_3');?>P</option>
				<option value=<?php echo get_option('dingju_key_4');?>><?php echo get_option('dingju_value_4');?>P</option>
			</select>
		</td>
		<td>
			<label>展距：</label>
			<select id="zhanju">
				<option value=<?php echo get_option('zhanju_key_1');?>><?php echo get_option('zhanju_value_1');?>P</option>
				<option value=<?php echo get_option('zhanju_key_2');?>><?php echo get_option('zhanju_value_2');?>P</option>
				<option value=<?php echo get_option('zhanju_key_3');?>><?php echo get_option('zhanju_value_3');?>P</option>
				<option value=<?php echo get_option('zhanju_key_4');?>><?php echo get_option('zhanju_value_4');?>P</option>
			</select>
		</td>
		<td>
			<label style="display:inline-block;width:72px">交货期：</label>
			<select id="jiaohuoqi" style="width:84px">
				<option value="0">协商</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<label style="display:inline-block;width:114px">首付(30-100整数)：</label>
			<input type="text" id="shoufu" style="width:80px" onblur="validate_shoufu();">%
		</td>
		<td colspan="2">
			<label>发货前付到(65-100整数)：</label>
			<input type="text" id="fahuoqianfudao" style="width:80px" onblur="calculate_percentage('fahuoqianfudao');">%
		</td>
		<td>
			<label>安装调试完：</label>
			<input type="text" id="anzhuangtiaoshiwan" style="width:80px" onblur="calculate_percentage('anzhuangtiaoshiwan');">%
		</td>
	</tr>
</table>
<br />
<button onclick="jisuanjiage();">计算价格</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button onclick="qingkongchongsuan();">清空重算</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<br />
<br />
<table class="table" width="100%">
	<tr>
		<td>
			<label style="display:inline-block;width:114px">优惠前总价：</label>
			<input type="text" id="youhuiqianzongjia" style="width:80px">元
		</td>
		<td colspan="2">
			<label style="display:inline-block;width:145px">首付款：</label>
			<input type="text" id="shoufukuan" style="width:80px">元
		</td>
		<td>
			<label>发货前付款：</label>
			<input type="text" id="fahuoqianfukuan" style="width:80px">元
		</td>
	</tr>
	<tr>
		<td>
			<label style="display:inline-block;width:114px">安装调试完付款：</label>
			<input type="text" id="anzhuangtiaoshiwanfukuan" style="width:80px">元
		</td>
		<td colspan="2">
			<label style="display:inline-block;width:145px">质保金：</label>
			<input type="text" id="zhibaojin" style="width:80px">元
		</td>
		<td>
			<label>优惠后总价：</label>
			<input type="text" id="youhuihouzongjia" style="width:80px">元
		</td>
	</tr>
</table>
<br />
<button onclick="baoliufangan();">保留方案</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<br />
<br />
<legend>方案对比</legend>
<div class="results" align="left">
	<table class="table" id="results" width="100%">
		<tr>
			<th>方案</th>
			<th>机种</th>
			<th>台数</th>
			<!--<th>首付%</th>-->
			<th>首付款</th>
			<!--<th>发货前付到%</th>-->
			<th>发货前付款</th>
			<!--<th>安装调试完%</th>-->
			<th>安装调试完付款</th>
			<th>质保金</th>
			<th>优惠前总价</th>
			<th>优惠后总价</th>
			<th>优惠</th>
		</tr>
	</table>
<!--</form>-->
</div>
<br />
<button onclick="jisuanzonge();">计算总额</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button onclick="jisuanzonge();">删除勾选方案</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button onclick="qingkongfangan();">编辑勾选方案</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<br />
<br />
<label><b>优惠前总金额：</b></label>
<label id = "youhuiqianzongjine" style="display:inline-block;width:160px"></label>
<label><b>优惠后总金额：</b></label>
<label id = "youhuihouzongjine" style="display:inline-block;width:160px"></label>
<label><b>总优惠：</b></label>
<label id = "zongyouhui" style="display:inline-block;width:160px"></label>
<br />
<br />
<font style="color:red">说明:本报价方案计算出来的价格仅供参考，不代表最终合同的报价！</font>
<script>
	//计算价格
	function jisuanjiage()
	{
		var taishu = document.getElementById("taishu").value;
		var dingshu = document.getElementById("dingshu").value;
		var dingju = document.getElementById("dingju").value;
		var zhanju = document.getElementById("zhanju").value;

		var shoufu = document.getElementById("shoufu").value;
		var fahuoqianfudao = document.getElementById("fahuoqianfudao").value;
		var anzhuangtiaoshiwan = document.getElementById("anzhuangtiaoshiwan").value;

		if(validate_taishu(taishu) == false)
		{
			return false;
		}
		if(validate_dingshu(dingshu) == false)
		{
			return false;
		}
		if(validate_shoufu(shoufu) == false)
		{
			return false;
		}
		if(validate_fahuoqianfudao(fahuoqianfudao) == false)
		{
			return false;
		}
		if(validate_anzhuangtiaoshiwan(anzhuangtiaoshiwan) == false)
		{
			return false;
		}

		var hexinshebeijiage = <?php echo get_option('hexinshebeijiage');?>;
		var zongjine = taishu * (dingshu * dingju + hexinshebeijiage) * zhanju;
		//var zongjine = 500000;
		var youhuiqianzongjia = zongjine;
		var zhibaojin = zongjine * 0.05;
		var shoufuzhekou = <?php echo (double)get_option('shoufuzhekou');?>;
		var fahuoqianfudaozhekou = <?php echo (double)get_option('fahuoqianfudaozhekou');?>;
		if(window.console)
		{
			console.log("首付折扣：" + shoufuzhekou + "折");
			console.log("发货前付到折扣" + fahuoqianfudaozhekou + "折");
		}

		var shoufuzhekou = (1 - (1 - 0.1 * shoufuzhekou) / 70 * (shoufu - 30));
		var fahuoqianfudaozhekou = (1 - (1 - 0.1 * fahuoqianfudaozhekou) / 35 * (fahuoqianfudao - 65));
		var zongzhekou = shoufuzhekou * fahuoqianfudaozhekou;
		if(window.console)
		{
			console.log("首付折扣（具体）：" + shoufuzhekou);
			console.log("发货前付到折扣（具体）：" + fahuoqianfudaozhekou);
			console.log("总折扣（具体）：" + zongzhekou);
		}
		if(document.getElementById("shifoubaoliuzhibaojin").checked)
		{
			zongjine = zongjine - zhibaojin;
			var youhuihouzongjia = zongjine * zongzhekou;
			if(window.console) console.log("加上质保金前：" + zongjine);
			youhuihouzongjia = youhuihouzongjia + zhibaojin;
			if(window.console) console.log("优惠后总价：" + youhuihouzongjia);
		}
		else
		{
			var youhuihouzongjia = zongjine * zongzhekou;
			if(window.console) console.log("减去银行利息前：" + youhuihouzongjia);
			var yinhangnianlilv  = <?php echo (double)get_option('yinhangnianlilv');?>;
			if(window.console) console.log("银行年利率：" + yinhangnianlilv);
			var yinhanglixi = youhuiqianzongjia * 0.05 * (yinhangnianlilv / 100);
			if(window.console) console.log("一年银行利息：" + yinhanglixi);
			youhuihouzongjia = youhuihouzongjia - yinhanglixi;
			if(window.console) console.log("优惠后总价：" + youhuihouzongjia);
		}

		var shoufukuan = youhuihouzongjia * shoufu * 0.01;
		var fahuoqianfukuan = youhuihouzongjia * fahuoqianfudao * 0.01;
		var anzhuangtiaoshiwanfukuan = youhuihouzongjia * anzhuangtiaoshiwan * 0.01;

		document.getElementById("youhuiqianzongjia").value = Math.round(youhuiqianzongjia*100)/100;
		document.getElementById("shoufukuan").value = Math.round(shoufukuan*100)/100;
		document.getElementById("fahuoqianfukuan").value = Math.round(fahuoqianfukuan*100)/100;
		document.getElementById("anzhuangtiaoshiwanfukuan").value = Math.round(anzhuangtiaoshiwanfukuan*100)/100;
		document.getElementById("zhibaojin").value = Math.round(zhibaojin*100)/100;
		document.getElementById("youhuihouzongjia").value = Math.round(youhuihouzongjia*100)/100;
	}

	//清空重算
	function qingkongchongsuan()
	{
		document.getElementById("taishu").value = 1;
		document.getElementById('shifoubaoliuzhibaojin').checked = false;
		document.getElementById("dingshu").value = '';
		document.getElementById("dingju").value = 415;
		document.getElementById("zhanju").value = 0.98;
		document.getElementById('shoufu').value = '';
		document.getElementById('fahuoqianfudao').value = '';
		document.getElementById('anzhuangtiaoshiwan').value = '';
		document.getElementById('youhuiqianzongjia').value = '';
		document.getElementById('shoufukuan').value = '';
		document.getElementById('fahuoqianfukuan').value = '';
		document.getElementById('anzhuangtiaoshiwanfukuan').value = '';
		document.getElementById('zhibaojin').value = '';
		document.getElementById('youhuihouzongjia').value = '';
	}

	//保留方案
	function baoliufangan()
	{
		var flag = true;
		var jizhong = document.getElementById("jizhong").value;
		var taishu = document.getElementById("taishu").value;
		var dingshu = document.getElementById("dingshu").value;
		var dingju = document.getElementById("dingju").value;
		var zhanju = document.getElementById("zhanju").value;

		var shoufu = document.getElementById("shoufu").value;
		var fahuoqianfudao = document.getElementById("fahuoqianfudao").value;
		var anzhuangtiaoshiwan = document.getElementById("anzhuangtiaoshiwan").value;
		if(validate_taishu(taishu) == false)
		{
			flag = false;
		}
		if(validate_dingshu(dingshu) == false)
		{
			flag = false;
		}
		if(validate_shoufu(shoufu) == false)
		{
			flag = false;
		}
		if(validate_fahuoqianfudao(fahuoqianfudao) == false)
		{
			flag = false;
		}
		if(validate_anzhuangtiaoshiwan(anzhuangtiaoshiwan) == false)
		{
			flag = false;
		}
		if(flag == false)
		{
			alert("还未计算价格");
			return false;
		}
		var results = document.getElementById("results");
		var rows = results.rows.length;

		var shoufukuan = document.getElementById("shoufukuan").value;
		var fahuoqianfukuan = document.getElementById("fahuoqianfukuan").value;
		var anzhuangtiaoshiwanfukuan = document.getElementById("anzhuangtiaoshiwanfukuan").value;
		var zhibaojin = document.getElementById("zhibaojin").value;
		var youhuiqianzongjia = document.getElementById("youhuiqianzongjia").value;
		var youhuihouzongjia = document.getElementById("youhuihouzongjia").value;

		var details = new Array();
		details[1] = jizhong;
		details[2] = taishu;
		details[3] = shoufukuan;
		details[4] = fahuoqianfukuan;
		details[5] = anzhuangtiaoshiwanfukuan;
		details[6] = zhibaojin;
		details[7] = youhuiqianzongjia;
		details[8] = youhuihouzongjia;

		if(rows > 1)
		{
			for(var i = 1; i < rows; i++)
			{
				var flag = 0;
				for(var j = 1; j < results.rows.item(0).cells.length - 1; j++)
				{
					if(details[j] != results.rows[i].cells[j].innerHTML)
					{
						flag = 1;
						break;
					}
				}
				if(flag == 0)
				{
					alert("本方案已经存在");
					return;
				}
			}
		}
		var newTr = results.insertRow();
		var newTd = new Array();
		for(var i = 0; i < results.rows.item(0).cells.length; i++)
		{
			newTd[i] = newTr.insertCell();
		}
		newTd[0].innerHTML = rows;
		newTd[1].innerHTML = details[1];
		newTd[2].innerHTML = details[2]
		newTd[3].innerHTML = details[3];
		newTd[4].innerHTML = details[4];
		newTd[5].innerHTML = details[5];
		newTd[6].innerHTML = details[6];
		newTd[7].innerHTML = Math.round(details[7]*100)/100;
		newTd[8].innerHTML = Math.round(details[8]*100)/100;
		var youhui = details[7] - details[8];
		newTd[9].innerHTML = Math.round(youhui*100)/100;

		var name = document.getElementById('name').value;
		var tel = document.getElementById('tel').value;
		var email = document.getElementById('email').value;

		$.ajax({
			url : "<?php echo get_option('siteurl'); ?>/wp-youlian-config.php",
            type : "POST",
			data : {name : name,
					tel : tel,
					email : email,
					jizhong : jizhong,
					taishu : taishu,
					dingshu : dingshu,
					dingju : dingju,
					zhanju : zhanju,
					shoufu : shoufu,
					fahuoqianfudao : fahuoqianfudao,
					anzhuangtiaoshiwan : anzhuangtiaoshiwan,
					youhuiqianzongjia : Math.round(youhuiqianzongjia*100)/100,
					shoufukuan : shoufukuan,
					fahuoqianfukuan : fahuoqianfukuan,
					anzhuangtiaoshiwanfukuan : anzhuangtiaoshiwanfukuan,
					zhibaojin : zhibaojin,
					youhuihouzongjia : Math.round(youhuihouzongjia*100)/100,
					youhui : Math.round((youhuiqianzongjia - youhuihouzongjia)*100)/100
					},
            datatype : "text",

            beforeSend : function() {
                console.log("beforeSend");
            },
            success : function(data) {
				console.log(data);
                console.log("success");
            },
            error : function() {
                console.log("error");
            },
            complete : function() {
                console.log("complete");
            },
        });
	}

	//清空方案
	function qingkongfangan()
	{
		var results = document.getElementById("results");
		var rows = results.rows.length;
		for(var i = rows - 1; i > 0; i--)
		{
			results.deleteRow(i);
		}
	}

	//计算总额
	function jisuanzonge()
	{
		var results = document.getElementById("results");
		var rows = results.rows.length;
		var youhuiqianzongjine = 0;
		var youhuihouzongjine = 0;
		var zongyouhui = 0;
		for(var i = 1; i < rows; i++)
		{
			youhuiqianzongjine += parseFloat(results.rows[i].cells[7].innerHTML);
			youhuihouzongjine += parseFloat(results.rows[i].cells[8].innerHTML);
			zongyouhui += parseFloat(results.rows[i].cells[9].innerHTML);
		}
		document.getElementById("youhuiqianzongjine").innerHTML = Math.round(youhuiqianzongjine*100)/100;
		document.getElementById("youhuihouzongjine").innerHTML = Math.round(youhuihouzongjine*100)/100;
		document.getElementById("zongyouhui").innerHTML = Math.round(zongyouhui*100)/100;
	}

	//自动计算另一个的百分比
	function calculate_percentage(id)
	{
		if(id == "fahuoqianfudao")
		{
			var fahuoqianfudao = document.getElementById("fahuoqianfudao").value;
			if(validate_fahuoqianfudao(fahuoqianfudao) == false)
			{
				return false;
			}
			document.getElementById("anzhuangtiaoshiwan").value = 100 - fahuoqianfudao;
		}
		else
		{
			var anzhuangtiaoshiwan = document.getElementById("anzhuangtiaoshiwan").value;
			if(validate_anzhuangtiaoshiwan(anzhuangtiaoshiwan) == false)
			{
				return false;
			}
			document.getElementById("fahuoqianfudao").value = 100 - anzhuangtiaoshiwan;
		}
	}

	//验证发货前付到的文本框是否合法
	function validate_fahuoqianfudao(fahuoqianfudao)
	{
		if(isNaN(fahuoqianfudao) || parseInt(fahuoqianfudao) != fahuoqianfudao || fahuoqianfudao < 65 || fahuoqianfudao > 100)
		{
			document.getElementById("fahuoqianfudaotishi").innerHTML = '发货前付到(65-100的整数)<br />';
			document.getElementById("fahuoqianfudaotishi").style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById("fahuoqianfudaotishi").innerHTML = "";
			document.getElementById("anzhuangtiaoshiwantishi").innerHTML = "";
		}
		var shoufu = document.getElementById("shoufu").value;
		if(fahuoqianfudao < shoufu)
		{
			document.getElementById("fahuoqianfudaodayushoufutishi").innerHTML = "发货前付到需要大于首付<br />";
			document.getElementById("fahuoqianfudaodayushoufutishi").style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById("fahuoqianfudaodayushoufutishi").innerHTML = "";
		}
	}

	//验证安装调试完的文本框是否合法
	function validate_anzhuangtiaoshiwan(anzhuangtiaoshiwan)
	{
		if(isNaN(anzhuangtiaoshiwan) || parseInt(anzhuangtiaoshiwan) != anzhuangtiaoshiwan || anzhuangtiaoshiwan > 35 || anzhuangtiaoshiwan < 0)
		{
			document.getElementById("anzhuangtiaoshiwantishi").innerHTML = "安装调试完必须为0-35的整数<br />";
			document.getElementById("anzhuangtiaoshiwantishi").style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById("anzhuangtiaoshiwantishi").innerHTML = "";
		}
	}

	//验证首付文本框是否合法
	function validate_shoufu()
	{
		var shoufu = document.getElementById("shoufu").value;
		if(isNaN(shoufu) || parseInt(shoufu) != shoufu || shoufu < 30 || shoufu > 100)
		{
			document.getElementById("shoufutishi").innerHTML = "首付(30-100的整数)<br />";
			document.getElementById("shoufutishi").style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById("shoufutishi").innerHTML = "";
		}
	}

	//验证绽数文本框是否合法
	function validate_dingshu()
	{
		var dingshu = document.getElementById("dingshu").value;
		if(isNaN(dingshu) || parseInt(dingshu) != dingshu || dingshu > 800 || dingshu < 1)
		{
			document.getElementById("dingshutishi").innerHTML = "绽数(800以内整数)<br />";
			document.getElementById("dingshutishi").style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById("dingshutishi").innerHTML = "";
		}
	}

	//验证台数时候合法
	function validate_taishu()
	{
		var taishu = document.getElementById("taishu").value;
		if(isNaN(taishu) || parseInt(taishu) != taishu || taishu < 1)
		{
			document.getElementById("taishutishi").innerHTML = "台数需要大于0<br />";
			document.getElementById("taishutishi").style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById("taishutishi").innerHTML = "";
		}

	}
</script>
                    </div>
                </div>
            </div>
         <!-- /Post -->
        </div>
        <!-- /Main Content -->
<?php get_sidebar(); ?></div>

<?php get_footer(); ?>
