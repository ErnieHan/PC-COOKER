<?php
require __DIR__ . '/__db_connect.php';
$pageName = 'stepbystep';
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
    <link rel="stylesheet" type="text/css" href="stepbystep.css">
    </head>
    <body>
<!-- navbar -->
<?php include __DIR__ . '/__navbar.php' ?>
<!-- end of navbar -->
<!-- stepbystep 上面區塊 -->
<div class="stepbystep_100vw">
    <div class="stepbystep_top_container">
        <!-- 下方浮出的選單 -->
        <div class="li_down">
            <div class="li_down_left">
                <ul class="down_ul">
                    <li class="software_li down_li down_software"><img src="img/li01-down.svg"><br>軟體</li>
                    <li class="cpu_li down_li down_cpu"><img src="img/li02-down.svg"><br>中央處理器</li>
                    <li class="mb_li down_li down_mb"><img src="img/li03-down.svg"><br>主機板</li>
                    <li class="ram_li down_li down_ram"><img src="img/li04-down.svg"><br>記憶體</li>
                    <li class="gpu_li down_li down_gpu"><img src="img/li05-down.svg"><br>顯示卡</li>
                    <li class="hdd_li down_li down_hdd"><img src="img/li06-down.svg"><br>硬碟</li>
                    <li class="power_li down_li down_power"><img src="img/li07-down.svg"><br>電源供應器</li>
                    <li class="case_li down_li down_case"><img src="img/li08-down.svg"><br>機殼</li>
                </ul>
            </div>
            <div class="li_down_right">
                <div class="d-flex">
                    <p>目前合計：NT$</p>
                    <div class="price_text"></div>
                </div>
                <a href="cart.php" 
                    data-sids="15,46,101,129,170,198,204" 
                    data-cpusid="15" 
                    data-mbsid="46" 
                    data-ramsid="101" 
                    data-ssdsid="129" 
                    data-gpusid="170" 
                    data-pwrsid="198" 
                    data-casesid="204" 
                    class="package_btn">
                    <div class="li_shop"><h5>加入購物袋</h5></div>
                </a>
            </div>
        </div>
        <h1>我要組電腦</h1>
        <h3>從主機板、顯示卡一步一步選購最符合你的需求<br>
            最佳最嚴謹的篩選條件，讓您不會組裝失誤</h3>
        <div class="process">
            <ul class="stepbystep_items">
                <li class="software_li"><img src="img/li01.svg"> 軟體</li>
                <li class="cpu_li"><img src="img/li02.svg"> 中央處理器</li>
                <li class="mb_li"><img src="img/li03.svg"> 主機板</li>
                <li class="ram_li"><img src="img/li04.svg"> 記憶體</li>
                <li class="gpu_li"><img src="img/li05.svg"> 顯示卡</li>
                <li class="hdd_li"><img src="img/li06.svg"> 硬碟</li>
                <li class="power_li"><img src="img/li07.svg"> 電源供應器</li>
                <li class="case_li"><img src="img/li08.svg"> 機殼</li>
            </ul>
            <div class="point_container">
                <div class="point point_software"><img src="img/point.svg"></div>
            </div>
        </div>
        <ul class="stepbystep_items_mobile">
            <li class="software_li"><img src="img/li01.svg"></li>
            <li class="cpu_li"><img src="img/li02.svg"></li>
            <li class="mb_li"><img src="img/li03.svg"></li>
            <li class="ram_li"><img src="img/li04.svg"></li>
            <li class="gpu_li"><img src="img/li05.svg"></li>
            <li class="hdd_li"><img src="img/li06.svg"></li>
            <li class="power_li"><img src="img/li07.svg"></li>
            <li class="case_li"><img src="img/li08.svg"></li>
        </ul>
    </div>
</div>
<!-- stepbystep 軟體分類挑選 -->

