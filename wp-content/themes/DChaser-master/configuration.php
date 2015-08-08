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
<!--<legend>顾客信息</legend>-->
<h3>顾客信息</h3>
<table class="configuration_custom_info" width="100%">
    <tr>
        <td>
            <label>您的姓名 ( 必填 )</label>
            <input id="name" type="text" value=<?php if(isset($_COOKIE['name'])) echo $_COOKIE['name'];?>>
        </td>
        <td>
            <label>您的电话 ( 必填 )</label>
            <input id="tel" type="text" value=<?php if(isset($_COOKIE['tel'])) echo $_COOKIE['tel'];?>>
        </td>
        <td>
            <label>您的邮箱 ( 选填 )</label>
            <input id="email" type="text" value=<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>>
        </td>
    </tr>
</table>
<br />
<!--<legend>配置方案</legend>-->
<h3>配置方案</h3>
<table class="configuration_plan" width="100%">
    <tr>
        <td>
            <label>梳毛机尺寸：</label>
            <select id="shumaojichicun">
                <option value="60">60</option>
                <option value="70">70</option>
                <option value="70">73</option>
                <option value="80">80</option>
                <option value="90">90</option>
                <option value="100" selected>100</option>
            </select>英寸
        </td>
        <td></td>
        <td>
            <label>产地：</label>
            <select id="chandi" onchange="change_chandi();">
                <option value="中国" selected>中国</option>
                <option value="日本">日本</option>
                <option value="意大利">意大利</option>
                <option value="英国">英国</option>
                <option value="韩国">韩国</option>
                <option value="比利时">比利时</option>
                <option value="西班牙">西班牙</option>
                <option value="波兰">波兰</option>
                <option value="其他">其他</option>
            </select>
        </td>
        <td></td>
        <td>
            <label id="qitachandi_label" style="display:none">请填写产地：</label>
            <input type="text" id="qitachandi_input" style="display:none">
        </td>
    </tr>
    <tr>
        <td>
            <label id="changfangchangdu_label">厂房长度：</label>
            <input type="text" id="changfangchangdu" onchange="check();">米
        </td>
        <td></td>
        <td>
            <label id="changfangkuandu_label">厂房宽度：</label>
            <input type="text" id="changfangkuandu" onchange="check();">米
        </td>
        <td></td>
        <td>
            <input type="checkbox" id="shifoubaoliuzhibaojin" style="margin-left:8px; width:20px">厂房在楼上
        </td>
    </tr>
    <tr>
        <td>
            <label>毛轴数：</label>
            <select id="maozhoushu" onchange="jisuan();">
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="12" selected>12</option>
                <option value="16">16</option>
            </select>
        </td>
        <td class="symbol">X</td>
        <td>
            <label>单根头数：</label>
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
                <option value="51">51</option>
                <option value="52">52</option>
            </select>
        </td>
        <td class="symbol">=</td>
        <td>
            <label>总头数：</label>
            <input type="text" id="zongtoushu" value=240 readonly="readonly" onblur="jisuan();">
        </td>
    </tr>
    <tr>
        <td>
            <label>总头数：</label>
            <input type="text" id="zongtoushu_xianshi" value=240 readonly="readonly" onblur="jisuan();">
        </td>
        <td class="symbol">X</td>
        <td>
            <label>落数：</label>
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
        <td class="symbol">=</td>
        <td>
            <label id="dingshu_label">绽数：</label>
            <input type="text" id="dingshu" value=720 readonly="readonly" onblur="jisuan();">
        </td>
    </tr>
    <tr>
        <td>
            <label>绽数：</label>
            <input type="text" id="dingshu_xianshi" value=720 readonly="readonly" onblur="jisuan();">
        </td>
        <td class="symbol">X</td>
        <td>
            <label>绽距：</label>
            <select id="dingju" onchange="jisuan();">
                <option value="50">50P</option>
                <option value="55">55P</option>
                <option value="60" selected>60P</option>
                <option value="62">62P</option>
            </select> + 2000mm
        </td>
        <td>=</td>
        <td>
            <label id="shebeichangdu_label" style="color:red">设备长度：</label>
            <input type="text" id="shebeichangdu" value=45.2 onblur="jisuan();">米
        </td>
    </tr>
    <tr>
        <td>
            <label>展距：</label>
            <select id="zhanju" onchange="jisuan();">
                <option value="4250">3M</option>
                <option value="4750">3.5M</option>
                <option value="5250" selected>4M</option>
                <option value="5750">4.5M</option>
            </select>
        </td>
        <td></td>
        <td></td>
        <td class="symbol">=</td>
        <td>
            <label id="shebeikuandu_label"style="color:red">设备宽度：</label>
            <input type="text" id="shebeikuandu" value=5.25 readonly="readonly" onblur="jisuan();">米
        </td>
    </tr>
</table>
<br />

<br />
<font style="color:red">详情咨询：</font>
<script>
    function change_chandi()
    {
        if(document.getElementById("chandi").value == "其他") {
            document.getElementById("qitachandi_label").style.display='';
            document.getElementById("qitachandi_input").style.display='';
        } else {
            document.getElementById("qitachandi_label").style.display='none';
            document.getElementById("qitachandi_input").style.display='none';
        }

    }

    function check()
    {
        // 检查数据是否合法
        // 如果锭数超过800则显示为红色
        if(document.getElementById('dingshu').value > 800) {
            document.getElementById('dingshu_label').style.color = 'red';
        } else {
            document.getElementById('dingshu_label').style.color = '';
        }

        // 如果厂房长宽不为数字则显示为红色
        if(isNaN(document.getElementById('changfangchangdu').value * 1)) {
            document.getElementById('changfangchangdu_label').style.color = 'red';
            document.getElementById('shebeichangdu_label').style.color = 'red';
            return;
        } else {
            document.getElementById('changfangchangdu_label').style.color = '';
        }
        if(isNaN(document.getElementById('changfangkuandu').value * 1)) {
            document.getElementById('changfangkuandu_label').style.color = 'red';
            document.getElementById('shebeikuandu_label').style.color = 'red';
            return;
        } else {
            document.getElementById('changfangkuandu_label').style.color = '';
        }

        // 如果设备长宽大于厂房长宽, 则显示为红色
        if(document.getElementById('shebeichangdu').value * 1 > document.getElementById('changfangchangdu').value * 1) {
            document.getElementById('shebeichangdu_label').style.color = 'red';
        } else {
            document.getElementById('shebeichangdu_label').style.color = '';
        }
        if(document.getElementById('shebeikuandu').value * 1 > document.getElementById('changfangkuandu').value * 1) {
            document.getElementById('shebeikuandu_label').style.color = 'red';
        } else {
            document.getElementById('shebeikuandu_label').style.color = '';
        }
    }
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

        document.getElementById('shebeichangdu').value = shebeichangdu/1000;

        //计算设备宽度
        var zhanju = document.getElementById("zhanju").value;

        var shebeikuandu = zhanju;

        document.getElementById('shebeikuandu').value = shebeikuandu/1000;

        check();
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
            <label>您的邮箱(必填)</label>
