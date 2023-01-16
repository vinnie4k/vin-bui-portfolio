$(document).ready(function () {
  $(window).scroll(function () {
    $('.fademe').each(function(i) {
      var topObject = $(this).position().top;
      var botWindow = $(window).scrollTop() + $(window).height();

      if(topObject + 250 < botWindow) {
        $(this).animate(
          {
            'opacity':'1'}, 1500);
          }
    })
  })
})

$(document).ready(function () {
  $(window).scroll(function () {
    $('.fademe-footer').each(function(i) {
      var topObject = $(this).position().top;
      var botWindow = $(window).scrollTop() + $(window).height();

      if(topObject + 150 < botWindow) {
        $(this).animate(
          {
            'opacity':'1'}, 1500);
          }
    })
  })
})
