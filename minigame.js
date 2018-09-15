var cpuPlaced = false;
var cpuFanPlaced = false;
var ram1Placed = false;
var ram2Placed = false;
var gpuPlaced = false;
var stepCount = 0;
$('.nextStep').click(function () {
    if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true && stepCount == 0) {
        $(".CASE_HDD").css('opacity', 1).css('transform', 'translateY(0)');
        $('.part1').css("height", 0);
        $('.case_bg').css('opacity', 1);
        showMessage('硬碟是用來存資料的地方', 5000);
        stepCount = stepCount + 1;
    } else if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true && stepCount == 1) {
        $(".case_POWER").css('opacity', 1).css('transform', 'translateY(0)');
        $('.nextStep').text('完成');
        showMessage('電源供應器用來接電<br>用來提供穩定的電給電腦使用', 5000);
        stepCount = stepCount + 1;
    } else if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true && stepCount == 2) {
        $('body').css({
            'backgroundImage': 'url(images/pc.png),url(images/victory_rotate.svg)',
            'backgroundRepeat': 'no-repeat,no-repeat',
            'backgroundSize': '40%,120%',
            'backgroundPosition': '50% 40%,50% 50%'
        });
        $('.case').css('opacity', 0);
        showMessage('組電腦就是這麼簡單', 50000);
        $('.nextStep').text('前往選購').css('background-color','#f08080');
        $('.minigame').append('<div class="position-absolute case_bg resetgame">重玩</div>');
        $('.resetgame').click(function () {
            location.reload();
        });
        stepCount = stepCount + 1;
        
    } else if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true && stepCount == 3) {
        location.href="stepbystep.php";
        
        
    } else if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true) {
        $('.part1').css("opacity", 0);
        $('.case_bg').css('opacity', 1);
    } else if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true) {
        $(".modelkit_Graphic_Card").css({"opacity": 1, 'transform': 'translateY(0)'});
        $("#drag_Graphic_Card").css("height", 0);
        $('.nextStep').text('下一步');
        showMessage('顯示卡將電腦的顯示訊息進行轉換<br>並向螢幕提供訊號讓螢幕正確顯示', 5000);
        gpuPlaced = true;
    } else if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true) {
        $(".modelkit_RAM2").css({"opacity": "1", 'transform': 'translateY(0)'});
        $("#drag_RAM2").css("height", 0);
        $('.nextStep').text('下一步');
        showMessage('簡單來說就是讓電腦暫存資料的地方', 5000);
        ram2Placed = true;
    } else if (cpuPlaced == true && cpuFanPlaced == true) {
        $(".modelkit_RAM1").css({"opacity": "1", 'transform': 'translateY(0)'});
        $("#drag_RAM1").css("height", 0);
        $('.nextStep').text('下一步');
        showMessage('記憶體(RAM)又稱為隨機存取記憶體<br>能夠使中央處理器(CPU)在執行時<br>快速讀取暫存在記憶體中的指令與資料', 5000);
        ram1Placed = true;
    } else if (cpuPlaced == true) {
        $(".modelkit_CPUFAN").css({"opacity": "1", 'transform': 'translateY(0)'});
        $("#drag_CPUFAN").css("height", 0);
        $('.nextStep').text('下一步');
        showMessage('散熱器沒有裝的話CPU可是會過熱當機的', 5000);
        cpuFanPlaced = true;
    } else if (cpuPlaced == false) {
        $(".modelkit_CPU").css({"opacity": "1", 'transform': 'translateY(0)'});
        $("#drag_CPU").css("height", 0);
        $("#drop_CPUFAN").css("height", "20vw");
        $('.nextStep').text('下一步');
        showMessage('CPU(中央處理器)就像是大腦<br>若沒有他，電腦就沒辦法使用', 5000);
        cpuPlaced = true;
    }
});
$(function () {
    $("#drag_CPU").draggable({
        scope: "CPU",
        revert: "invalid"
    })
    $("#drag_CPUFAN").draggable({
        scope: "CPUFAN",
        revert: "invalid"
    })
    $("#drag_Graphic_Card").draggable({
        scope: "Graphic_Card",
        revert: "invalid"
    })
    $("#drag_RAM1").draggable({
        scope: "RAM1",
        revert: "invalid"
    })
    $("#drag_RAM2").draggable({
        scope: "RAM2",
        revert: "invalid"
    })
    $("#drag_case_fan").draggable({
        revert: "invalid"
    })
    $("#drop_CPU").droppable({
        scope: "CPU",
        drop: function (event, ui) {
            $(".modelkit_CPU").css("opacity", 1).css('transform', 'translateY(0)');
            $("#drag_CPU").css("height", 0);
            $("#drop_CPUFAN").css("height", "20vw");
            $('.nextStep').text('下一步');
            cpuPlaced = true;
        }
    })
    $("#drop_CPUFAN").droppable({
        scope: "CPUFAN",
        drop: function (event, ui) {
            $(".modelkit_CPUFAN").css("opacity", 1).css('transform', 'translateY(0)');
            $("#drag_CPUFAN").css("height", 0);
            $('.nextStep').text('下一步');
            cpuFanPlaced = true;
            if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true) {
                $('.part1').css("height", 0);
                $('.case_bg').css('opacity', 1);
            }
        }
    })
    $("#drop_Graphic_Card").droppable({
        scope: "Graphic_Card",
        drop: function (event, ui) {
            $(".modelkit_Graphic_Card").css("opacity", 1).css('transform', 'translateY(0)');
            $("#drag_Graphic_Card").css("height", 0);
            $('.nextStep').text('下一步');
            gpuPlaced = true;
            if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true) {
                $('.part1').css("height", 0);
                $('.case_bg').css('opacity', 1);
            }
        }
    })
    $("#drop_RAM1").droppable({
        scope: "RAM1",
        drop: function (event, ui) {
            $(".modelkit_RAM1").css("opacity", 1).css('transform', 'translateY(0)');
            $("#drag_RAM1").css("height", 0);
            $('.nextStep').text('下一步');
            ram1Placed = true;
            if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true) {
                $('.part1').css("height", 0);
                $('.case_bg').css('opacity', 1);
            }
        }
    })
    $("#drop_RAM2").droppable({
        scope: "RAM2",
        drop: function (event, ui) {
            $(".modelkit_RAM2").css("opacity", 1).css('transform', 'translateY(0)');
            $("#drag_RAM2").css("height", 0);
            $('.nextStep').text('下一步');
            ram2Placed = true;
            if (cpuPlaced == true && cpuFanPlaced == true && ram1Placed == true && ram2Placed == true && gpuPlaced == true) {
                $('.part1').css("height", 0);
                $('.case_bg').css('opacity', 1);
            }
        }
    })
});