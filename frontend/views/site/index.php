<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>销售采购仓库</title>
</head>
<body>
<style>
    body{
        font-size: 14px;
        /*让页面无边框*/
        margin: 0;
    }

    /*状态栏*/
    #header{background-color:#FFA500;}
    .state li{display: inline-block;}
    .state{ padding: 2px 0;padding-left:45cm;}


    /*筛选栏*/
    a{
        padding:5px 10px;
        text-align: center;
        color: #666666;
        text-decoration: none;
    }
    .screening a:hover{
        background-color: #FFF2EA;
        color: #FF9052;
    }
    .active{
        background-color: #FFF2EA;
        color: #FF9052;
    }

    /*数据显示*/
    table,table tr th, table tr td { border:1px solid #0094ff; }
    table {  width: 100%; min-height: 25px; line-height: 25px;
        text-align: center; border-collapse: collapse; padding:2px;}
</style>


<div id="container">

    <div id="header">
        <div class="state">
            <ul>
                <li>通知</li>
                <li>帮助</li>
                <li>用户名</li>
            </ul>
        </div>
    </div>
    <div id="menu" style="background-color:#FFD700;width:10%;float:left;">
        <ul>
            <li><a>通知</a></li>
            <li><a>帮助</a></li>
            <li><a>用户名</a></li>
            <li><a>通知</a></li>
            <li><a>帮助</a></li>
            <li><a>用户名</a></li>
            <li><a>通知</a></li>
            <li><a>帮助</a></li>
            <li><a>用户名</a></li>
            <li><a>通知</a></li>
            <li><a>帮助</a></li>
            <li><a>用户名</a></li>
            <li><a>通知</a></li>
            <li><a>帮助</a></li>
            <li><a>用户名</a></li>
        </ul>
    </div>
    <div id="content" style="height:90%;width:90%;float:left;">
<!--        筛选栏-->
        <div class="screening">
            <div style="background-color:#EEEEEE;"><h2>销售管理</h2></div>
            <div class="date-screening">
                <span style="color: #666666">日期：</span>
                <a href="javascript:void(0);" class="active">全部</a>
                <a href="javascript:void(0);" class>今天</a>
                <a href="javascript:void(0);" class>昨天</a>
                <a href="javascript:void(0);" class>本周</a>
                <a href="javascript:void(0);" class="zdy">自定义</a>
                <span class="riqi" hidden><input type="text"> - <input type="text"> <input type="button" value="确定"></span>
            </div>
            <p>
            <div class="state-screening">
                <span style="color: #666666">状态：</span>
                <a href="javascript:void(0);" class="active">全部</a>
                <a href="javascript:void(0);" class>已通过</a>
                <a href="javascript:void(0);" class>待审批</a>
                <a href="javascript:void(0);" class>已驳回</a>
            </div>
            <p>
            <div>
                编号:<input type="text">
            </div>
        </div>
<!--        显示数据栏-->
        <p>
        <div>
            <table>
                <tr>
                    <th>标题</th>
                    <th>标题</th>
                    <th>标题</th>
                    <th>标题</th>
                    <th>标题</th>
                    <th>标题</th>
                    <th>标题</th>
                </tr>
                <tr>
                    <td>数据</td>
                    <td>数据</td>
                    <td>数据</td>
                    <td>数据</td>
                    <td>数据</td>
                    <td>数据</td>
                    <td>数据</td>
                </tr>
            </table>
        </div>
    </div>

    <div id="footer" style="background-color:#FFA500;height: 20%;clear:both;text-align:center;">
        版权 © runoob.com</div>

</div>
<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
//    筛选特效
    $('.date-screening a').click(function(){//点击的时候给当前这个加上，其他的移除
        $(this).addClass("active").siblings("a").removeClass("active");
    });

    $('.state-screening a').click(function(){//点击的时候给当前这个加上，其他的移除
        $(this).addClass("active").siblings("a").removeClass("active");
    });
//日期自定义
    $('.zdy').click(function () {
        $('.riqi').show();
    });
    $('.active').click(function () {
        $('.riqi').hide();
    });

</script>
</body>
</html>

