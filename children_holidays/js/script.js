$(document).ready(function() {
	$('.favourite_pictures_slider').slick({
		infinite: true,
		arrows: false,
		dots: false,
		//slidesToShow: 1,
		//slidesToScroll: 1,
		adaptiveHeight: true,
		//speed: 2000, 300 по умолчанию.
		//autoplay: true, //false - по умолчанию.
		//autoplaySpeed: 100,
		//initialSlide: 1,
		draggable: true,
		//centerMode: true,
		variableWidth: true,
		responsive: [
    	{
	      breakpoint: 992,
	      settings: {
	        variableWidth: false, 
	        slidesToShow: 3,
      	}
    	},
    	{
	      breakpoint: 670,
	      settings: {
	        variableWidth: false, 
	        slidesToShow: 2,
      	}
    	},
    	/*{
	      breakpoint: 500,
	      settings: {
	        variableWidth: false, 
	        slidesToShow: 1,
      	}
    	},*/
    ]
	});
});

//.where_trip
// изменение цвета при наведении.
var tripElement1 = document.getElementById('where_trip_choices_region-1');
var tripElement2 = document.getElementById('where_trip_choices_region-2');
var tripElement3 = document.getElementById('where_trip_choices_region-3');

console.log(tripElement1);

tripElement1.addEventListener('hover', function (event) {
 console.log(event.type + ' got fired');
})