<div class="stepbystep_software_container">
    <div class="next_btn next_cpu">
            <img src="img/next.svg">
    </div>
    <h1>請選擇平時使用電腦的用途？</h1>
    <div class="software_01">
        <div class="three_software music">
            <div class="software_img"><img src="img/software_music.svg"></div>
            <h2>影音編輯</h2>
            <h3>Video Editor</h3>
            <!-- <a  href="" class="learnmore_btn">瞭解更多</a> -->
        </div>
        <div class="three_software book">
            <div class="software_img"><img src="img/software_book.svg"></div>
            <h2>文書處理</h2>
            <h3>Document Processing</h3>
            <!-- <a href="" class="learnmore_btn">瞭解更多</a> -->
        </div>
        <div class="three_software paint">
            <div class="software_img"><img src="img/software_paint.svg"></div>
            <h2>繪圖設計</h2>
            <h3>Design&Draw</h3>
            <!-- <a href="" class="learnmore_btn">瞭解更多</a> -->
        </div>
    </div>
    <div class="rem_music">
        <div class="rem_text">
            <h2>影音編輯推薦</h2>
            <h3>如果平時你是使用AE特效居多的工作者，以下是推薦您的套餐組合</h3>
            <!-- <img class="rem_cancel" src="img/rem_cancel.svg"> -->
        </div>
        <div class="rem_music_flex">
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-3.png" width="200px"></div>
                <p>影音編輯超值組合一號餐</p>
                <h4>NT$49,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-4.png" width="200px"></div>
                <p>影音編輯超值組合二號餐</p>
                <h4>NT$55,390</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-5.png" width="200px"></div>
                <p>影音編輯超值組合三號餐</p>
                <h4>NT$59,990</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
        </div>
    </div>

    <div class="rem_book">
        <div class="rem_text">
            <h2>文書處理推薦</h2>
            <h3>如果平時你是使用文書處理居多的工作者，以下是推薦您的套餐組合</h3>
        </div>
        <div class="rem_music_flex">
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-6.png" width="200px"></div>
                <p>文書處理超值組合一號餐</p>
                <h4>NT$15,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-7.png" width="200px"></div>
                <p>文書處理超值組合二號餐</p>
                <h4>NT$19,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-8.png" width="200px"></div>
                <p>文書處理超值組合三號餐</p>
                <h4>NT$22,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
        </div>
    </div>

    <div class="rem_paint">
        <div class="rem_text">
            <h2>繪圖設計推薦</h2>
            <h3>如果平時你是使用繪圖軟體居多的工作者，以下是推薦您的套餐組合</h3>
        </div>
        <div class="rem_music_flex">
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-9.png" width="200px"></div>
                <p>繪圖設計超值組合一號餐</p>
                <h4>NT$34,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-10.jpg" width="200px"></div>
                <p>繪圖設計超值組合二號餐</p>
                <h4>NT$39,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
            <div class="rem_music_div">
                <div class="rem_music_img"><img src="img/case-image-11.jpg" width="200px"></div>
                <p>繪圖設計超值組合三號餐</p>
                <h4>NT$44,900</h4>
                <div class="rem_btn">加入購物袋</div>
            </div>
        </div>
    </div>
    <h1>請告訴我你平時玩什麼？</h1>
    <div class="software_game">
        <img src="img/software_game.svg" alt="">
        <h2>電玩遊戲</h2>
        <h3>Games</h3>
    </div>
    <div class="software_02">
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game1"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game01.png"><br>
            <div>
                <p>英雄聯盟</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game2"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game02.png" alt=""><br>
            <div>
                <p>爐石戰記</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game3"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game03.png" alt=""><br>
            <div>

                <p>暗黑破壞神III</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game4"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game04.png" alt=""><br>
            <div>
                <p>絕地求生</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game5"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game05.png" alt=""><br>
            <div>
                <p>流亡黯道</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game6"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game06.png" alt=""><br>
            <div>
                <p>要塞英雄</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game7"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game07.png" alt=""><br>
            <div>
                <p>魔物獵人:世界</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game8"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game08.png" alt=""><br>
            <div>
                <p>黑色沙漠</p>
            </div>
        </div>
        <div class="game">
            <div class="select_not"><img src="img/not_select.svg"></div>
            <div class="select game9"><img src="img/select.svg"></div>
            <img class="game_img" src="img/game09.png" alt=""><br>
            <div>
                <p>俠盜獵車手</p>
            </div>
        </div>
        <div class="game_more">
            <img class="more_img" src="img/more.svg"><br>
            <div>
                <p>更多選擇</p>
            </div>
        </div>
    </div>
