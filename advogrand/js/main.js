$('.menu_btn').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu_btn_active');
  $('#navigation').slideToggle(300, 'linear');
});

//проигрывание видео при нажатии на кнопку.
$('.video_button').on('click', function(e) {
  e.preventDefault;
  var video = $(this).prev('.video')[0];
  var i_image_play = $(this).children('.fa-play-circle')[0];
  var i_image_pause = $(this).children('.fa-pause-circle')[0];
  console.log(i_image_play);
  console.log(i_image_pause);
  if(video.paused) {
    video.play();
    i_image_play.style.display = "none";
    i_image_pause.style.display = "block";
  } else {
    video.pause();
    i_image_play.style.display = "block";
    i_image_pause.style.display = "none";
  }
})
