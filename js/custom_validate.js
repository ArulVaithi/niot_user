window.Parsley.addValidator("specialcharacter", function (value) {
  if (/[!@#$%^&*_+\-=[\]{};':"\\|,.<>/?]/.test(value) == false) {
    jQuery("#specialcharacter").addClass("completed");
    return true;
  } else {
    jQuery("#specialcharacter").removeClass("completed");
    return false;
  }
});

window.Parsley.addValidator("spacecheck", function (value) {
  if (value === " " + value) {
    jQuery("#spacecheck").addClass("completed");
    return false;
  } else {
    jQuery("#spacecheck").removeClass("completed");
    return true;
  }
});

// window.Parsley.addValidator('spacecheck', {
//   requirementType: 'string',
//   validateString: function(value) {
//     f($.isNumeric(value) == false){
//       return value;
//   }
//   },
//   messages: {
//     en: 'Enter a Valid Name',

//   }
// });

window.Parsley.addValidator('numbers',
function (value){            
    if (/[0-9]/.test(value)){
        jQuery("#numbers").addClass("completed");
        return true;
    }
    else{
        jQuery("#numbers").removeClass("completed");
        return false;
    }                
});  

window.Parsley.addValidator('pannumbers',
function (value){            
    if (/^(?=.*[a-z]).*$/.test(value) ==false){
        jQuery("#pannumbers").addClass("completed");
        return true;
    }
    else{
        jQuery("#pannumbers").removeClass("completed");
        return false;
    }                
});  

// window.Parsley.addValidator('length', {
//     validateString: function(value) {
//       if (value.length < 500) {
//         return false
//       }
//     },
//     messages: {
//       en: "This value length is invalid. It should be between 2 and 5000 characters long",
//     //   fr: "Cette phrase est trop court."
//     }
//   });
// $(function () {
//   $(".reduce-length").text($("input").attr("maxlength"));

//   $("input").on("input", function () {
//     var textLength = $(this).val().length,
//       maxChars = $(this).attr("maxlength"),
//       remChars = maxChars - textLength;
//     $(".max-length").text(' / '+maxChars);
//     $(".reduce-length").text(remChars);
//   });

$.fn.extend({
  limiter: function (counter) {
    var limit = this.attr("maxlength");

    $(this).on("keyup focus", function () {
      setCounter(this, counter);
    });

    function setCounter(source, counter) {
      var chars = source.value.length;
      if (chars > limit) {
        source.value = source.value.substr(0, limit);
        chars = limit;
      }
      counter.html(limit - chars);
    }
    setCounter($(this)[0], counter);
  },
});

$(".limited-textarea").each(function () {
  var $textarea = $(this).find(".textarea");
  var $counter = $(this).find(".counter");
  $textarea.limiter($counter);
});
// });
//
