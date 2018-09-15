<?php
require __DIR__ . '/__db_connect.php';
$pageName = 'cart';
$data = [];
if (!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);
    $sql = sprintf("SELECT * FROM product_book WHERE sid IN (%s)", implode(',', $keys));
    $rs = $mysqli->query($sql);
    while ($r = $rs->fetch_assoc()) {
        $r['qty'] = $_SESSION['cart'][$r['sid']];
        $data[$r['sid']] = $r;
    }
}
?>
<?php include __DIR__ . '/__html_head.php' ?>
<link rel="stylesheet" href="cart.css">
</head>
<body>
<?php include __DIR__ . '/__navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadtitle d-flex justify-content-center">
                <li id="step1">確認購物袋</li>
                <i class="fas fa-angle-double-right scaleicon"></i>
                <li id="step2">運送資訊</li>
                <i class="fas fa-angle-double-right scaleicon"></i>
                <li id="step3">付款方式</li>
                <i class="fas fa-angle-double-right scaleicon"></i>
                <a href="cartend.html" class="step4">結帳</a>
            </ul>
            <div class="accordion-container">

                <div class="set">
                    <div class="d-flex justify-content-between check_cart part1">
                        <div class="btn_title">確認購物袋</div>
                        <i class="minus"></i>
                    </div>

                    <div class="bgwhite" id="part1">
                        <div class="col-md-12">
                            <?php if (!empty($_SESSION['cart'])): ?>
                            <div class="thead-blue">
                                <div class="product_title">商品</div>
                                <div class="product_other">售價</div>
                                <div class="product_other">數量</div>
                                <div class="product_other">移除</div>
                            </div>
                            <?php
                            $total = 0;
                            foreach ($keys as $k):
                                $r = $data[$k]; //整筆資料 包含qty
                                $total += $r['Price'] * $r['qty'];
                                ?>
                                <div class="product_list " data-sid="<?= $k ?>">
                                    <div class="product_title"><?= $r['ProductName'] ?></div>
                                    <div class="product_other price" data-price="<?= $r['Price'] ?>"></div>
                                    <div class="product_other qty" data-qty="<?= $r['qty'] ?>">
                                        <select class="qty-sel qty">
                                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="product_other remove-item"><i class="fas fa-trash remove-item"></i>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="total_qty mt-3">小計 NT<span class="total-price"></span>元</div>
                        <?php else: ?>
                            <div class="alert alert-danger" role="alert">
                                購物袋目前沒有資料
                            </div>
                        <?php endif; ?>
                        <div>
                            <h4 class="buy_more">加購優惠</h4>
                            <div class="row ml-10">
                                <div class="col-md-4 col-xs-12">
                                    <img src="img/260.jpg" alt="" width="75%">
                                    <p>Razer Ornata 雨林狼蛛 機械軸薄膜式鍵盤<br>
                                        NT$2,990
                                    </p>
                                    <button class="btn btn-orange">加入購物袋</button>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <img src="img/278.jpg" alt="" width="75%">
                                    <p>AOC E2270SWHN<br>
                                        NT$2,580
                                    </p>
                                    <button class="btn btn-orange">加入購物袋</button>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <img src="img/270.jpg" alt="" width="75%">
                                    <p>Razer Taipan 太攀皇蛇 4G雷射電競滑鼠<br>
                                        NT$1,890
                                    </p>
                                    <button class="btn btn-orange">加入購物袋</button>
                                </div>
                            </div>
                            <button class="btn btn-more">看更多優惠加購商品&emsp;<i class="fas fa-angle-double-down"></i>
                            </button>
                            <div class="btns">
                                <hr>
                                <button class="btn btn-blue-outline"><a href="component.php?cate=1">繼續購物</a></button>
                                <button class="btn btn-confirm" id="next1">繼續結帳</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="set">
                    <div class="d-flex justify-content-between check_cart part2">
                        <div class="btn_title">運送資訊</div>
                        <i class="plus"></i>
                    </div>
                    <div class="bgwhite" id="part2">
                        <div class="d-flex justify-content-start deliver border-bottom">
                            <p>*收件人資料</p>
                            <div class="form-group form-check ml-5">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">同會員資料</label>
                            </div>
                            <div class="form-group form-check ml-5">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">電腦須免費組裝</label>
                            </div>
                        </div>
                        <div class="deliver">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">姓名</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="請輸入收件人姓名">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">手機</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="請輸入連絡電話">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">縣市</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>台北市</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">行政區</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>信義區</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">地址</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="請輸入寄件地址">
                            </div>
                            <hr>
                            <div class="btn-next">
                                <button class="btn btn-confirm" id="next2">繼續結帳</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="set">
                    <div class="d-flex justify-content-between check_cart part3">
                        <div class="btn_title">付款方式</div>
                        <i class="plus"></i>
                    </div>
                    <div class="bgwhite" id="part3">
                        <div class="deliver mb-6">
                            <div class="form-check atm">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                       value="option1" checked>
                                <label class="form-check-label color-gray" for="exampleRadios1">
                                    線上刷卡
                                </label>
                            </div>
                            <div class="form-check atm">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                       value="option2">
                                <label class="form-check-label color-gray" for="exampleRadios2">
                                    ATM轉帳
                                </label>
                            </div>
                            <div class="form-row" id="creditcard">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">信用卡卡號</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="請輸入16碼信用卡號">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">卡片安全碼</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="請輸入安全碼">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">持卡人姓名</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="必須與卡片上一致">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">月份</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>一月</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">年份</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>2018</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <p class="color-blue display-none" id="atm">ATM*轉帳本訂單將保留48小時，逾期本訂單將自動取消。<br>
                                匯款帳號：銀行代碼<span class="color-orange mx-2">007 / 0029501500140724</span>( 此帳號只能在本次交易中使用 )
                            </p>
                            <div class="total_qty right">結帳金額 NT<span class="total-price"></span>元</div>
                            <p>
                                PC酷客購物網購物約定條款<br>
                                PC酷客股份有限公司係依據PC酷客購物網會員服務條款及PC酷客購物網購物約定條款（以下稱本條款）
                                提供您PC酷客購物網各項數位內容暨電子商務之所有相關服務，包括但不限於現有或未來新增之各項服務。
                                歡迎您在PC酷客購物網消費並成為PC酷客購物網使用者（以下簡稱使用者）。為保障您的權益，請您先閱讀以下的約定條款，
                                當您點選「我同意」的核取方塊或在PC酷客購物網站進行訂購、兌換、付款、消費或進行相關行為（以下簡稱本服務），
                                即視為您事先已經知悉並同意遵守本約定條款的所有約定，本約定條款得隨時修訂並公告於PC酷客購物網上，
                                修訂內容自公告時起生效。
                            </p>
                            <div class="form-group form-check atm">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                <label class="form-check-label color-gray" for="exampleCheck1">我同意，以上購物須知</label>
                            </div>
                            <?php if (isset($_SESSION['user'])): ?>
                                <button onclick="location.href='cart_confirm.php'" type="button"
                                        class="btn btn-danger">確認結帳
                                </button>
                            <?php else: ?>
                                <button onclick="location.href='login.php'" type="button" class="btn btn-danger">登入
                                </button>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<?php include __DIR__ . '/__footer.php' ?>


