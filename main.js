
$('.loading').animate({'width':'100%'},50);

$(document).ready(function(){
	 $('.loading').fadeOut();

   var $backToTopEle = $('<div class="backToTop" title="回到顶部"></div>').appendTo($("body")).click(function() {
        $("html, body").animate({ scrollTop: 0 }, 550);
   }), $backToTopFun = function() {

   var st = $(document).scrollTop(), winh = $(window).height();
      (st > 0)? $backToTopEle.show(): $backToTopEle.hide();    
      //IE6下的定位
      if (!window.XMLHttpRequest) {
          $backToTopEle.css("top", st + winh - 166);    
      }
   };

   $(window).bind("scroll", $backToTopFun);
   $(function() {
        $backToTopFun(); 
   });
});