</div>
<!-- 中央處理器 -->
<div class="sale_container sale_cpu">
    <div class="next_btn next_mb">
        <img src="img/next.svg">
    </div>
    <div class="pre_btn pre_software">
            <img src="img/pre.svg">
    </div>
    
    <div class="cpu_flex cpu_01">
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為您推薦適合的中央處理器<br>完美的效能表現最貼近您的使用、遊玩需求</h3>
        </div>
        <div class="cpu_sale cpu_intel sid15">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/15.jpg">
            </div>
            <h1>Intel Coffee Lake Core i7-8700 3.2GHz 65W</h1>
            <h2>NT$<span class="price">9800</span></h2>
        </div>
        <div class="cpu_sale cpu_intel sid16">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/16.jpg">
            </div>
            <h1>Intel CoffeeLake Core i7-8086K 4.0GHz 95W</h1>
            <h2>NT$<span class="price">13900</span></h2>
        </div>
        <div class="cpu_sale sid24" id="cpu_amd">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/24.jpg">
            </div>
            <h1>AMD Ryzen 2000 R7 2700X 3.2GHz 65W</h1>
            <h2>NT$<span class="price">9990</span></h2>
        </div>
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為符合條件的中央處理器<br>符合官方建議的最低門檻，效能表現依然可圈可點</h3>
        </div>
        <div class="cpu_sale cpu_02 cpu_intel sid13">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/13.jpg">
            </div>
            <h1>Intel CoffeeLake Core i5-8400 2.8GHz 65W</h1>
            <h2>NT$<span class="price">5600</span></h2>
        </div>
        <div class="cpu_sale cpu_intel sid14">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/14.jpg">
            </div>
            <h1>Intel CoffeeLake Core i5-8600 3.1GHz 65W</h1>
            <h2>NT$<span class="price">6800</span></h2>
        </div>
        <div class="cpu_sale cpu_intel sid5">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/5.jpg">
            </div>
            <h1>Intel KabyLake Core i5-7400 3.0GHz 65W</h1>
            <h2>NT$<span class="price">5300</span></h2>
        </div>
        <div class="cpu_sale cpu_intel sid6">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/6.jpg">
            </div>
            <h1>Intel KabyLake Core i5-7600 3.5GHz 65W</h1>
            <h2>NT$<span class="price">6390</span></h2>
        </div>
        <div class="cpu_text">
        <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為條件不符的中央處理器<br>低於篩選結果的最低門檻，建議提高預算，追求更好的使用體驗</h3>
        </div>
        <div class="cpu_sale sid11">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/11.jpg">
            </div>
            <h1>Intel CoffeeLake Core i3-8100 3.6GHz 65W</h1>
            <h2>NT$<span class="price">3400</span></h2>
        </div>
        
        <div class="cpu_sale sid12">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/12.jpg">
            </div>
            <h1>Intel CoffeeLake Core i3-8300 3.7GHz 65W</h1>
            <h2>NT$<span class="price">4400</span></h2>
        </div>
    </div>
    
    
       
    