<script>

    //accordion
    $(".set > .check_cart").on("click", function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".bgwhite").slideUp(200);
            $(".set > .check_cart > i").removeClass("minus").addClass("plus");
        } else {
            $(".set >.check_cart > i").removeClass("minus").addClass("plus");
            $(this).find("i").removeClass("plus").addClass("minus");
            $(this).addClass("active");
            $(".bgwhite").slideUp(200);
            $(this).siblings(".bgwhite").slideDown(200);
        }
    });

    $("#step1").click(function () {
        $("#part1").slideDown(200);
        $(".part1 > i").removeClass("plus").addClass("minus");
        $("#part2").slideUp(200);
        $(".part2 > i").removeClass("minus").addClass("plus");
        $("#part3").slideUp(200);
        $(".part3 > i").removeClass("minus").addClass("plus");
    });
    $("#step2").click(function () {
        $("#part2").slideDown(200);
        $(".part2 > i").removeClass("plus").addClass("minus");
        $("#part1").slideUp(200);
        $(".part1 > i").removeClass("minus").addClass("plus");
        $("#part3").slideUp(200);
        $(".part3 > i").removeClass("minus").addClass("plus");
    });
    $("#step3").click(function () {
        $("#part3").slideDown(200);
        $(".part3 > i").removeClass("plus").addClass("minus");
        $("#part2").slideUp(200);
        $(".part2 > i").removeClass("minus").addClass("plus");
        $("#part1").slideUp(200);
        $(".part1 > i").removeClass("minus").addClass("plus");
    });
    $("#next1").click(function () {
        $("#part2").slideDown(200);
        $(".part2 > i").removeClass("plus").addClass("minus");
        $("#part1").slideUp(200);
        $(".part1 > i").removeClass("minus").addClass("plus");
    });
    $("#next2").click(function () {
        $("#part3").slideDown(200);
        $(".part3 > i").removeClass("plus").addClass("minus");
        $("#part2").slideUp(200);
        $(".part2 > i").removeClass("minus").addClass("plus");
    });

    //信用卡 atm切換
    $("#exampleRadios1").click(function () {
        $("#creditcard").removeClass("display-none");
        $("#atm").addClass("display-none");
    });
    $("#exampleRadios2").click(function () {
        $("#creditcard").addClass("display-none");
        $("#atm").removeClass("display-none");
    });

</script>
<script>
    var trashbin = $('.remove-item');
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
    //一開始設定正確的數量
    p_items.each(function () {
        var sel = $(this).find('.qty-sel');
        sel.val($(this).find('.qty').attr('data-qty'));
    });
    p_items.find('.qty-sel').change(function () {
        var tr = $(this).closest('div').parent();
        var sid = tr.attr('data-sid');
        var qty = $(this).val();
        var price = tr.find('Price').attr('data-price');
        tr.find('.qty').attr('data-qty', qty);
        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            tr.find('td:last-child').text(qty * price);
            window.location.reload();
            changeQty(data);
            calTotal();
        }, 'json');
    });
    trashbin.click(function () {
        var tr = $(this).closest('div').parent();
        var sid = tr.attr('data-sid');
        $.get('add_to_cart.php', {sid: sid}, function (data) {
            tr.remove();
            changeQty(data);
            calTotal();
        }, 'json');
    });


    (function () {
        $('.price').each(function () {
            dallar = dallorCommas($(this).attr('data-price'));
            $(this).text(dallar);
        });
    })();
</script>


<?php include __DIR__ . '/__html_foot.php' ?>

