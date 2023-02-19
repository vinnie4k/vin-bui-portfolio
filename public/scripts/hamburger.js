$(document).ready(function () {
  $('.hamburger').click(function () {
    $('.hamburger').toggleClass("active");
    $('.nav-list').toggleClass("active");
    // $('main').toggleClass("darken");
    $('body').toggleClass("fixed-position");
  })
})