</div>
<!-- 主機板 -->
<div class="sale_container sale_mb">
    <div class="next_btn next_ram">
        <img src="img/next.svg">
    </div>
    <div class="pre_btn pre_cpu">
            <img src="img/pre.svg">
    </div>
    <div class="cpu_flex forintel">
        <div class="cpu_text forintel">
            <h3>您選擇了 <span class="ms_text">Intel Coffee Lake Core i7-8700</span> 以下為您推薦適合的主機板</h3>
        </div>
        <div class="cpu_sale sid46">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/46.jpg">
            </div>
            <h1>GIGABYTE B360 HD3</h1>
            <h2>NT$<span class="price">3290</span></h2>
        </div>
        <div class="cpu_sale sid44">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/44.jpg">
            </div>
            <h1>GIGABYTE B360M D3H</h1>
            <h2>NT$<span class="price">3090</span></h2>
        </div>
        <div class="cpu_sale sid41">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/41.jpg">
            </div>
            <h1>ASUS TUF B360-PLUS GAMING</h1>
            <h2>NT$<span class="price">3490</span></h2>
        </div>
        <div class="cpu_sale sid48">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/48.jpg">
            </div>
            <h1>MSI B360M PRO-VDH</h1>
            <h2>NT$<span class="price">2600</span></h2>
        </div>
        <div class="cpu_text">
            <h3>您選擇了 <span class="ms_text">Intel Coffee Lake Core i7-8700</span> 以下為規格不符的主機板</h3>
        </div>
        <div class="cpu_sale grey sid27">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/27.jpg">
            </div>
            <h1>MSI H110M PRO-VD</h1>
            <h2>NT$<span class="price">1690</span></h2>
        </div>
        <div class="cpu_sale grey sid28">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/28.jpg">
            </div>
            <h1>MSI H110M PRO-VHL</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
        <div class="cpu_sale grey sid25">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/25.jpg">
            </div>
            <h1>ASUS H110M-K</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
        <div class="cpu_sale grey sid26">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/26.jpg">
            </div>
            <h1>GIGABYTE H110M-H</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
    </div>
    
    <div class="cpu_flex foramd">
        <div class="cpu_text foramd">
            <h3>您選擇了 <span class="ms_text">AMD Ryzen 2000 R7 2700X 3.2GHz 65W</span> 以下為您推薦適合的主機板</h3>
        </div>
        <div class="cpu_sale sid70">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/70.jpg">
            </div>
            <h1>GIGABYTE AB350-GAMING 3</h1>
            <h2>NT$<span class="price">2980</span></h2>
        </div>
        <div class="cpu_sale sid71">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/71.jpg">
            </div>
            <h1>MSI B350M PRO-VD PLUS</h1>
            <h2>NT$<span class="price">2390</span></h2>
        </div>
        <div class="cpu_sale sid75">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/75.jpg">
            </div>
            <h1>ASUS PRIME X370-A</h1>
            <h2>NT$<span class="price">2990</span></h2>
        </div>
        <div class="cpu_sale sid77">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/77.jpg">
            </div>
            <h1>GIGABYTE AX370-GAMING 3</h1>
            <h2>NT$<span class="price">3390</span></h2>
        </div>
        <div class="cpu_text">
            <h3>您選擇了 <span class="ms_text">AMD Ryzen 2000 R7 2700X 3.2GHz 65W</span> 以下為規格不符的主機板</h3>
        </div>
        <div class="cpu_sale grey sid27">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/27.jpg">
            </div>
            <h1>MSI H110M PRO-VD</h1>
            <h2>NT$<span class="price">1690</span></h2>
        </div>
        <div class="cpu_sale grey sid28">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/28.jpg">
            </div>
            <h1>MSI H110M PRO-VHL</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
        <div class="cpu_sale grey sid25">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/25.jpg">
            </div>
            <h1>ASUS H110M-K</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
        <div class="cpu_sale grey sid26">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/26.jpg">
            </div>
            <h1>GIGABYTE H110M-H</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
    </div>
