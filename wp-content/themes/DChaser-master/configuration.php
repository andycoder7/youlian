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
	td
	{
		//width:200px;
	}
</style>

<label id="taishutishi"></label>
<label id="dingshutishi"></label>
<label id="shoufutishi"></label>
<label id="fahuoqianfudaotishi"></label>
<label id="fahuoqianfudaodayushoufutishi"></label>
<label id="anzhuangtiaoshiwantishi"></label>
<!--
<legend>顾客信息</legend>
<table width="100%">
	<tr>
		<td>
			<label>姓名：</label>
			<input type="text" name="name">
		<td>
			<label>手机：</label>
			<input type="text" name="tel"></td>
		<td>
			<label>邮箱：</label>
			<input type="text" name="email">
		</td>
	</tr>
</table>
<br />-->
<legend>配置方案</legend>
<table class="table" width="100%">
	<tr>
		<td>
			<label>梳毛机尺寸：</label>
			<select id="shumaojichicun">
				<option value="60">60</option>
				<option value="70">70</option>
				<option value="80">80</option>
				<option value="90">90</option>
				<option value="100" selected>100</option>
			</select>
		</td>
		<td></td>
		<td>
			<label>产地：</label>
			<select id="chandi">
				<option value="中国" selected>中国</option>
				<option value="日本">日本</option>
				<option value="意大利">意大利</option>
				<option value="英国">英国</option>
				<option value="韩国">韩国</option>
				<option value="比利时">比利时</option>
				<option value="西班牙">西班牙</option>
				<option value="波兰">波兰</option>
			</select>
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>
			<label>厂房长度：</label>
			<input type="text" id="changfangchangdu" style="width:80px">mm
		</td>
		<td></td>
		<td>
			<label>厂房宽度：</label>
			<input type="text" id="changfangkuandu" style="width:80px">mm
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>
			<label style="display:inline-block;width:60px">毛轴数：</label>
			<select id="maozhoushu" onchange="jisuan();">
				<option value="4">4</option>
				<option value="8">8</option>
				<option value="12" selected>12</option>
				<option value="16">16</option>
			</select>
		</td>
		<td width="40px">X</td>
		<td>
			<label>单根毛轴头数：</label>
			<select id="dangenmaozhoutoushu" onchange="jisuan();">
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20" selected>20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>
			</select>
		</td>
		<td width="40px">X</td>
		<td>
			<label style="display:inline-block;width:60px">总头数：</label>
			<input type="text" id="zongtoushu" value=240 style="width:80px" readonly="readonly" onblur="jisuan();">
		</td>
	</tr>
	<tr>
		<td>
			<label style="display:inline-block;width:60px">总头数：</label>
			<input type="text" id="zongtoushu_xianshi" value=240 style="width:80px" readonly="readonly" onblur="jisuan();">
		</td>
		<td>X</td>
		<td>
			<label style="display:inline-block;width:60px">落数：</label>
			<select id="luoshu" onchange="jisuan();">
				<option value="3" selected>3</option>
				<option value="3.25">3.25</option>
				<option value="3.5">3.5</option>
				<option value="3.75">3.75</option>
				<option value="4">4</option>
				<option value="4.25">4.25</option>
				<option value="4.5">4.5</option>
				<option value="4.75">4.75</option>
				<option value="5">5</option>
				<option value="5.25">5.25</option>
				<option value="5.5">5.5</option>
				<option value="5.75">5.75</option>
				<option value="6">6</option>
			</select>
		</td>
		<td>X</td>
		<td>
			<label style="display:inline-block;width:60px">绽数：</label>
			<input type="text" id="dingshu" value=720 style="width:80px" readonly="readonly" onblur="jisuan();">
		</td>
	</tr>
	<tr>
		<td>
			<label style="display:inline-block;width:60px">绽数：</label>
			<input type="text" id="dingshu_xianshi" value=720 style="width:80px" readonly="readonly" onblur="jisuan();">
		</td>
		<td>X</td>
		<td>
			<label style="display:inline-block;width:60px">绽距：</label>
			<select id="dingju" onchange="jisuan();">
				<option value="50">50P</option>
				<option value="55">55P</option>
				<option value="60" selected>60P</option>
				<option value="62">62P</option>
			</select> + 2000mm
		</td>
		<td>=</td>
		<td>
			<label style="color:red">设备长度：</label>
			<input type="text" id="shebeichangdu" value=45200 style="width:80px" onblur="jisuan();">mm
		</td>
	</tr>
	<tr>
		<td>
			<label style="display:inline-block;width:60px">展距：</label>
			<select id="zhanju" onchange="jisuan();">
				<option value="4250">3M</option>
				<option value="4150">3.5M</option>
				<option value="5250" selected>4M</option>
				<option value="5750">4.5M</option>
			</select>
		</td>
		<td></td>
		<td></td>
		<td>=</td>
		<td>
			<label style="color:red">设备宽度：</label>
			<input type="text" id="shebeikuandu" value=5250 style="width:80px" readonly="readonly" onblur="jisuan();">mm
		</td>
	</tr>
</table>
<br />

<br />
<font style="color:red">详情咨询：</font>
<script>
	//计算所有
	function jisuan()
	{
		//计算总头数
		var maozhoushu = document.getElementById("maozhoushu").value;
		var dangenmaozhoutoushu = document.getElementById("dangenmaozhoutoushu").value;

		var zongtoushu = maozhoushu * dangenmaozhoutoushu;

		document.getElementById("zongtoushu").value = zongtoushu;
		document.getElementById("zongtoushu_xianshi").value = zongtoushu;

		//计算定数
		var zongtoushu = document.getElementById("zongtoushu").value;
		var luoshu = document.getElementById("luoshu").value;

		var dingshu = zongtoushu * luoshu;

		document.getElementById('dingshu').value = dingshu;
		document.getElementById('dingshu_xianshi').value = dingshu;

		//计算设备长度
		var dingshu = document.getElementById("dingshu").value;
		var dingju = document.getElementById("dingju").value;

		var shebeichangdu = dingshu * dingju + 2000;

		document.getElementById('shebeichangdu').value = shebeichangdu;

		//计算设备宽度
		var zhanju = document.getElementById("zhanju").value;

		var shebeikuandu = zhanju;

		document.getElementById('shebeikuandu').value = shebeikuandu;
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
