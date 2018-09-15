<?php
require __DIR__ . '/__db_connect.php';
$pageName = 'product_list';
$params = [];
$m_rs = $mysqli->query("SELECT * FROM categories");
$m_raw = [];
$m_ar = [];
while ($r = $m_rs->fetch_assoc()) {
    $m_raw[] = $r;
}
foreach ($m_raw as $k => $v) {
    if ($v['parent_sid'] == 0) {
        $m_ar[$v['sid']] = $v;
    } else {
        if (!empty($m_ar[$v['parent_sid']])) {
            $m_ar[$v['parent_sid']]['children'][$v['sid']] = $v;
        }
    }
}
//print_r($m_ar);
$per_page = 8;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$where = " WHERE 1 ";
if (!empty($cate)) {
    $where .= " AND category_sid=$cate ";
    $params['cate'] = $cate;
}
if (!empty($_GET['label'])) {
    $label = $_GET['label'];
    $where .= " AND `Label`='$label' ";
    $params['label'] = $label;
}
if (!empty($_GET['chipsets'])) {
    $chipsets = $_GET['chipsets'];
    $where .= " AND `Chipsets`='$chipsets' ";
    $params['chipsets'] = $chipsets;
}
if (!empty($_GET['chip'])) {
    $chip = $_GET['chip'];
    $where .= " AND `Chip`='$chip' ";
    $params['chip'] = $chip;
}
$total_sql = "SELECT COUNT(1) FROM product_book $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0];
$total_pages = ceil($total_rows / $per_page);
$product_sql = sprintf("SELECT * FROM product_book $where LIMIT %s,%s", ($page - 1) * $per_page, $per_page);
$product_rs = $mysqli->query($product_sql);
?>
<?php include __DIR__ . '/__html_head.php' ?>
	<link rel="stylesheet" type="text/css" href="component.css">
