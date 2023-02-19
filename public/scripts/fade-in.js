$(document).ready(function () {
  $(window).scroll(function () {
    $('.fademe').each(function (i) {
      var topObject = $(this).position().top;
      var botWindow = $(window).scrollTop() + $(window).height();

      if (topObject + 250 < botWindow) {
        $(this).animate(
          {
            'opacity': '1',
            'margin-top': '0px'
          }, 750);
      }
    })
  })
})

$(document).ready(function () {
  $(window).scroll(function () {
    $('.fademe-footer').each(function (i) {
      var topObject = $(this).position().top;
      var botWindow = $(window).scrollTop() + $(window).height();

      if (topObject + 50 < botWindow) {
        $(this).animate(
          {
            'opacity': '1'
          }, 750);
      }
    })
  })
})
