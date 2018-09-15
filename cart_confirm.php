<?php
require __DIR__ . '/__db_connect.php';
$pageName = 'cart';
$data = [];
$total = 0;
if (!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);
    $sql = sprintf("SELECT * FROM product_book WHERE sid IN (%s)", implode(',', $keys));
    $rs = $mysqli->query($sql);
    while ($r = $rs->fetch_assoc()) {
        $r['qty'] = $_SESSION['cart'][$r['sid']];
        $data[$r['sid']] = $r;
        $total += $r['qty']*$r['Price'];
    }
}
?>
<?php include __DIR__. '/__html_head.php' ?>
<link rel="stylesheet" type="text/css" href="cart.css">
  </head>
  <body>
    <?php include __DIR__. '/__navbar.php' ?>
    <!-- cart -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadtitle d-flex justify-content-center">
                    <a href="#" class="active">確認購物袋</a><i class="fas fa-angle-double-right scaleicon"></i>
                    <a href="#">運送資訊</a><i class="fas fa-angle-double-right scaleicon"></i>
                    <a href="#">付款方式</a><i class="fas fa-angle-double-right scaleicon"></i>
                    <a href="#" class="focus">結帳</a>
                </div>
				<div class="d-flex justify-content-center check_cart">
					<div class="btn_title">購物完成</div>
				</div>
				<div class="bgwhite mb-5" style="display:block; background: transparent">
					<div class="col-md-12">
						<div class="cart_end">
							<div class="color-blue">訂單編號:<span class="color-dark">20180912034478</span></div>
							<div class="color-blue">日期:<span class="color-dark">2018-09-12</span></div>
							<div class="color-blue">總價:<span class="color-dark">NT$<span class="total-price"><?=$total?></span></span></div>
							<div class="color-blue">訂單狀態:<span class="color-dark">待付款</span></div>
						</div>
					</div>
					<button class="btn btn-ok">OK</button>
				</div>
            </div>
        </div>
    </div>
<script>
    var dallorCommas = function (n) {
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };
    var calTotal = function () {
        var total = 0;
        var items = $('.product_list');
        if (items.length == 0) {
            window.location.reload();
            return;
        }
        items.each(function () {
            total += $(this).find('.price').attr('data-price') * $(this).find('.qty').attr('data-qty');
        });

        $('.total-price').text(dallorCommas(total));
        var price = $(this).find('.price').attr('data-price');
        // $('.price').text(dallorCommas(price));
    };
    var p_items = $('.product_list');
    if (p_items.length) {
        calTotal();
    }

</script>
<script>
    $(".btn-ok").click(function(){
        location.href="index.php"
    });
</script>
<!-- footer -->
<?php include __DIR__ . '/__footer.php' ?> 			
<?php include __DIR__ . '/__html_foot.php' ?>