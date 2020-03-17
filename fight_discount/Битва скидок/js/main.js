$('.menu_btn').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu_btn_active');
  $('#navigation').slideToggle(300, 'linear');
});

$('.faq_button').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('faq_button_active');
  //обратиться к родительскому элементу
  $(this).parent().next('.faq_answer').slideToggle(500, 'linear');
  //$('.faq_answer').slideToggle(500, 'linear');
});
