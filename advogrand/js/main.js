$('.menu_btn').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu_btn_active');
  $('#navigation').slideToggle(300, 'linear');
});