</div>
<!-- 記憶體 -->
<div class="sale_container sale_ram">
    <div class="next_btn next_gpu">
        <img src="img/next.svg">
    </div>
    <div class="pre_btn pre_mb">
            <img src="img/pre.svg">
    </div>
    <div class="cpu_flex">
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為您推薦適合大小的記憶體<br>完美的效能表現最貼近您的使用、遊玩需求</h3>
        </div>
        <div class="cpu_sale sid93">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/93.jpg">
            </div>
            <h1>UMAX 16G 2133MHz</h1>
            <h2>NT$<span class="price">4200</span></h2>
        </div>
        <div class="cpu_sale sid98">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/98.jpg">
            </div>
            <h1>Transcend 16G 2400MHz</h1>
            <h2>NT$<span class="price">4650</span></h2>
        </div>
        <div class="cpu_sale sid103">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/103.jpg">
            </div>
            <h1>ADATA 16G 2400MHz</h1>
            <h2>NT$<span class="price">4650</span></h2>
        </div>
        <div class="cpu_sale sid108">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/108.jpg">
            </div>
            <h1>Kingston 16G 2400MHz</h1>
            <h2>NT$<span class="price">4650</span></h2>
        </div>
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為符合條件大小的記憶體<br>符合官方建議的最低門檻，效能表現依然可圈可點</h3>
        </div>
        <div class="cpu_sale sid90">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/90.jpg">
            </div>
            <h1>UMAX 8G 2133MHz</h1>
            <h2>NT$<span class="price">1950</span></h2>
        </div>
        <div class="cpu_sale sid97">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/97.jpg">
            </div>
            <h1>Transcend 8G 2400MHz</h1>
            <h2>NT$<span class="price">2380</span></h2>
        </div>
        <div class="cpu_sale sid101">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/101.jpg">
            </div>
            <h1>ADATA 8G 2400MHz</h1>
            <h2>NT$<span class="price">2050</span></h2>
        </div>
        <div class="cpu_sale sid106">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/106.jpg">
            </div>
            <h1>Kingston 8G 2400MHz</h1>
            <h2>NT$<span class="price">2300</span></h2>
        </div>

        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為大小不足的記憶體<br>低於篩選結果的最低門檻，建議提高預算，追求更好的使用體驗</h3>
        </div>
        <div class="cpu_sale sid87">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/87.jpg">
            </div>
            <h1>UMAX 4G 2133MHz</h1>
            <h2>NT$<span class="price">1080</span></h2>
        </div>
        <div class="cpu_sale sid96">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/96.jpg">
            </div>
            <h1>Transcend 4G 2400MHz</h1>
            <h2>NT$<span class="price">1260</span></h2>
        </div>
        <div class="cpu_sale sid99">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/99.jpg">
            </div>
            <h1>ADATA 4G 2400MHz</h1>
            <h2>NT$<span class="price">1130</span></h2>
        </div>
        <div class="cpu_sale sid105">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/105.jpg">
            </div>
            <h1>Kingston 4G 2400MHz</h1>
            <h2>NT$<span class="price">1290</span></h2>
        </div>
    </div>
