<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/shortcut_icon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="minigame.css">
</head>
<body>
<!-- navbar -->
<div class="container-fluid mobileHide">
    <nav class="navbar navbar-expand-lg fixed-top d-none d-sm-block">
        <div class="container pt-2">
            <a class="navbar-brand" href="index.php"><img src="img/logo_big.svg"></a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item pr-4">
                    <a class="nav-link" href="#">最新活動</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="stepbystep.php">我要組電腦</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link element" style="cursor:default;">我要買零件</a>
                    <ul class="list-group">
                        <a href="component.php?cate=1" class="list-group-item list-group-item-action active">
                            中央處理器
                            <br>
                            <span>Central Processing Unit</span>
                        </a>
                        <a href="component.php?cate=2" class="list-group-item list-group-item-action">
                            主機板
                            <br>
                            <span>Motherboard</span>
                        </a>
                        <a href="component.php?cate=6" class="list-group-item list-group-item-action">
                            顯示卡
                            <br>
                            <span>Graphics Card</span>
                        </a>
                        <a href="component.php?cate=3" class="list-group-item list-group-item-action">
                            記憶體
                            <br>
                            <span>Random Access Memory</span>
                        </a>
                        <a href="component.php?cate=5" class="list-group-item list-group-item-action">
                            內接硬碟
                            <br>
                            <span>Hard Drive Disk</span>
                        </a>
                        <a href="component.php?cate=4" class="list-group-item list-group-item-action">
                            固態硬碟
                            <br>
                            <span>Solid-Slate Disk</span>
                        </a>
                        <a href="component.php?cate=7" class="list-group-item list-group-item-action">
                            電源供應器
                            <br>
                            <span>Power Supply Unit</span>
                        </a>
                        <a href="component.php?cate=8" class="list-group-item list-group-item-action">
                            機殼
                            <br>
                            <span>Computer Case</span>
                        </a>
                    </ul>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="comment.php">用戶評論</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="minigame.php">科普小遊戲</a>
                </li>
            </ul>
            <button type="login" class="login"><a href="login.php"><img src="img/user_icon.svg"></a>
            <ul class="list-group text-left">
							<a href="#" class="list-group-item list-group-item-action active">
								會員資料修改	
							</a>
							<a href="#" class="list-group-item list-group-item-action">
								訂單查詢
							</a>
							<a href="#" class="list-group-item list-group-item-action">
								購物金
							</a>
							<a href="#" class="list-group-item list-group-item-action">
								專屬優惠
							</a>
							<a href="#" class="list-group-item list-group-item-action">
								客服中心
							</a>
							<a href="logout.php" class="list-group-item list-group-item-action">
								登出
							</a>
						</ul>
            </button>

            <button type="cart" class="cart"><a href="cart.php"><img src="img/shoppingbag_icon.svg"></a></button>
        </div>
    </nav>
    <!-- 手機版 navbar -->
    <div class="row  d-md-none m_navbar">
			<nav class="navbar navbar-expand-lg fixed-top justify-content-around">
				<button class="m_menu"><img src="img/menu_mobile.svg" alt=""></button>
				<a href="index.php"><img src="img/logo_mobile.svg" alt=""></a>
				<a href="cart.php"><img src="img/shoppingbag_icon.svg"></a>
			</nav>
			<div class="dropMenu">
				<div class="fixed-top-space2"></div>
				<ul class="text-center">
					<li><a href="#">最新活動</a></li>
					<li><a href="stepbystep.php">我要組電腦</a></li>
					<li class="buy_component"><a href="#">我要買零件 <img src="img/dropdown.svg" alt="" width="12px" class="ml-1"></a>
						<div class="m_list d-md-none d-none flex-wrap flex-row">
							<div class="m_list">
								<ul class="b_list">
									<li><a href="component.php?cate=1">中央處理器</a></li>
									<li><a href="component.php?cate=2">主機板</a></li>
									<li><a href="component.php?cate=6">顯示卡</a></li>
									<li><a href="component.php?cate=3">記憶體</a></li>
								</ul>
								<ul class="b_list">
									<li><a href="component.php?cate=5">內接硬碟</a></li>
									<li><a href="component.php?cate=4">固態硬碟</a></li>
									<li><a href="component.php?cate=7">電源供應器</a></li>
									<li><a href="component.php?cate=8">機殼</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="comment.php">用戶評論區</a></li>
					<li><a href="minigame.php">科普小遊戲</a></li>
				</ul>
				<div class="social_icon">
					<img src="img/footer_facebook.png" alt="">
					<img src="img/footer_instagram.png" alt="">
					<img src="img/footer_Twitter.png" alt="">
				</div>
			</div>
		</div>
    <!-- 手機版 navbar end -->
</div>
<!-- end of navbar -->


<!-- bs4 的 雷，Navbar 設 fixed-top 下面文字會被遮住，下面是解法 -->
<div class="container-fluid blue mobileHide">
    <div class="fixed-top-space"></div>
