<?php

   /*include_once('config.php');
   
   include_once('conn.php');*/
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--引入reset.css-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- 引入style.css -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- 引入top.css -->
    <link type="text/css" rel="stylesheet" href="css/top.css">
    <!-- 引入login.css -->
    <link type="text/css" rel="stylesheet" href="css/login.css">
    <!-- 引入swiper.css -->
    <link rel="stylesheet" type="text/css" href="css/swiper-3.3.1.min.css">
</head>
<body>
<div class="top">
    <div class="title">
        <ul class="clearfix">
            <li><a href="Sy_index2.0.php">MU奇迹</a> </li>
            <li><a href="reg.php"></a> </li>
            <li><a href="download.php">游戏下载</a> </li>
            <li><a href="login.php"></a> </li>
            <li><a href="getPw.php"></a> </li>
            <li><a href="getintro.php">积分充值</a> </li>
            <li><a href="ToRmb.php"></a> </li>
            <li><a href="shop.php">装备商城</a> </li>
        </ul>
        <div class="logo"><img src="img/logo.png" alt=""></div>
    </div>
</div>
<div class="medium clearfix">
    <div class="left">
        <div class="begin">
            <object type="application/x-shockwave-flash" width="246" height="136">
                <param name="movie" value="img/begin.swf">
                <param name="allowScriptAccess" value="always">
                <param name="wmode" value="transparent">
                <embed src="img/begin.swf" type="application/x-shockwave-flash" wmode="transparent" allowscriptaccess="always" style="width:246px;height:136px;">
            </object>
        </div>
        <!-- 登录 -->
        <div class="left_one" id="lofinDiv" >
            <div class="l_one">
                <div class="dengluhou" style="display:none">
                    <h3>
                        登录
                        <a href="LoginSession.php?out=out" class="tui">退出登录</a>
                    </h3>
                    <p>用户ID:<span><!-- <?php echo $_SESSION['name'];?> --></span></p>
                    <a href="#" class="game">开始游戏</a>
                    <div class="dengluhou_foot">
                        <a href="register.php" class="manage" >账号管理</a>
                        <span>|</span>
                        <a href="download.php" class="buy">充值中心</a>
                    </div>
                </div>
                <div class="dengluqian">
                <form onsubmit="javascript:return checkLogin();" id="form2" name="form2" method="post" action="main.php">
                    <h3>登录</h3>
                    <div class="errorplace"></div>
                    <div class="denglu">
                        <button id="Login" name="Login" class="submit" type="submit" >登錄</button>
                        <div class="input">
                            <input class="in_text" type="text" id="username" name="username" placeholder="用戶名">
                            <input type="password" class="in_text2" id="password" name="password" placeholder="密碼">
                        </div>
                        <div style="clear: both"></div>
                    </div>        
                </form>
                <div class="re">
                    <a href="reg.php" class="register" >游戏註冊</a>
                    <span>|</span>
                    <a href="getPw.php" class="download">找回密码</a>
                </div>
            </div>
            </div>
        </div>
	    <!--積分榜-->
        <div class="left_four">
            <div class="four_ban"><a href="#">更多</a> 等級排行榜</div>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>序号</th>
                        <th>名字</th>
                        <th>等级</th>
                        <th>职业</th>
                        <th>PK状态</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--游戲玩法-->
        <div class="left_three">        
	    <div class="three_ban"><a href="#">更多</a> 游戲玩法</div>
            <ul id="play" style="list-style: none;padding-left: 0px;"></ul>
        </div>
        <!--玩家交流群-->
        <div class="left_five" id="qq">
            <div class="five_ban"><a href="#">更多</a> 玩家交流群</div>        
        </div>
    </div>
    <div class="right_in">
        <div class="right_one">
            <!--服務器情況-->
            <div class="one_right">
                <div class="service">
                    <h3 id="ser">服務器情況</h3>
                    <div class="ser_dec">
                        <p class="name">
                            <span class=" icon icon1"></span>
                            <span>游戲名稱：</span>
                            <span></span>
                        </p>
                        <p class="version">
                            <span class=" icon icon2"></span>
                            <span>游戲版本：</span>
                            <span></span>
                        </p>
                        <p class="index">
                            <span class=" icon icon3"></span>
                            <span>電信主頁：</span>
                            <span></span>
                        </p>
                        <p class="version">
                            <span class=" icon icon4"></span>
                            <span>客服ＱＱ：</span>
                            <span></span>
                        </p>                     
                    </div>
                </div>
            </div>
            	<div class="one_left">
                <!--輪播圖-->
		     <!-- <object type="application/x-shockwave-flash" data="pic/dg_maincha.swf" width="466" height="186" wmode="transparent" quality="high" bgcolor="#FFFFFF" allowscriptaccess="always" allowfullscreen="false">
             </object> -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">广告位</div>
                            <div class="swiper-slide">广告位</div>
                            <div class="swiper-slide">广告位</div>
                        </div>
                        <!-- 如果需要分页器 -->
                        <div class="swiper-pagination"></div>
                        
                        <!-- 如果需要导航按钮 -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
        </div>
	<!--移動文字-->
	<div class="right_five">
             <marquee direction="left" behavior=scroll  scrollamount=7 scrolldelay=1 onmouseover='this.stop()' onmouseout='this.start()' valign="middle" class="marquee">
		<a href="reg.php">【亂世首區】今日17點開放體驗!19點開放轉生！趕快注冊吧~~！</a>
	     </marquee>        
	</div>
        <div class="right_two">
            <div class="two_ban">
                <a href="#">更多</a>
                <div class="tit">
                    公告
                </div>
            </div>
            <div class="rtwo_foot">
                <div class="r_right">
		<ul id="news">
		</ul>
                </div>
                <div class="r_left">
                    <div class="tupp">
                        <a href="#"><img src="images/bottom-video.gif" style="width:100%"/> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_three" style="height:400px">
            <div class="three_ban">
                <a href="#">更多</a>
                <div class="tit">
                    游戲介紹
                </div>
            </div>
            <div class="rthree_foot">
                <div class="rr_right">
                    <ul id="GMintr">
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="right_four">
            <div class="four_ban">
                <a href="#">更多</a>
                <div class="tit">
                    截圖
                </div>
            </div>
            <div class="four_pic" id="images">
                
            </div>
        </div>
    </div>
</div>
<?php
 include_once ("footer.html")
?>


    <!-- 引入jQuery -->
    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <!-- 引入jquery.validate -->
    <script type="text/javascript" src="scripts/jquery.validate.js"></script>
    <!-- 引入swiper.js -->
    <script type="text/javascript" src="scripts/swiper-3.3.1.jquery.min.js"></script>
    <!-- 引入mugame.js -->
    <script type="text/javascript" src="scripts/mugame.js"></script>
    <script>        
      var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        
        // 如果需要分页器
        pagination: '.swiper-pagination',
        
        // 如果需要前进后退按钮
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
      })        
    </script>
</body>
</body>
</html>