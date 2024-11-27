(function ($) {
  // Popup element
  $(".popup-close, .popup-preference-button").on("click", function () {
    $(".popup-wrapper").fadeOut();
  });

  $(".language").on("click", function () {
    $(".popup-welcome").hide();
    if($(this).hasClass("language-es")) {
      $(".popup-language#es").show();
    } else {
      $(".popup-language#en").show();
    }
  });

  $(".popup-back").on("click", function () {
    $(".popup-welcome").show();
    $(".popup-language").hide();
  });
})(jQuery);