</div>
<div class="container position-relative minigame">
    <div class="row">
        <img class="img-fluid notselect position-absolute t0l0 part1" src="images/modelkit_motherboard.svg" alt="">
        <img class="img-fluid notselect position-absolute t0l0 part1 modelkit_CPU" src="images/modelkit_CPU.svg" alt="">
        <img class="img-fluid notselect position-absolute t0l0 part1 modelkit_RAM2" src="images/modelkit_RAM2.svg"
             alt="">
        <img class="img-fluid notselect position-absolute t0l0 part1 modelkit_RAM1" src="images/modelkit_RAM1.svg"
             alt="">
        <img class="img-fluid notselect position-absolute t0l0 part1 modelkit_CPUFAN" src="images/modelkit_CPUFAN.svg"
             alt="">
        <img class="img-fluid notselect position-absolute t0l0 part1 modelkit_Graphic_Card"
             src="images/modelkit_Graphic_Card.svg" alt="">
        <div class="container">
            <img class="img-fluid notselect position-absolute case case_bg" src="images/CASE_background.svg" alt="">
            <img class="img-fluid notselect position-absolute case CASE_HDD" src="images/CASE_HDD.svg" alt="">
            <img class="img-fluid notselect position-absolute case case_bg" src="images/CASE_clip.svg" alt="">
            <img class="img-fluid notselect position-absolute case case_POWER" src="images/CASE_power.svg" alt="">
            <img class="img-fluid notselect position-absolute case case_bg" src="images/CASE_front.svg" alt="">
        </div>
        <!--drag-->
        <img id="drag_Graphic_Card" class="img-fluid position-absolute t0l0 cursorgrab"
             src="images/Drag_Graphic_Card.svg"
             alt="">
        <img id="drag_CPU" class="img-fluid position-absolute t0l0 cursorgrab" src="images/drag_CPU.svg" alt="">
        <img id="drag_RAM1" class="img-fluid position-absolute t0l0 cursorgrab" src="images/drag_RAM1.svg" alt="">
        <img id="drag_RAM2" class="img-fluid position-absolute t0l0 cursorgrab" src="images/drag_RAM2.svg" alt="">
        <img id="drag_CPUFAN" class="img-fluid position-absolute t0l0 cursorgrab" src="images/drag_CPUFAN.svg" alt="">
        <img id="drag_case_fan" class="img-fluid position-absolute t0l0 cursorgrab part1" src="images/drag_case_fan.svg"
             alt="">
        <!--drop-->
        <div id="drop_CPU" class="position-absolute"></div>
        <div id="drop_CPUFAN" class="position-absolute"></div>
        <div id="drop_RAM1" class="position-absolute"></div>
        <div id="drop_RAM2" class="position-absolute"></div>
        <div id="drop_Graphic_Card" class="position-absolute"></div>
        <canvas id="live2d" class="position-absolute live2d" width="400" height="450"></canvas>
        <div class="nextStep position-absolute case_bg">開始</div>
        <div class="message" style="opacity:0"></div>
        <div><a href="index.php"><img class="logo_minigame" src="images/logo_minigame.svg"></a></div>
    </div>
</div>
<!-- footer -->
<div class="container-fluid black mobileHide">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 d-none d-sm-block">
                    <img src="img/logo_footer.svg" class="f-logo">
                </div>
                <div class="col-12 col-sm-8 d-none d-sm-block">
                    <nav class="nav">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link f-title" href="#">顧客服務</a>
                                <ul>
                                    <li><a class="nav-link" href="#">配件/軟體加購</a></li>
                                    <li><a class="nav-link" href="#">保固方式</a></li>
                                    <li><a class="nav-link" href="#">送貨資訊</a></li>
                                    <li><a class="nav-link" href="#">退換貨方式</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link f-title" href="#">支援服務</a>
                                <ul>
                                    <li><a class="nav-link" href="#">網站導覽</a></li>
                                    <li><a class="nav-link" href="#">聯絡我們</a></li>
                                    <li><a class="nav-link" href="#">線上客服</a></li>
                                    <li><a class="nav-link" href="#">隱私權條款</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link f-title" href="#">關於我們</a>
                                <ul>
                                    <li><a class="nav-link" href="#">關於酷客</a></li>
                                    <li><a class="nav-link" href="#">最新活動</a></li>
                                    <li><a class="nav-link" href="#">我要組電腦</a></li>
                                    <li><a class="nav-link" href="#">我要買零件</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- 手機 footer 手風琴 -->
        <div class="container d-md-none mobileHide">
            <div class="tab">
                <input id="tab-one" type="checkbox" name="tabs" class="f-tab">
                <label for="tab-one" class="f-tab">顧客服務</label>
                <div class="tab-content">
                    <ul>
                        <li><a class="" href="#">配件/軟體加購</a></li>
                        <li><a class="" href="#">保固方式</a></li>
                        <li><a class="" href="#">送貨資訊</a></li>
                        <li><a class="" href="#">退換貨方式</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab">
                <input id="tab-two" type="checkbox" name="tabs" class="f-tab">
                <label for="tab-two" class="f-tab">支援服務</label>
                <div class="tab-content">
                    <ul>
                        <li><a class="" href="#">網站導覽</a></li>
                        <li><a class="" href="#">聯絡我們</a></li>
                        <li><a class="" href="#">線上客服</a></li>
                        <li><a class="" href="#">隱私權條款</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab">
                <input id="tab-three" type="checkbox" name="tabs" class="f-tab">
                <label for="tab-three" class="f-tab">關於我們</label>
                <div class="tab-content">
                    <ul>
                        <li><a class="" href="#">關於酷客</a></li>
                        <li><a class="" href="#">最新活動</a></li>
                        <li><a class="" href="#">我要組電腦</a></li>
                        <li><a class="" href="#">我要買零件</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="py-3">Copyright © 2018 PC COOKER All rights reserved.</p>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="minigame.js"></script>
<script type="text/javascript">
    var message_Path = 'live2d/'
</script>
<script type="text/javascript" src="live2d/js/live2d.js"></script>
<script type="text/javascript" src="live2d/js/message.js"></script>
<script type="text/javascript">
    loadlive2d("live2d", "live2d/model/model.json");
</script>
<script>
// mouseover 第一個active 要 remove 掉
$('.nav-item > .list-group > a').mouseover(function(){
		  $('.nav-item > .list-group > a:first-child').removeClass('active');		   
		});
		$('.list-group.text-left > a').mouseover(function(){
		  $('.list-group.text-left > a:first-child').removeClass('active');		   
		});
</script>
</body>
</html>
