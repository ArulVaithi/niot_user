(function ($) {

  
  $.fn.fontResize = function (options) {
      
    var increaseCount = 0;
    var decreaseCount = 0;
    var original_size = 0;
    var self = this;

    var changeFont = function (element, amount) {

      var baseFontSize = parseInt(element.css("font-size"), 10);
      var baseLineHeight = parseInt(element.css("line-height"), 10);
      element.css("font-size", baseFontSize + amount + "px");
      element.css("line-height", baseLineHeight + amount + "px");
    };

    options.increaseBtn.on("click", function (e) {
      e.preventDefault();
      if (increaseCount === 2) {
        return;
      }
      self.each(function (index, element) {
        changeFont($(element), 1);
      });

      $.cookie("increased-size",increaseCount);
      $.cookie("decreased-size",decreaseCount);
      increaseCount++;
      decreaseCount--;
     
    });

    // options.original_font.on("click", function (e) {
    //   e.preventDefault();
    //   alert(decreaseCount);
    //   alert(increaseCount);
    //   if (decreaseCount <= -2) {
    //     self.each(function (index, element) {
    //       changeFont($(element), 0);
    //       changeFont($(element), -1);
    //     });
    //   }
    //   original_size = 0;
    // });

    options.decreaseBtn.on("click", function (e) {
      e.preventDefault();
      if (decreaseCount === 2) {
        return;
      }
      self.each(function (index, element) {
        changeFont($(element), -1);
      });
      $.cookie("increased-size",increaseCount);
      $.cookie("decreased-size",decreaseCount);
      //var dec_cookie =  $.cookie("decreased-size")

      increaseCount--;
      decreaseCount++;
    });
  };

  
   ///	$(".cookiealert").hide();
})(jQuery);

$(function () {
    // $.cookie("increased-size",0);
    //var initialcookie  = parseInt(a);
    var cookieValue = $.cookie("increased-size");
// alert(cookieValue);
    if(cookieValue == null )
    {
       
        $.cookie("increased-size",0);
        $.cookie("decreased-size",0);
    }
   else 
   {
    $.cookie("increased-size",cookieValue);
    $.cookie("decreased-size",cookieValue);
   }

  $("body,h1,h2,h3,h4,h5,h6,p,ul,ol,a,input").fontResize({
    increaseBtn: $("#btn-increase"),
    original_font: $("#btn-orig"),
    decreaseBtn: $("#btn-decrease"),
  });
});


