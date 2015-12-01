
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

   // 标题带动画下划线
   $('.entry-title a').each(function() {
      var th = $(this), brd = $('<div></div>').appendTo(th).css({ position: 'absolute', borderTop: '2px solid #333',
                left: 2, top: 37, height: 0, width: 0});
        th.on('mouseenter', function() {
            $.when(brd)
                .then(function() {
                brd.css({
                    left: 2,
                    right: 'auto'
                }).animate({
                    width: th.width()
                })
            })
        }).on('mouseleave', function() {
            $.when(brd).then(function() {
                brd.stop().css({ right: 0, left: 'auto'
                }).animate({width: 0
                }, {complete: function() {
                        brd.css({ left: 2, right: 'auto' })
                    }
                })
            })
        });
    })
});