$('.menu_btn').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu_btn_active');
  $('#navigation').slideToggle(300, 'linear');
});

/* popup */
$('#order_call').on('click', function(e) {
  e.preventDefault();
  $('.popup-fade').fadeIn();
});

$('.popup-close').on('click', function() {
  $(this).parents('.popup-fade').fadeOut();
  return false;
});

// Закрытие по клавише Esc.
$(document).keydown(function(e) {
  if (e.keyCode === 27) {
    e.stopPropagation();
    $('.popup-fade').fadeOut();
  }
});

// Клик по фону, но не по окну.
$('.popup-fade').click(function(e) {
  if ($(e.target).closest('.popup').length == 0) {
    $(this).fadeOut();
  }
});

//проверка правильности введённых данных.
$('.certificated_seats_form_card form').on('submit', function(e) {
  e.preventDefault();
  $('.success').show();
})

/* конец обработки popup. */
