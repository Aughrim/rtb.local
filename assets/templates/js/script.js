        //Скрипт бокового меню. Куки.
        $(document).ready(function() {

        var checkCookie = $.cookie("sub-nav");
        if (checkCookie != "") {
        $('.lmenu > li.sub > a:eq('+checkCookie+')').addClass('active').next().show();
    }
        $('.lmenu > li.sub > a').click(function(){
        var navIndex = $('.lmenu > li.sub > a').index(this);
        $.cookie("sub-nav", navIndex);
        $('.lmenu li ul').slideUp();
        if ($(this).next().is(":visible")){
        $(this).next().slideUp();
    } else {
        $(this).next().slideToggle();
    }
        $('.lmenu li a').removeClass('active');
        $(this).addClass('active');
    });

        var checkCookie = $.cookie("sub-link");
        if (checkCookie != "") {
        $('.lmenu > li.sub > ul li a:eq('+checkCookie+')').addClass('active');
    }
        $('.sub ul li a').click(function(){
        var subIndex = $('.sub ul li a').index(this);
        $.cookie("sub-link", subIndex);
        $('.sub ul li a').removeClass('active');
        $(this).addClass('active');
    });
    });









