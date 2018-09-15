 //挑選遊戲
    function gameclick(){
        $(".game").click(function () {
        $(this).find('.select').toggleClass('select_light')
        if($('.game1').hasClass('select_light')){
            $('.gamename1').css('display','inline');
        }else{
            $('.gamename1').css('display','none');
        }
        if($('.game2').hasClass('select_light')){
            $('.gamename2').css('display','inline');
        }else{
            $('.gamename2').css('display','none');
        }if($('.game3').hasClass('select_light')){
            $('.gamename3').css('display','inline');
        }else{
            $('.gamename3').css('display','none');
        }if($('.game4').hasClass('select_light')){
            $('.gamename4').css('display','inline');
        }else{
            $('.gamename4').css('display','none');
        }if($('.game5').hasClass('select_light')){
            $('.gamename5').css('display','inline');
        }else{
            $('.gamename5').css('display','none');
        }if($('.game6').hasClass('select_light')){
            $('.gamename6').css('display','inline');
        }else{
            $('.gamename6').css('display','none');
        }if($('.game7').hasClass('select_light')){
            $('.gamename7').css('display','inline');
        }else{
            $('.gamename7').css('display','none');
        }if($('.game8').hasClass('select_light')){
            $('.gamename8').css('display','inline');
        }else{
            $('.gamename8').css('display','none');
        }if($('.game9').hasClass('select_light')){
            $('.gamename9').css('display','inline');
        }else{
            $('.gamename9').css('display','none');
        }
    });
    }
    gameclick();
    
    //挑選影音、設計、文書
    //  $('.three_software').click(function(){
    // 	 $(this).siblings().removeClass('three_software_active')
    // 	 $(this).toggleClass('three_software_active')
    //  });
    $('.three_software.music').click(function () {
        if ($('.rem_book').hasClass('rem_book_open') || $('.rem_paint').hasClass('rem_paint_open')) {
            $('.rem_book').removeClass('rem_book_open')
            $('.rem_paint').removeClass('rem_paint_open')
        }
        $('.rem_music').toggleClass('rem_music_open');
    });
    $('.three_software.book').click(function () {
        if ($('.rem_music').hasClass('rem_music_open') || $('.rem_paint').hasClass('rem_paint_open')) {
            $('.rem_music').removeClass('rem_music_open')
            $('.rem_paint').removeClass('rem_paint_open')
        }
        $('.rem_book').toggleClass('rem_book_open');
    });

    $('.three_software.paint').click(function () {
        if ($('.rem_music').hasClass('rem_music_open') || $('.rem_book').hasClass('rem_book_open')) {
            $('.rem_music').removeClass('rem_music_open')
            $('.rem_book').removeClass('rem_book_open')
        }
        $('.rem_paint').toggleClass('rem_paint_open');
    });
    $('.rem_cancel').click(function () {
        $('.rem_music').removeClass('rem_music_open')
    });

    //挑選商品時的勾選
    $('.cpu_sale').click(function () {
        $(this).siblings().find('.select_yes').css('opacity', '0')
        $(this).siblings().find('.select_no').css('opacity', '1')
        $(this).find('.select_no').css('opacity', '0')
        $(this).find('.select_yes').css('opacity', '1')
        $(this).siblings().removeClass('cpu_border')
        $(this).addClass('cpu_border')
    });
    $('#cpu_amd').click(function(){
        $('.forintel').css('display','none');
        $('.foramd').css('display','flex');
    })
    $('.cpu_intel').click(function(){
        $('.forintel').css('display','flex');
        $('.foramd').css('display','none');
    })
    //指標三角形與更換頁面的的效果
    $('.software_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_software')
        //打開自己
        $('.stepbystep_software_container').removeClass('stepbystep_close')
        //關上別人
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_software').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".stepbystep_software_container").offset().top - 130
            },
            'slow');
    });
    //
    $('.pre_software').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_software')
        //打開自己
        $('.stepbystep_software_container').removeClass('stepbystep_close')
        //關上別人
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_software').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".stepbystep_software_container").offset().top - 130
            },
            'slow');
    });
    
    $('.cpu_li').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_cpu')
        //先打開自己
        $('.sale_cpu').addClass('cpu_open')
        //再關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_cpu').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_cpu").offset().top - 130
            },
            'slow');
    });
    // 下一頁去cpu
    $('.next_cpu').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_cpu')
        //先打開自己
        $('.sale_cpu').addClass('cpu_open')
        //再關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_cpu').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_cpu").offset().top - 130
            },
            'slow');
    });
    $('.pre_cpu').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_cpu')
        //先打開自己
        $('.sale_cpu').addClass('cpu_open')
        //再關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_cpu').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_cpu").offset().top - 130
            },
            'slow');
    });
    
    
    $('.mb_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_mb')
        $('.sale_mb').addClass('mb_open')
        //打開自己
        $('.sale_mb').addClass('mb_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_mb').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_mb").offset().top - 130
            },
            'slow');
    });
    $('.next_mb').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_mb')
        $('.sale_mb').addClass('mb_open')
        //打開自己
        $('.sale_mb').addClass('mb_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_mb').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_mb").offset().top - 130
            },
            'slow');
    });
    $('.pre_mb').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_mb')
        $('.sale_mb').addClass('mb_open')
        //打開自己
        $('.sale_mb').addClass('mb_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_mb').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_mb").offset().top - 130
            },
            'slow');
    });

    $('.ram_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_ram')
        //
        $('.sale_ram').addClass('ram_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_ram').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_ram").offset().top - 130
            },
            'slow');
    });

    $('.next_ram').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_ram')
        //
        $('.sale_ram').addClass('ram_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_ram').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_ram").offset().top - 130
            },
            'slow');
    });
    $('.pre_ram').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_ram')
        //
        $('.sale_ram').addClass('ram_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_ram').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_ram").offset().top - 130
            },
            'slow');
    });


    $('.gpu_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_gpu')
        //
        $('.sale_gpu').addClass('gpu_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_gpu').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_gpu").offset().top - 130
            },
            'slow');
    });
    $('.next_gpu').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_gpu')
        //
        $('.sale_gpu').addClass('gpu_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_gpu').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_gpu").offset().top - 130
            },
            'slow');
    });
    $('.pre_gpu').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_gpu')
        //
        $('.sale_gpu').addClass('gpu_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_gpu').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_gpu").offset().top - 130
            },
            'slow');
    });

    $('.hdd_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_hdd')
        //
        $('.sale_hdd').addClass('hdd_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_hdd').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_hdd").offset().top - 130
            },
            'slow');
    });
    $('.next_hdd').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_hdd')
        //
        $('.sale_hdd').addClass('hdd_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_hdd').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_hdd").offset().top - 130
            },
            'slow');
    });
    $('.pre_hdd').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_hdd')
        //
        $('.sale_hdd').addClass('hdd_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_power').removeClass('power_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_hdd').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_hdd").offset().top - 130
            },
            'slow');
    });

    $('.power_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_power')
        //
        $('.sale_power').addClass('power_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_power').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_power").offset().top - 130
            },
            'slow');
    });
    $('.next_power').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_power')
        //
        $('.sale_power').addClass('power_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_power').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_power").offset().top - 130
            },
            'slow');
    });
    $('.pre_power').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_power')
        //
        $('.sale_power').addClass('power_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_case').removeClass('case_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_power').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_power").offset().top - 130
            },
            'slow');
    });
    
    $('.case_li').click(function () {
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_case')
        //
        $('.sale_case').addClass('case_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_case').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_case").offset().top - 130
            },
            'slow');
    });
    
    
    $('.next_case').click(function(){
        $('.point').removeClass('point_software')
        $('.point').removeClass('point_cpu')
        $('.point').removeClass('point_mb')
        $('.point').removeClass('point_ram')
        $('.point').removeClass('point_gpu')
        $('.point').removeClass('point_hdd')
        $('.point').removeClass('point_power')
        $('.point').removeClass('point_case')
        $('.point').addClass('point_case')
        //
        $('.sale_case').addClass('case_open')
        //關上別人
        $('.stepbystep_software_container').addClass('stepbystep_close')
        $('.sale_cpu').removeClass('cpu_open')
        $('.sale_mb').removeClass('mb_open')
        $('.sale_ram').removeClass('ram_open')
        $('.sale_gpu').removeClass('gpu_open')
        $('.sale_hdd').removeClass('hdd_open')
        $('.sale_power').removeClass('power_open')
        //
        $('.down_li').css('filter', 'opacity(.2)')
        $('.down_case').css('filter', 'opacity(1)')
        //移動的動畫
        $('html,body').animate({
                scrollTop: $(".sale_case").offset().top - 130
            },
            'slow');
    })

    // var a = $(".navbar").offset().bottom;
    // $(window).scroll(function(){
    //  var p = $(this).scrollTop();
    //  var no = false;
    //  console.log(p);
    // if( p < a ){
    //         $(".navbar").removeClass("navbar_appear");
    //         no = false;
    // }else{
    //         $(".navbar").addClass("navbar_appear");
    //         no = true;
    // }
    // var a = $('.stepbystep_software_container').offset().top-340;
    // 	console.log(a);
    // 	$(window).scroll(function(){
    // 	var p = $(this).scrollTop();
    // 	console.log(p);
    // 	if(p>a){
    // 		$('.navbar').addClass('navbar_appear')
    // 	}else{
    // 		$('.navbar').removeClass('navbar_appear')
    // 	}
    // });
    //

    //捲動時的進度條
    var processTop = $('.process').offset().top - 80;
    console.log(processTop)
    $(window).scroll(function () {
        var processFixed = $(this).scrollTop();
        if (processFixed > processTop) {
            $('.li_down').css('bottom', '0px')
            $('.next_btn').css('opacity','1');
            $('.pre_btn').css('opacity','1')
        } else {
            $('.li_down').css('bottom', '-80px')
            $('.next_btn').css('opacity','0')
            $('.pre_btn').css('opacity','0')
        }
    });
    $('.down_li').click(function () {
        $(this).siblings().css('filter', 'opacity(.2)')
        $(this).css('filter', 'opacity(1)')
    });

    // var price = $('.price').text()
    // console.log(price);
    var total_price = 0;
    var cpu_sales = $('.cpu_sale');
    cpu_sales.click(function () {
        var price; // = $(this).find('.price').text();
        //alert(price);
        total_price = 0;
        cpu_sales.each(function () {
            if ($(this).hasClass('cpu_border')) {
                price = parseInt($(this).find('.price').text());
                total_price += price;
                console.log(price, total_price);
            }
            $('.price_text').html(total_price);
        });

        // alert(total_price);
    });
    $('.package_btn').click(function () {
        var sids = $(this).attr('data-sids');
        var cpusid = $(this).attr('data-cpusid');
        var mbsid = $(this).attr('data-mbsid');
        var ramsid = $(this).attr('data-ramsid');
        var ssdsid = $(this).attr('data-ssdsid');
        var gpusid = $(this).attr('data-gpusid');
        var pwrsid = $(this).attr('data-pwrsid');
        var casesid = $(this).attr('data-casesid');
        // $.get('add_to_cart2.php', {sids: sids}, function (data) {
        // });
        $.get('add_to_cart2.php', {sids: cpusid}, function (data) {
        });
        $.get('add_to_cart2.php', {sids: mbsid}, function (data) {
        });
        $.get('add_to_cart2.php', {sids: ramsid}, function (data) {
        });
        $.get('add_to_cart2.php', {sids: ssdsid}, function (data) {
        });
        $.get('add_to_cart2.php', {sids: gpusid}, function (data) {
        });
        $.get('add_to_cart2.php', {sids: pwrsid}, function (data) {
        });
        $.get('add_to_cart2.php', {sids: casesid}, function (data) {
        });
    })
    $('.sid5').click(function(){
        $('.package_btn').attr('data-cpusid','5');
    })
    $('.sid6').click(function(){
        $('.package_btn').attr('data-cpusid','6');
    })
    $('.sid11').click(function(){
        $('.package_btn').attr('data-cpusid','11');
    })
    $('.sid12').click(function(){
        $('.package_btn').attr('data-cpusid','12');
    })
    $('.sid13').click(function(){
        $('.package_btn').attr('data-cpusid','13');
    })
    $('.sid14').click(function(){
        $('.package_btn').attr('data-cpusid','14');
    })
    $('.sid15').click(function(){
        $('.package_btn').attr('data-cpusid','15');
    })
    $('.sid16').click(function(){
        $('.package_btn').attr('data-cpusid','16');
    })
    $('.sid24').click(function(){
        $('.package_btn').attr('data-cpusid','24');
    })
    $('.sid25').click(function(){
        $('.package_btn').attr('data-mbsid','25');
    })
    $('.sid26').click(function(){
        $('.package_btn').attr('data-mbsid','26');
    })
    $('.sid27').click(function(){
        $('.package_btn').attr('data-mbsid','27');
    })
    $('.sid28').click(function(){
        $('.package_btn').attr('data-mbsid','28');
    })
    $('.sid41').click(function(){
        $('.package_btn').attr('data-mbsid','41');
    })
    $('.sid44').click(function(){
        $('.package_btn').attr('data-mbsid','44');
    })
    $('.sid46').click(function(){
        $('.package_btn').attr('data-mbsid','46');
    })
    $('.sid48').click(function(){
        $('.package_btn').attr('data-mbsid','48');
    })
    $('.sid70').click(function(){
        $('.package_btn').attr('data-mbsid','70');
    })
    $('.sid71').click(function(){
        $('.package_btn').attr('data-mbsid','71');
    })
    $('.sid75').click(function(){
        $('.package_btn').attr('data-mbsid','75');
    })
    $('.sid77').click(function(){
        $('.package_btn').attr('data-mbsid','77');
    })
    $('.sid87').click(function(){
        $('.package_btn').attr('data-ramsid','87');
    })
    $('.sid90').click(function(){
        $('.package_btn').attr('data-ramsid','90');
    })
    $('.sid93').click(function(){
        $('.package_btn').attr('data-ramsid','93');
    })
    $('.sid96').click(function(){
        $('.package_btn').attr('data-ramsid','96');
    })
    $('.sid97').click(function(){
        $('.package_btn').attr('data-ramsid','97');
    })
    $('.sid98').click(function(){
        $('.package_btn').attr('data-ramsid','98');
    })
    $('.sid99').click(function(){
        $('.package_btn').attr('data-ramsid','99');
    })
    $('.sid101').click(function(){
        $('.package_btn').attr('data-ramsid','101');
    })
    $('.sid103').click(function(){
        $('.package_btn').attr('data-ramsid','103');
    })
    $('.sid105').click(function(){
        $('.package_btn').attr('data-ramsid','105');
    })
    $('.sid106').click(function(){
        $('.package_btn').attr('data-ramsid','106');
    })
    $('.sid108').click(function(){
        $('.package_btn').attr('data-ramsid','108');
    })
    $('.sid119').click(function(){
        $('.package_btn').attr('data-ssdsid','119');
    })
    $('.sid120').click(function(){
        $('.package_btn').attr('data-ssdsid','120');
    })
    $('.sid128').click(function(){
        $('.package_btn').attr('data-ssdsid','128');
    })
    $('.sid129').click(function(){
        $('.package_btn').attr('data-ssdsid','129');
    })
    $('.sid141').click(function(){
        $('.package_btn').attr('data-ssdsid','141');
    })
    $('.sid142').click(function(){
        $('.package_btn').attr('data-ssdsid','142');
    })
    $('.sid143').click(function(){
        $('.package_btn').attr('data-ssdsid','143');
    })
    $('.sid156').click(function(){
        $('.package_btn').attr('data-gpusid','156');
    })
    $('.sid159').click(function(){
        $('.package_btn').attr('data-gpusid','159');
    })
    $('.sid162').click(function(){
        $('.package_btn').attr('data-gpusid','162');
    })
    $('.sid165').click(function(){
        $('.package_btn').attr('data-gpusid','165');
    })
    $('.sid168').click(function(){
        $('.package_btn').attr('data-gpusid','168');
    })
    $('.sid170').click(function(){
        $('.package_btn').attr('data-gpusid','170');
    })
    $('.sid171').click(function(){
        $('.package_btn').attr('data-gpusid','171');
    })
    $('.sid197').click(function(){
        $('.package_btn').attr('data-pwrsid','197');
    })
    $('.sid198').click(function(){
        $('.package_btn').attr('data-pwrsid','198');
    })
    $('.sid199').click(function(){
        $('.package_btn').attr('data-pwrsid','199');
    })
    $('.sid200').click(function(){
        $('.package_btn').attr('data-pwrsid','200');
    })
    $('.sid203').click(function(){
        $('.package_btn').attr('data-casesid','203');
    })
    $('.sid204').click(function(){
        $('.package_btn').attr('data-casesid','204');
    })
    $('.sid209').click(function(){
        $('.package_btn').attr('data-casesid','209');
    })
    $('.sid210').click(function(){
        $('.package_btn').attr('data-casesid','210');
    })