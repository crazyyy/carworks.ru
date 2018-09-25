// Avoid `console` errors in browsers that lack a console.
(function() {
  var method
  var noop = function() {}
  var methods = [
    "assert",
    "clear",
    "count",
    "debug",
    "dir",
    "dirxml",
    "error",
    "exception",
    "group",
    "groupCollapsed",
    "groupEnd",
    "info",
    "log",
    "markTimeline",
    "profile",
    "profileEnd",
    "table",
    "time",
    "timeEnd",
    "timeline",
    "timelineEnd",
    "timeStamp",
    "trace",
    "warn"
  ]
  var length = methods.length
  var console = (window.console = window.console || {})

  while (length--) {
    method = methods[length]

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop
    }
  }
})()
if (typeof jQuery === "undefined") {
  console.warn("jQuery hasn't loaded")
} else {
  console.log("jQuery " + jQuery.fn.jquery + " has loaded")
}
// Place any jQuery/helper plugins in here.
$(document).ready(function() {
  $('.modal-close').on('click', function(e) {
    console.log('obj');
    CloseModal()
  })
  $('.modal-bg').on('click', function(e) {
    console.log('obj');
    CloseModal()
  })

  $('.modal-container').on('click', function(e) {
    e.stopPropagation();
  })
  $('.header-buttons--order').on('click', function(e) {
    e.stopPropagation();
    var html = $('.call-me-hidden form');
    OpenModal(html);
    $('.modal-bg').addClass('modal-bg--opened').addClass('modal-recall');
  })
});
function CloseModal() {
  if ($('.modal-bg').hasClass('modal-product')) {
    var html = $('.modal-container').html();
    $('.product-shortdescr--form').html(html);
  }
  if ($('.modal-bg').hasClass('modal-product-cat')) {
    var html = $('.modal-container').html();
    $('.loop-container--hidden').html(html);
  }
  $('.modal-container').html('');
  $('.modal-bg').attr('class', '').addClass('modal-bg');
  $('body').removeClass('modal-opened');
}
function OpenModal(html) {
  $('.modal-container').html(html);
  $('body').addClass('modal-opened');
}