</div>
<!-- 顯示卡 -->
<div class="sale_container sale_gpu">
    <div class="next_btn next_hdd">
        <img src="img/next.svg">
    </div>
    <div class="pre_btn pre_ram">
            <img src="img/pre.svg">
    </div>
    <div class="cpu_flex cpu_01">
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為您推薦適合的顯示卡<br>完美的效能表現最貼近您的使用、遊玩需求</h3>
        </div>
        <div class="cpu_sale sid165">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/165.jpg">
            </div>
            <h1>ASUS TURBO-GTX1070-8G</h1>
            <h2>NT$<span class="price">14990</span></h2>
        </div>
        <div class="cpu_sale sid168">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/168.jpg">
            </div>
            <h1>MSI GTX1070 ARMOR 8G OC</h1>
            <h2>NT$<span class="price">14500</span></h2>
        </div>
        <div class="cpu_sale sid170">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/170.jpg">
            </div>
            <h1>GIGABYTE GTX1070 WINDFORCE OC 8G</h1>
            <h2>NT$<span class="price">14500</span></h2>
        </div>
        <div class="cpu_sale sid171">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/171.jpg">
            </div>
            <h1>GIGABYTE GTX1070 G1 Gaming 8G</h1>
            <h2>NT$<span class="price">15290</span></h2>
        </div>
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為符合條件的顯示卡<br>符合官方建議的最低門檻，效能表現依然可圈可點</h3>
        </div>
        <div class="cpu_sale cpu_02 sid156">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/156.jpg">
            </div>
            <h1>ASUS PH-GTX1060-3G</h1>
            <h2>NT$<span class="price">6890</span></h2>
        </div>
        <div class="cpu_sale sid159">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/159.jpg">
            </div>
            <h1>MSI GTX1060 AERO 3G OC</h1>
            <h2>NT$<span class="price">6890</span></h2>
        </div>
        <div class="cpu_sale sid162">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/162.jpg">
            </div>
            <h1>GIGABYTE GTX1060 WINDFORCE OC 3G</h1>
            <h2>NT$<span class="price">7290</span></h2>
        </div>
        <div class="cpu_text">
        <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為條件不符的顯示卡<br>低於篩選結果的最低門檻，建議提高預算，追求更好的使用體驗</h3>
        </div>
        <div class="cpu_sale grey">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/ASUS1030.jpg">
            </div>
            <h1>ASUS GT1030-SL-2GD4-BRK</h1>
            <h2>NT$<span class="price">2690</span></h2>
        </div>
        <div class="cpu_sale grey">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/GIGABYTE1030.jpg">
            </div>
            <h1>GIGABYTE GT1030 Low Profile D4 2G</h1>
            <h2>NT$<span class="price">2690</span></h2>
        </div>
        <div class="cpu_sale grey">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/MSI1030.jpg">
            </div>
            <h1>MSI GT1030 2GD4 LP OC</h1>
            <h2>NT$<span class="price">2690</span></h2>
        </div>
    </div>
    
    
        
    
</div>
<!-- 硬碟 -->
<div class="sale_container sale_hdd">
    <div class="next_btn next_power">
        <img src="img/next.svg">
    </div>
    <div class="pre_btn pre_gpu">
            <img src="img/pre.svg">
    </div>
    
    <div class="cpu_flex">
        <div class="cpu_text">
            <h3>您選擇了&nbsp<span class="ms_text gamename1">英雄聯盟</span>
                        <span class="ms_text gamename2">&nbsp爐石戰記</span>
                        <span class="ms_text gamename3">&nbsp暗黑破壞神III</span>
                        <span class="ms_text gamename4">&nbsp絕地求生</span>
                        <span class="ms_text gamename5">&nbsp流亡黯道</span>
                        <span class="ms_text gamename6">&nbsp要塞英雄</span>
                        <span class="ms_text gamename7">&nbsp魔物獵人:世界</span>
                        <span class="ms_text gamename8">&nbsp黑色沙漠</span>
                        <span class="ms_text gamename9">&nbsp俠盜獵車手</span>
                        以下為您推薦熱賣的硬碟<br>硬碟沒有規格限制，請安心挑選</h3>
        </div>
        <div class="cpu_sale sid128">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/128.jpg">
            </div>
            <h1>Kingston UV500 240G</h1>
            <h2>NT$<span class="price">1650</span></h2>
        </div>
        <div class="cpu_sale sid129">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/129.jpg">
            </div>
            <h1>Kingston UV500 480G</h1>
            <h2>NT$<span class="price">2950</span></h2>
        </div>
        <div class="cpu_sale sid119">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/119.jpg">
            </div>
            <h1>ADATA Ultimate SU800 256G</h1>
            <h2>NT$<span class="price">1750</span></h2>
        </div>
        <div class="cpu_sale sid120">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/120.jpg">
            </div>
            <h1>ADATA Ultimate SU800 512G</h1>
            <h2>NT$<span class="price">3150</span></h2>
        </div>
        <div class="cpu_text">
            <h3>查看更多其他硬碟</h3>
        </div>
        <div class="cpu_sale sid141">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/141.jpg">
            </div>
            <h1>Toshiba DT01ACA100 1TB</h1>
            <h2>NT$<span class="price">1340</span></h2>
        </div>
        <div class="cpu_sale sid142">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/142.jpg">
            </div>
            <h1>Toshiba DT01ACA200 2TB</h1>
            <h2>NT$<span class="price">1890</span></h2>
        </div>
        <div class="cpu_sale sid143">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/143.jpg">
            </div>
            <h1>Toshiba DT01ACA300 3TB</h1>
            <h2>NT$<span class="price">2290</span></h2>
        </div>
    </div>
