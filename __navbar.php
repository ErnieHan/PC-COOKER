	<!-- navbar -->
	<div class="container-fluid">		
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
					<li class="nav-item pr-4" style="cursor:default;">
						<a class="nav-link element">我要買零件</a>
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
						<a class="nav-link" href="comment.php">用戶評論區</a>
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
					<li><a href="login.php">會員登入</a></li>
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
	<div class="container-fluid blue">
		<div class="fixed-top-space"></div>
	</div>
	<script type="text/javascript">
		// mouseover 第一個active 要 remove 掉
		$('.nav-item > .list-group > a').mouseover(function(){
		  $('.nav-item > .list-group > a:first-child').removeClass('active');		   
		});
		$('.list-group.text-left > a').mouseover(function(){
		  $('.list-group.text-left > a:first-child').removeClass('active');		   
		});

		// 手機版 menu 
        $('.m_menu').click(function(){
        	
        	if ($('.dropMenu').hasClass('dropMenu-collapsed')) {
        		$('.dropMenu').removeClass('dropMenu-collapsed');
        		$('.m_menu > img').attr('src','img/menu_mobile.svg');
        	} 
        	else {
        		$('.dropMenu').addClass('dropMenu-collapsed');
	        	$('.m_menu > img').attr('src','img/clear.svg');
        	}
		// 購買零件下拉選單
    $('.buy_component > a').click(function(){
	$(this).next('.m_list').toggleClass('d-none');
	$('li.buy_component > a > img').toggleClass('m_dpn');
	if($('.m_list').hasClass('d-none')){
		$('li.buy_component > a').removeClass('active2');
	}else{
		$('li.buy_component > a').addClass('active2');
	}
   });
        });
	</script>
	<script>
    var changeQty = function (obj) {
        var total = 0;
        for (var s in obj) {
            total += obj[s];
        }
        $('#qty-badge').text(total)
    }
    $.get('add_to_cart.php', function (data) {
        changeQty(data);
    }, 'json');
</script>
