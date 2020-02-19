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