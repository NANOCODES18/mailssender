(function ($) {
  "use strict";
  $(".input100").each(function () {
    $(this).on("blur", function () {
      if ($(this).val().trim() != "") {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });
  var input = $(".validate-input .input100");
  $(".validate-form").on("submit", function () {
    var check = true;
    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }
    return check;
  });
  $(".validate-form .input100").each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });
  function validate(input) {
    if ($(input).attr("type") == "email" || $(input).attr("name") == "email") {
      if (
        $(input)
          .val()
          .trim()
          .match(
            /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
          ) == null
      ) {
        return false;
      }
    } else {
      if ($(input).val().trim() == "") {
        return false;
      }
    }
  }
  function showValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).addClass("alert-validate");
  }
  function hideValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass("alert-validate");
  }
  $(".contact100-btn-hide").on("click", function () {
    $(".wrap-contact100").fadeOut(400);
  });
  $(".contact100-btn-show").on("click", function () {
    $(".wrap-contact100").fadeIn(400);
  });
})(jQuery);

const Name = document.getElementById('name')
const email = document.getElementById('email')
const message =document.getElementById('message')
const recemail = document.getElementById('recname')


// button
// console.log(Name)
// let btn = document.getElementById('btn')
// let position;
// btn.addEventListener('mouseover',()=>{
//     if (Name.value.trim() == '' && email.value.trim() == '' && message.value.trim() == '') {
//         position?(position = 0):(position = 450);
//         btn.style.transform = `translate(${position}px, 0px)`
//         btn.style.transition = 'all 0.3s ease'
//     } else {
//         btn.style.transform = `translate(0px)`
//         btn.style.transition = 'all 0.3s ease'
//     }
    
// })