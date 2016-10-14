        //Скрипт бокового меню. Куки.
$(document).ready(function() {

  var checkCookie = $.cookie("sub-nav");
  if (checkCookie != "") {
        $('.lmenu > li.sub > a:eq('+checkCookie+')').addClass('active').next().show();
        $('.lmenu > li.sub > a:eq('+checkCookie+')').prev().removeClass('icon-caret-right').addClass('icon-caret-down');
  }
  $('.lmenu > li.sub > a').click(function(){                   //если кликнул
            $('.lmenu > li.sub > span').removeClass('icon-caret-down').addClass('icon-caret-right');


         var navIndex = $('.lmenu > li.sub > a').index(this);        //узнай текущий индекс
         $.cookie("sub-nav", navIndex);                             //присвой его sub-nav
         $('.lmenu li ul').slideUp();                                //отобрази
         if ($(this).next().is(":visible")){
            $(this).next().slideUp();
            $(this).prev().removeClass('icon-caret-down').addClass('icon-caret-right');
         } else {
            $(this).next().slideToggle();
            $(this).prev().removeClass('icon-caret-right').addClass('icon-caret-down');

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