</head>
<body>
<?php include __DIR__ . '/__navbar.php' ?>
<!-- components_buy -->
<div class="container mt-8 mb-3">
    <div class="row">
        <!-- search -->
        <div class="col-md-3 col-xs-12" >
            <div class="moreSearchBox">

                <div class="moreSearchArea">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.php" class="darkblue">首頁</a></li> -->
                            <li class="breadcrumb-item"><a href="component.php?cate=1" class="darkblue">我要買零件</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $m_ar[$cate]['name'] ?></li>
                        </ol>
                    </nav>
                    <div class="selectArea">
                        <select class="form-control" onChange="location = this.options[this.selectedIndex].value;">
                            <option value="?cate=1" <?= $cate==1 ? 'selected' : '' ?>>中央處理器</option>
                            <option value="?cate=2" <?= $cate==2 ? 'selected' : '' ?>>主機板</option>
                            <option value="?cate=3" <?= $cate==3 ? 'selected' : '' ?>>記憶體</option>
                            <option value="?cate=4" <?= $cate==4 ? 'selected' : '' ?>>固態硬碟</option>
                            <option value="?cate=5" <?= $cate==5 ? 'selected' : '' ?>>內接硬碟</option>
                            <option value="?cate=6" <?= $cate==6 ? 'selected' : '' ?>>顯示卡</option>
                            <option value="?cate=7" <?= $cate==7 ? 'selected' : '' ?>>電源供應器</option>
                            <option value="?cate=8" <?= $cate==8 ? 'selected' : '' ?>>機殼</option>
                        </select>
                    </div>
                </div>

                <div class="moreSearchArea">                    
                    <!-- 當類別是1 的時候 秀出 value 是 Intel 的，false就空字串 -->
                    <?php if($cate==1): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <a type="button" class="btn btn-lightblue btn-size2  <?= $chip=='Intel' ? 'btn_active' : '' ?>"   href="?cate=1&chip=Intel">Intel 英特爾</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $chip=='AMD' ? 'btn_active' : '' ?>"  href="?cate=1&chip=AMD">AMD 超微</a>	
                    
                    <?php elseif($cate==2): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <!-- 點了 asus 之後 應該要跳出 label（廠牌） 都是 asus 的商品 -->
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='ASUS' ? 'btn_active' : '' ?> "  href="?cate=2&label=ASUS">ASUS華碩</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='GIGABYTE' ? 'btn_active' : '' ?> "  href="?cate=2&label=GIGABYTE">GIGABYTE技嘉</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='MSI' ? 'btn_active' : '' ?> "   href="?cate=2&label=MSI">MSI微星</a>

                    <?php elseif($cate==3): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='ADATA' ? 'btn_active' : '' ?>"  href="?cate=3&label=ADATA">ADATA威剛</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Kingston' ? 'btn_active' : '' ?>"  href="?cate=3&label=Kingston">Kingston金士頓</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Micron' ? 'btn_active' : '' ?>" href="?cate=3&label=Micron">Micron美光</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Transcend' ? 'btn_active' : '' ?>" href="?cate=3&label=Transcend">Transcend創見</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='UMAX' ? 'btn_active' : '' ?>" href="?cate=3&label=UMAX">UMAX世成</a>
                    <?php elseif($cate==4): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='ADATA' ? 'btn_active' : '' ?>" href="?cate=4&label=ADATA">ADATA威剛</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Kingston' ? 'btn_active' : '' ?>" href="?cate=4&label=Kingston">Kingston金士頓</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='SanDisk' ? 'btn_active' : '' ?>" href="?cate=4&label=SanDisk">SanDisk晟碟</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Micron' ? 'btn_active' : '' ?>" href="?cate=4&label=Micron">Micron美光</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='WD' ? 'btn_active' : '' ?>" href="?cate=4&label=WD">WD威騰</a>
                    <?php elseif($cate==5): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Seagate' ? 'btn_active' : '' ?>" href="?cate=5&label=Seagate">Seagate希捷</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Toshiba' ? 'btn_active' : '' ?>" href="?cate=5&label=Toshiba">Toshiba東芝</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='WD' ? 'btn_active' : '' ?>" href="?cate=5&label=WD">WD威騰</a>
                    <?php elseif($cate==6): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='ASUS' ? 'btn_active' : '' ?>" href="?cate=6&label=ASUS">ASUS華碩</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='GIGABYTE' ? 'btn_active' : '' ?>" href="?cate=6&label=GIGABYTE">GIGABYTE技嘉</a>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='MSI' ? 'btn_active' : '' ?>" href="?cate=6&label=MSI">MSI微星</a>
                    <?php elseif($cate==7): ?>
                    <p class="mb-2 mt-4 dark">廠牌</p>
                    <a type="button" class="btn btn-lightblue btn-size2 <?= $label=='Seasonic' ? 'btn_active' : '' ?>" href="?cate=7&label=Seasonic">海韻</a>
                    <?php elseif($cate==8): ?>

                    <?php endif; ?>
                </div>

                <div class="moreSearchArea">
                    <?php if($cate==1): ?>
                    <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="5000元以下">5000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="5000元以上">5000元以上</a>
                    <?php elseif($cate==2): ?>
                    <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="3000元以下" >3000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="3000到5000">3000到5000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="5000元以上">5000元以上</a>
                     <?php elseif($cate==3): ?>
                     <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="2000元以下">2000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="2000到4000">2000到4000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="4000元以上">4000元以上</a>	
                    <?php elseif($cate==4): ?>
                    <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="2000元以下">2000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="2000到5000">2000到5000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="5000元以上">5000元以上</a>	
                    <?php elseif($cate==5): ?>
                    <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="3000元以下">3000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="3000到5000">3000到5000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="5000元以上">5000元以上</a>	                        
                    <?php elseif($cate==6): ?>
                    <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="3000元以下">3000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="3000到6000">3000到6000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="6000到9000">6000到9000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="9000到12000">9000到12000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="12000到18000">12000到18000</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="18000元以上">18000元以上</a>	
                    <?php elseif($cate==7): ?>
                    <?php elseif($cate==8): ?>
                    <p class="mb-2 mt-4 dark">價格</p>
                    <a type="button" class="btn btn-lightblue btn-size2" value="2000元以下">2000元以下</a>
                    <a type="button" class="btn btn-lightblue btn-size2" value="2000元以上">2000元以上</a>
                    <?php endif; ?>	
                </div>

                <div class="moreSearchArea">
                   <?php if($cate==1 && !isset($chip)): ?>
                        <p class="mb-2 mt-4 dark">CPU類型</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="Kaby Lake">Kaby Lake</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="Coffee Lake">Coffee Lake</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="Ryzen 1000">Ryzen 1000</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="Ryzen 2000">Ryzen 2000</a>
                    <?php elseif($cate==1 && $chip=='Intel'): ?>
                        <p class="mb-2 mt-4 dark">CPU類型</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="Kaby Lake">Kaby Lake</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="Coffee Lake">Coffee Lake</a>
                    <?php elseif($cate==1 && $chip=='AMD'): ?>
                        <p class="mb-2 mt-4 dark">CPU類型</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="Ryzen 1000">Ryzen 1000</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="Ryzen 2000">Ryzen 2000</a>
                    <?php elseif($cate==2): ?>
                        <p class="mb-2 mt-4 dark">Intel晶片組</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="H110" href="?cate=2&label=MSI&chipsets=H110">H110</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="B250">B250</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="B360">B360</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="Z370">Z370</a>
                    	<p class="mb-2 mt-4 dark">AMD晶片組</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="A320">A320</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="B350">B350</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="X370">X370</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="X470">X470</a>		
                    <?php elseif($cate==3): ?>
                        <p class="mb-2 mt-4 dark">記憶體大小</p>		
                        <a type="button" class="btn btn-lightblue btn-size3" value="4G">4G</a>                     	
                        <a type="button" class="btn btn-lightblue btn-size3" value="8G">8G</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="16G">16G</a>
                     <?php elseif($cate==4): ?>
                        <p class="mb-2 mt-4 dark">容量大小</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="<512G"><512G</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="512G~1TB">512G~1TB</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value=">1TB">>1TB</a>
                     <?php elseif($cate==5): ?>
                        <p class="mb-2 mt-4 dark">容量大小</p>		
                        <a type="button" class="btn btn-lightblue btn-size2" value="<2TB"><2TB</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="2TB~4TB">2TB~4TB</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value=">4TB">>4TB</a>

                     <?php elseif($cate==6): ?>
                        <p class="mb-2 mt-4 dark">NVIDIA顯示晶片組</p>		
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1030">GT1030</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1050">GT1050</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1050Ti">GT1050Ti</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1060">GT1060</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1060Ti">GT1060Ti</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1070">GT1070</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1070Ti">GT1070Ti</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1080">GT1080</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="GT1080Ti">GT1080Ti</a>			
                        <p class="mb-2 mt-4 dark">AMD顯示晶片組</p>		
                        <a type="button" class="btn btn-lightblue btn-size3" value="R7 240">R7 240</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="R7 250">R7 250</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="RX550">RX550</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="RX560">RX560</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="RX570">RX570</a>
                        <a type="button" class="btn btn-lightblue btn-size3" value="RX580">RX580</a>

                     <?php elseif($cate==7): ?>
                        <p class="mb-2 mt-4 dark">瓦數</p>
                        <a type="button" class="btn btn-lightblue btn-size2" value="400W">400W</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="450W">450W</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="500W">500W</a>
                        <a type="button" class="btn btn-lightblue btn-size2" value="600W">600W</a>

                     <?php elseif($cate==8): ?>
                     


                    <?php endif; ?>                     
                </div>
                                            
            </div>
        </div>
        
        
        <!-- mobile-search -->
        <div class="col-md-12 mobile-search">
                <div class="row">
                    <ul class="ul-width">
                        <button class="searchbar mb-3">快速搜尋</button>
                        <li>
                            <select class="form-control mobile-select mb-1"  onChange="location = this.options[this.selectedIndex].value;">
                                <option value="?cate=1" <?= $cate==1 ? 'selected' : '' ?>>中央處理器</option>
                                <option value="?cate=2" <?= $cate==2 ? 'selected' : '' ?>>主機板</option>
                                <option value="?cate=3" <?= $cate==3 ? 'selected' : '' ?>>記憶體</option>
                                <option value="?cate=4" <?= $cate==4 ? 'selected' : '' ?>>固態硬碟</option>
                                <option value="?cate=5" <?= $cate==5 ? 'selected' : '' ?>>內接硬碟</option>
                                <option value="?cate=6" <?= $cate==6 ? 'selected' : '' ?>>顯示卡</option>
                                <option value="?cate=7" <?= $cate==7 ? 'selected' : '' ?>>電源供應器</option>
                                <option value="?cate=8" <?= $cate==8 ? 'selected' : '' ?>>機殼</option>
                            </select>
                        </li>
                        <li>
                            <select class="form-control mobile-select mb-1">
                                <?php if($cate==1): ?>
                                <option value="1">Intel 英特爾</option>
                                <option value="2">AMD 超微</option>
                                <?php elseif($cate==2): ?>
                                <option value="3">ASUS華碩</option>
                                <option value="4">GIGABYTE技嘉</option>
                                <option value="5">MSI微星</option>
                                <?php elseif($cate==3): ?>
                                <option value="6">ADATA威剛</option>
                                <option value="7">Kingston金士頓</option>
                                <option value="8">Micron美光</option>
                                <option value="9">Transcend創見</option>
                                <option value="10">UMAX世成</option>
                                <?php elseif($cate==4): ?>
                                <option value="6">ADATA威剛</option>
                                <option value="7">Kingston金士頓</option>
                                <option value="11">SanDisk晟碟</option>
                                <option value="8">Micron美光</option>
                                <option value="12">WD威騰</option>
                                <?php elseif($cate==5): ?>
                                <option value="13">Seagate希捷</option>
                                <option value="14">Toshiba東芝</option>
                                <option value="12">WD威騰</option>
                                <?php elseif($cate==6): ?>
                                <option value="3">ASUS華碩</option>
                                <option value="4">GIGABYTE技嘉</option>
                                <option value="5">MSI微星</option>
                                <?php elseif($cate==7): ?>
                                <option value="13">海韻</option>
                                <?php elseif($cate==8): ?>
                                <?php endif; ?> 
                            </select>
                        </li>
                        <li>
                            <select class="form-control mobile-select mb-3">
                                <option value="1">1000以下</option>
                                <option value="2">1000~3000</option>
                                <option value="3">3000~5000</option>
                                <option value="4">5000~8000</option>
                                <option value="5">8000元以上</option>
                            </select>
                        </li>
                        <li>
                            <button class="search-btn">搜尋</button>
                        </li>
                    </ul>
            </div>
        </div>
        <!--product-->
        <div class="col-md-9 col-xs-12">
            <div class="row">
                <?php while ($r = $product_rs->fetch_assoc()): ?>
                    <div class="col-md-3 <?= $r['Chipsets'] ?>">
                        <div class="productitem">
                            <div class="producteach card" data-sid="<?= $r['sid'] ?>">
                                <div class="producteach_img" data-sid="<?= $r['sid'] ?>"><img src="img/small/<?= $r['sid'] ?>.jpg" alt=""></div>
                                <a href="detail.php?sid=<?= $r['sid'] ?>"><?= $r['ProductName'] ?></a>
                                <h3>NT$<?= $r['Price'] ?></h3>
                                <div class="productitem_btn cart_btn">加入購物袋</div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
                
            <div class="row d-flex justify-content-center mt-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link"
                                href="?page=<?= $i ?>&<?= http_build_query($params) ?>"><?= $i ?></a>
                            </li>
                        <?php endfor ?>
                    </ul>
                </nav>
            </div>

        </div>

        
                                                     
    </div>
</div>
    
<?php include __DIR__ . '/__footer.php' ?> 
<script>
        $('.cart_btn').click(function () {
            var card = $(this).closest('.card');
            var sid = card.attr('data-sid');
            var qty = 1;
            console.log(`sid : ${sid}`);
            $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
                console.log(data)
                changeQty(data);
            }, 'json');
        })
</script>
<script>
        $(".searchbar").click(function(){
            $(".mobile-search").toggleClass("mobile-search-active");
        });
</script>

<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
     $('.cart_btn').click(function(){
         swal({
            title: "商品已成功加入購物袋",
            text: false,
            icon: "success",
            timer: 1500, 
            button: false,
        });
     });
</script>

<?php include __DIR__ . '/__html_foot.php' ?>