</div>
<!-- 電源供應器 -->
<div class="sale_container sale_power">
    <div class="next_btn next_case">
        <img src="img/next.svg">
    </div>
    <div class="pre_btn pre_hdd">
            <img src="img/pre.svg">
    </div>
    
    <div class="cpu_flex">
        <div class="cpu_text">
            <h3>以下為您推薦適合的電源供應器</h3>
        </div>
        <div class="cpu_sale sid198">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/198.jpg">
            </div>
            <h1>Seasonic Focus SSR-550FM 550W</h1>
            <h2>NT$<span class="price">1690</span></h2>
        </div>
        <div class="cpu_sale sid199">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/199.jpg">
            </div>
            <h1>Seasonic Focus SSR-650FM 650W</h1>
            <h2>NT$<span class="price">1990</span></h2>
        </div>
        <div class="cpu_sale sid200">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/200.jpg">
            </div>
            <h1>Seasonic Focus SSR-750FM 750W</h1>
            <h2>NT$<span class="price">3990</span></h2>
        </div>
        <div class="cpu_text">
            <h3>以下為瓦數不足的電源供應器</h3>
        </div>
        <div class="cpu_sale grey">
            <div class="cpu_sale_img sid197">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/197.jpg">
            </div>
            <h1>Seasonic Focus SSR-450FM 450W</h1>
            <h2>NT$<span class="price">1490</span></h2>
        </div>
    </div>
</div>
<!-- 機殼 -->
<div class="sale_container sale_case">
<div class="pre_btn pre_power">
            <img src="img/pre.svg">
    </div>
    
    <div class="cpu_flex">
        <div class="cpu_text">
            <h3>以下為您推薦熱賣的機殼<br>機殼沒有規格限制，請安心挑選</h3>
        </div>
        <div class="cpu_sale sid203">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/203.jpg">
            </div>
            <h1>Apexgaming Z2</h1>
            <h2>NT$<span class="price">2230</span></h2>
        </div>
        <div class="cpu_sale sid204">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/204.jpg">
            </div>
            <h1>BitFenix Enso TG</h1>
            <h2>NT$<span class="price">2190</span></h2>
        </div>
        <div class="cpu_sale sid209">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/209.jpg">
            </div>
            <h1>SAMA 影子戰士</h1>
            <h2>NT$<span class="price">1390</span></h2>
        </div>
        <div class="cpu_sale sid210">
            <div class="cpu_sale_img">
                <div class="select_no"><img src="img/not_select.svg"></div>
                <div class="select_yes"><img src="img/select.svg"></div>
                <img src="img/small/210.jpg">
            </div>
            <h1>SADES Horus</h1>
            <h2>NT$<span class="price">990</span></h2>
        </div>
    </div>
</div>

<!-- footer -->
<?php include __DIR__ . '/__footer.php' ?>
<script src="stepbystep.js"></script>

</script>
<?php include __DIR__ . '/__html_foot.php' ?>